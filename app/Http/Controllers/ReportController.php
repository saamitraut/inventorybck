<?php namespace App\Http\Controllers;
use App\Models\Material_master as Material_master;
use App\Models\Supplier as Supplier;
use App\Models\Report as Report;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\ReportExport;

use Hash;

class ReportController extends Controller {

    public function index()
      { 
        $data['reports'] = Report::all();
        // dd(Report::List());
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
        $data['suppliers'] = $res; 
        return view('report/index',$data);
      }
    public function add()
      { 
        return view('report/add');
      }
    public function addPost()
      {
        $report_data = array(
             'material_id' => Input::get('material_id'), 
             'credit' => Input::get('credit'), 
             'debit' => Input::get('debit'), 
             'availableStock' => Input::get('availableStock'), 
            );
                $report_id = Report::insert($report_data);
        return redirect('report')->with('message', 'Report successfully added');
    }
    public function delete($id)
    {   
        $report=Report::find($id);
        $report->delete();
        return redirect('report')->with('message', 'Report deleted successfully.');
    }
    public function edit($id)
    {   
        $data['report']=Report::find($id);
        return view('report/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('report_id');
        $report=Report::find($id);
                                       
        $report_data = array(
          'material_id' => Input::get('material_id'), 
          'credit' => Input::get('credit'), 
          'debit' => Input::get('debit'), 
          'availableStock' => Input::get('availableStock'), 
        );
        $report_id = Report::where('id', '=', $id)->update($report_data);
        return redirect('report')->with('message', 'Report Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $report=Report::find($id);
        $report->status=!$report->status;
        $report->save();
        return redirect('report')->with('message', 'Change report status successfully');
    }
     public function view($id)
    {   
        $data['report']=Report::find($id);
        return view('report/view',$data);
        
    }
  
  public function details($id)
    {   
        $report=Report::where('material_id', '=', $id)->first();
        if(is_null($report)){
          return array('material_id'=>$id,'credit'=>0,'debit'=>0,'availableStock'=>0);
        }else{
          return $report->toArray();
        }
        
        // return redirect('report')->with('message', 'Report deleted successfully.');
    }
  /**
   * Export to excel
   */
  public function exportExcel()
  {
    return Excel::download(new ReportExport, 'list.xlsx');
  }
  /**
   * Export to csv
   */
  public function exportCSV()
  {
    return Excel::download(new ReportExport, 'list.csv');
  }
}