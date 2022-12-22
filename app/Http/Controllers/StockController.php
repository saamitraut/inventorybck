<?php 
namespace App\Http\Controllers;
use App\Models\Material_master as Material_master;
use App\Models\Supplier as Supplier;
use App\Models\Stock as Stock;
use App\Models\Report as Report;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
use App\Models\Inward_master as Inward_master;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StockExport;

class StockController extends Controller {

    public function index()
      { 
        $material_id=false;  $issuedon=false;

        if (request()->has('material_id') and (request()->input('material_id') != "Select Material")) {
            $material_id=request()->input('material_id');
        }
        if (request()->has('issuedon') and ! is_null(request()->input('issuedon'))) {
          $issuedon=request()->input('issuedon');
        }
        
        $data['Stocks'] = Stock::List(false,$material_id,$issuedon);
   
         $materials= Material_master::all()->toArray();   
        $res=array();
        foreach ($materials as $material) {
          $res[$material['id']]=$material;
        }
        $data['materials'] = $res; 
        
        $suppliers = Supplier::all()->toArray();  
        $res=array();
        foreach ($suppliers as $supplier) {
          $res[$supplier['id']]=$supplier;
        }

        $data['reports'] = Report::List();
        $materials= Material_master::all()->toArray();   
        $res=array();
        foreach ($materials as $material) {
          $res[$material['id']]=$material;
        }
        $data['materials'] = $res; 
        $data['suppliers'] = $res; 
        $data['inward_masters'] = Inward_master::all();
        return view('Stock/index',$data);
      }
    public function add()
      { 
        return view('Stock/add');
      }
    public function addPost()
      {
        $Stock_data = array(
             'material_id' => Input::get('material_id'), 
             'credit' => Input::get('credit'), 
             'credited_on' => Input::get('credited_on'), 
             'debit' => Input::get('debit'), 
             'debited_on' => Input::get('debited_on'), 
            );
                    $Stock_id = Stock::insert($Stock_data);
        return redirect('Stock')->with('message', 'Stock successfully added');
    }
    public function delete($id)
    {   
        $Stock=Stock::find($id);
        $Stock->delete();
        return redirect('Stock')->with('message', 'Stock deleted successfully.');
    }
    public function edit($id)
    {   
        $data['Stock']=Stock::find($id);
        return view('Stock/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('Stock_id');
        $Stock=Stock::find($id);
                                               
        $Stock_data = array(
          'material_id' => Input::get('material_id'), 
          'credit' => Input::get('credit'), 
          'credited_on' => Input::get('credited_on'), 
          'debit' => Input::get('debit'), 
          'debited_on' => Input::get('debited_on'), 
        );
        $Stock_id = Stock::where('id', '=', $id)->update($Stock_data);
        return redirect('Stock')->with('message', 'Stock Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $Stock=Stock::find($id);
        $Stock->status=!$Stock->status;
        $Stock->save();
        return redirect('Stock')->with('message', 'Change Stock status successfully');
    }
     public function view($id)
    {   
        $data['Stock']=Stock::find($id);
        return view('Stock/view',$data);
        
    }

    /**
   * Export to excel
   */
  public function exportExcel()
  {
    return Excel::download(new StockExport, 'Stock.xlsx');
  }
  /**
   * Export to csv
   */
  public function exportCSV()
  {
    return Excel::download(new StockExport, 'Stock.csv');
  }
}