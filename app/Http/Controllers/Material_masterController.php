<?php 
namespace App\Http\Controllers;
use App\Models\Unit_master as Unit_master;
use App\Models\Material_master as Material_master;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MaterialExport;

class Material_masterController extends Controller {

    public function index()
      { 
        $data['material_masters'] = Material_master::list2();        
        
        // dd(Material_master::List2());
        // searching purpose
        if (request()->has('name')) {          
            $data['material_masters']=Material_master::list2(false,request()->input('name'));
            // $data['material_masters']=Material_master::where('name', '=', request()->input('name'))->paginate(5);
        }

        $data['units'] = Unit_master::all()->toArray();
        return view('material_master/index',$data);
      }
    
      public function add()
      { 
        return view('material_master/add');
      }
    public function addPost()
      {
        $material_master_data = array(
             'name' => Input::get('name'), 
             'GST' => Input::get('GST'), 
            );
        $material_master_id = Material_master::insert($material_master_data);
        return redirect('material_master')->with('message', 'Material_master successfully added');
    }
    public function delete($id)
    {   
        $material_master=Material_master::find($id);
        $material_master->delete();
        return redirect('material_master')->with('message', 'Material_master deleted successfully.');
    }
    public function edit($id)
    {   
        $data['material_master']=Material_master::find($id);
        return view('material_master/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('material_master_id');
        $material_master=Material_master::find($id);
                       
        $material_master_data = array(
          'name' => Input::get('name'), 
          'GST' => Input::get('GST'), 
        );
        $material_master_id = Material_master::where('id', '=', $id)->update($material_master_data);
        return redirect('material_master')->with('message', 'Material_master Updated successfully');
    }    
    public function changeStatus($id)
    {   
        $material_master=Material_master::find($id);
        $material_master->status=!$material_master->status;
        $material_master->save();
        return redirect('material_master')->with('message', 'Change material_master status successfully');
    }
     public function view($id)
    {   
        $data['material_master']=Material_master::find($id);
        return view('material_master/view',$data);
        
    }
    //  Export to excel
    public function exportExcel()
    {
      return Excel::download(new MaterialExport, 'Material.xlsx');
    }  
    //  Export to csv
    public function exportCSV()
    {
      return Excel::download(new MaterialExport, 'Material.csv');
    }

}
