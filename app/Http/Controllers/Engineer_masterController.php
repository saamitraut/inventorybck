<?php namespace App\Http\Controllers;

use App\Models\Engineer_master as Engineer_master;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
class Engineer_masterController extends Controller {

    public function index()
      { 
        $data['engineer_masters'] = Engineer_master::all();
        return view('engineer_master/index',$data);
      }
    public function add()
      { 
        return view('engineer_master/add');
      }
    public function addPost()
      {
        $engineer_master_data = array(
             'accessid' => Input::get('accessid'), 
             'EngineerName' => Input::get('EngineerName'), 
             'Mobile' => Input::get('Mobile'), 
             'Email' => Input::get('Email'), 
             'Designation' => Input::get('Designation'), 
             'Status' => Input::get('Status'), 
            );
                        $engineer_master_id = Engineer_master::insert($engineer_master_data);
        return redirect('engineer_master')->with('message', 'Engineer_master successfully added');
    }
    public function delete($id)
    {   
        $engineer_master=Engineer_master::find($id);
        $engineer_master->delete();
        return redirect('engineer_master')->with('message', 'Engineer_master deleted successfully.');
    }
    public function edit($id)
    {   
        $data['engineer_master']=Engineer_master::find($id);
        return view('engineer_master/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('engineer_master_id');
        $engineer_master=Engineer_master::find($id);
                                                       
        $engineer_master_data = array(
          'accessid' => Input::get('accessid'), 
          'EngineerName' => Input::get('EngineerName'), 
          'Mobile' => Input::get('Mobile'), 
          'Email' => Input::get('Email'), 
          'Designation' => Input::get('Designation'), 
          'Status' => Input::get('Status'), 
        );
        $engineer_master_id = Engineer_master::where('id', '=', $id)->update($engineer_master_data);
        return redirect('engineer_master')->with('message', 'Engineer_master Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $engineer_master=Engineer_master::find($id);
        $engineer_master->status=!$engineer_master->status;
        $engineer_master->save();
        return redirect('engineer_master')->with('message', 'Change engineer_master status successfully');
    }
     public function view($id)
    {   
        $data['engineer_master']=Engineer_master::find($id);
        return view('engineer_master/view',$data);
        
    }
}
