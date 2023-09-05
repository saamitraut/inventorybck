<?php 
namespace App\Http\Controllers;
use App\Models\Requiredfor_master as Requiredfor_master;
use App\Models\Outward_master as Outward_master;
use App\Models\Material_master as Material_master;
use App\Models\Branch_master as Branch_master;
use App\Models\Supplier as Supplier;
use App\Models\Inward_master as Inward_master;
use App\Models\Unit_master as Unit_master;  use App\Models\Engineer_master as Engineer_master;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Models\Purpose_master as Purpose_master;
use Hash;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OutwardExport;
use Illuminate\Support\Facades\Auth;

class Outward_masterController extends Controller {

    public function index()
      { 
		//	Change done for branch user login 27th April 2023 below
		$login_data=Auth::user();
		// echo $login_data->branch_id;exit;
		//	Change done for branch user login 27th April 2023 above
			
        // $data['outward_masters'] = Outward_master::paginate(5);      
        $material_id=false; $issuedon=false; $branch_id=false; $required_for=false; $purpose=false;

        // searching purpose
        
        if (request()->has('material_id') and (request()->input('material_id') != "Select Material")) {
            $material_id=request()->input('material_id');
        }
        if (request()->has('issuedon') and ! is_null(request()->input('issuedon'))) {
          $issuedon=request()->input('issuedon');
        }
        if (request()->has('branch_id') and (request()->input('branch_id') != "Select Branch")) {
          $branch_id=request()->input('branch_id');
        }
        if (request()->has('required_for')  and (request()->input('required_for') != "Select required_for")) {
          $required_for=request()->input('required_for');
        }
        if (request()->has('purpose') and (request()->input('purpose') != "Select purpose")) {
          $purpose=request()->input('purpose');
        }
		
		//	Change done for branch user login 27th April 2023 below
		if($login_data->branch_id){
			$branch_id=$login_data->branch_id;
		}
		//	Change done for branch user login 27th April 2023 above
		
        $data['outward_masters'] = Outward_master::list(false,$material_id,$issuedon,$branch_id,$required_for,$purpose);
        
        $data['required_fors'] = Requiredfor_master::list2(); 

        $data['purposes'] = Purpose_master::list();

        $data['materials'] = Material_master::list();
        
        $data['Branches'] = Branch_master::list2(); 
        $data['Engineers'] = Engineer_master::where('status',1)->get(); 

        $data['responsible_persons']=[
          1=>'Rajesh Nathani',
          2=>'Pankaj Pise',
          3=>'Sanjay mali',
          4=>'santosh sawarde',
          5=>'azhar mujawar',
          6=>'Manoj Bhurat',
          7=>'Madhav Betgeri',
          8=>'Dhanesh Shete',
          9=>'nurulamen bhokare'];
        // dd($data);
        
        return view('outward_master/index',$data);
        
      }
    public function add()
      { 
        $data['materials'] = Material_master::all();
        return view('outward_master/add');
      }
    
      public function addPost()
      {
        for($i=1;$i<=5;$i++){
        if(Input::get('material_id'.$i)==0) continue;
        $outward_master_data = array(
             'material_id' => Input::get('material_id'.$i), 
             'material_description' => Input::get('material_description'.$i), 
             'opening_stock' => Input::get('opening_stock'.$i), 
             'issued' => Input::get('issued'.$i), 
             'closing_stock' => Input::get('closing_stock'.$i), 
             'unit_id' => Input::get('unit_id'), 
             'created_at' => Carbon::now()->toDateTimeString(), 
             'unit_id' => Input::get('unit_id'),
             'branch_id' => Input::get('branch_id'), 
             'required_for' => Input::get('required_for'),  
             'purpose' => Input::get('purpose'),
             'aa' => Input::get('aa'),
             'customer_name' => Input::get('customer_name'),
             'mobile' => Input::get('mobile'),
             'area' => Input::get('area'),
             'issued_to_staff' => Engineer_master::where('accessid',explode("-",Input::get('issued_to_staff'))[0])->first()->id,
             'responsible_person' => Input::get('responsible_person'),
             'receipt_no' => Input::get('receipt_no'), 
             'inward_id' => Input::get('inward_id'.$i),
             'rate' => Input::get('rate'.$i),
             'amount' => Input::get('amount'.$i),
             'customerid' => Input::get('customerid'),       
            );            
            // dd($outward_master_data);
            $outward_master_id = Outward_master::insert($outward_master_data);
          }

        return redirect('outward_master')->with('message', 'Outward_master successfully added');
    }
    
    public function delete($id)
    {   
        $outward_master=Outward_master::find($id);
        $outward_master->delete();
        return redirect('outward_master')->with('message', 'Outward_master deleted successfully.');
    }
    public function edit($id)
    {   
        $data['outward_master']=Outward_master::find($id);
        $data['materials'] = Material_master::all()->toArray();  
        return view('outward_master/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('outward_master_id');
        $outward_master=Outward_master::find($id);                                                       
        $outward_master_data = array(
          'material_id' => Input::get('material_id'), 
          'material_description' => Input::get('material_description'), 
          'opening_stock' => Input::get('opening_stock'), 
          'issued' => Input::get('issued'), 
          'closing_stock' => Input::get('closing_stock'), 
          'unit_id' => Input::get('unit_id'),          
          'issuedon' => Input::get('issuedon'),
          'branch_id' => Input::get('branch_id'), 
          'required_for' => Input::get('required_for'),  
          'purpose' => Input::get('purpose'),
          'aa' => Input::get('aa'),
          'customer_name' => Input::get('customer_name'),
          'mobile' => Input::get('mobile'),
          'area' => Input::get('area'),
          'issued_to_staff' => Input::get('issued_to_staff'),
          'responsible_person' => Input::get('responsible_person'),
          'receipt_no' => Input::get('receipt_no'),
         
        );
        $outward_master_id = Outward_master::where('id', '=', $id)->update($outward_master_data);
        return redirect('outward_master')->with('message', 'Outward_master Updated successfully');
    }
     
    public function changeStatus($id)
    {   
        $outward_master=Outward_master::find($id);
        $outward_master->status=!$outward_master->status;
        $outward_master->save();
        return redirect('outward_master')->with('message', 'Change outward_master status successfully');
    }
     public function view($id)
    {   
        $data['outward_master']=Outward_master::find($id);
         $data['units']=Unit_master::all()->toArray();
        $data['materials'] = Material_master::all()->toArray();
        return view('outward_master/view',$data);
        
    }
    //  Export to excel    
    public function exportExcel()
    {
      return Excel::download(new OutwardExport, 'Outward.xlsx');
    }  
    //  Export to csv
    public function exportCSV()
    {
      return Excel::download(new OutwardExport, 'Outward.csv');
    }

}
