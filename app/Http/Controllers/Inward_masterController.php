<?php 
namespace App\Http\Controllers;
use App\Models\Material_master as Material_master;
use App\Models\Supplier as Supplier;
use App\Models\Inward_master as Inward_master;
use App\Models\Unit_master as Unit_master;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;use Response;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\InwardExport;
use Illuminate\Http\Request;

class Inward_masterController extends Controller {

    public function index()
      { 
        $material_id=false;    $supplier=false;   $receivedon=false;  $receiptno=false;
        
        // if(count(request()->all())>0) {dd(request()->all());}
        if (request()->has('material_id') and (request()->input('material_id') != "Select Material")) {
          $material_id= request()->input('material_id');
        }
        if (request()->has('supplier') and (request()->input('supplier') != "Select Supplier")) {
          $supplier= request()->input('supplier');
        }
        if (request()->has('receivedon') and ! is_null(request()->input('receivedon'))) {          
          $receivedon= request()->input('receivedon');
        }
        if (request()->has('receiptno') and ! is_null(request()->input('receiptno'))) {          
          $receiptno= request()->input('receiptno');
        }

        $data['inward_masters'] = Inward_master::list(false,$material_id,$supplier,$receivedon,$receiptno);
        $data['suppliers'] = Supplier::all()->toArray();  
        $data['units']=Unit_master::all()->toArray();        
        $data['materials'] = Material_master::all()->toArray();        
        
        return view('inward_master/index',$data);
      }    
    public function add()
      { 
        $data['materials'] = Material_master::all();
        
        return view('inward_master/add',$data);
      }
    public function addPost(Request $request)
      {
        $inward_master_data = $request->validate([
          'material_id' => 'required',
          'material_description' => 'required',
          'supplier' => 'required',
          'received' => 'required',
          'return' => 'present',
          'rate' => 'present',
          'receivedon' => 'required',
          'amount' => 'present',
          // 'image' => 'present',
          'receiptno' => 'required|unique:inward_master,receiptno',
          'opening_stock' => 'required',
          'closing_stock' => 'required',
          'reorder' => 'present',
      ]);
        
        if (Input::hasFile('image')) {
            $destinationPath = 'uploads'; 
            $image = Input::file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath,$image_name);
            $inward_master_data['image'] = $image_name;
        }
        // dd($inward_master_data);
        $inward_master_id = Inward_master::insert($inward_master_data);
        session(['message' => 'Inward_master successfully added']);
        return Response::json(['message'=>'Inward_master successfully added']);
        // return redirect('inward_master')->with('message', 'Inward_master successfully added');
    }
    public function delete($id)
    {   
        $inward_master=Inward_master::find($id);
        $inward_master->delete();
        return redirect('inward_master')->with('message', 'Inward_master deleted successfully.');
    }
    public function edit($id)
    {   
        $data['inward_master']=Inward_master::find($id);
        $data['materials'] = Material_master::all()->toArray();        
        
        return view('inward_master/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('inward_master_id');
        $inward_master=Inward_master::find($id);
        if (Input::hasFile('image')) {
          $destinationPath = 'uploads'; 
          $image = Input::file('image');
          // $image_name = $image->getClientOriginalName();
          $image_name = time().'.'.$image->getClientOriginalExtension();
          $image->move($destinationPath,$image_name);
          @unlink($destinationPath.'/'.$inward_master->image);
        }
        else
        {
          $image_name=$inward_master->image;
        }                                                             
        $inward_master_data = array(
          'material_id' => Input::get('material_id'), 
          'material_description' => Input::get('material_description'), 
          'received' => Input::get('received'), 
          'return' => Input::get('return'), 
          'rate' => Input::get('rate'),  'receiptno' => Input::get('receiptno'), 
          'amount' => Input::get('rate')*Input::get('received'), 
          'image' => $image_name,
        );
        $inward_master_id = Inward_master::where('id', '=', $id)->update($inward_master_data);
        return redirect('inward_master')->with('message', 'Inward_master Updated successfully');
    }
    
    public function changeStatus($id)
    {   
        $inward_master=Inward_master::find($id);
        $inward_master->status=!$inward_master->status;
        $inward_master->save();
        return redirect('inward_master')->with('message', 'Change inward_master status successfully');
    }
     public function view($id)
    {   
        $data['inward_master']=Inward_master::find($id);
        $data['units']=Unit_master::all()->toArray();
        $data['materials'] = Material_master::all()->toArray();
        return view('inward_master/view',$data);
        
    }
//  Export to excel
    public function exportExcel()
    {
      return Excel::download(new InwardExport, 'Inward.xlsx');
    }  
    //  Export to csv
    public function exportCSV()
    {
      return Excel::download(new InwardExport, 'Inward.csv');
    }

}