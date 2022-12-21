<?php 
namespace App\Http\Controllers;
use App\Models\Supplier as Supplier;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\SupplierExport;
class SupplierController extends Controller {

    public function index()
      { 
        // $data['Suppliers'] = Supplier::all();
        
        $data['Suppliers'] = Supplier::list();

        // searching purpose
        $name=false; $number=false; $address=false;
        if (request()->has('name')) {$name= request()->input('name');}
        if (request()->has('number')) {$number= request()->input('number');}
        if (request()->has('address')) {$address= request()->input('address');}
        $data['Suppliers']=Supplier::list(false,$name,$number,$address);
        return view('Supplier/index',$data);
      }

    public function add()
      { 
        return view('Supplier/add');
      }
    public function addPost()
      {
        $Supplier_data = array(
             'name' => Input::get('name'), 
             'number' => Input::get('number'), 
             'address' => Input::get('address'), 
            );
            $Supplier_id = Supplier::insert($Supplier_data);
        return redirect('Supplier')->with('message', 'Supplier successfully added');
    }
    public function delete($id)
    {   
        $Supplier=Supplier::find($id);
        $Supplier->delete();
        return redirect('Supplier')->with('message', 'Supplier deleted successfully.');
    }
    public function edit($id)
    {   
        $data['Supplier']=Supplier::find($id);
        return view('Supplier/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('Supplier_id');
        $Supplier=Supplier::find($id);
                               
        $Supplier_data = array(
          'name' => Input::get('name'), 
          'number' => Input::get('number'), 
          'address' => Input::get('address'), 
        );
        $Supplier_id = Supplier::where('id', '=', $id)->update($Supplier_data);
        return redirect('Supplier')->with('message', 'Supplier Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $Supplier=Supplier::find($id);
        $Supplier->status=!$Supplier->status;
        $Supplier->save();
        return redirect('Supplier')->with('message', 'Change Supplier status successfully');
    }
     public function view($id)
    {   
        $data['Supplier']=Supplier::find($id);
        return view('Supplier/view',$data);
        
    }
    //  Export to excel
    public function exportExcel()
    {
      return Excel::download(new SupplierExport, 'Supplier.xlsx');
    }  
    //  Export to csv
    public function exportCSV()
    {
      return Excel::download(new SupplierExport, 'Supplier.csv');
    }
}
