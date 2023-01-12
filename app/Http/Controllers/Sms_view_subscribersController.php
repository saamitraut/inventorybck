<?php namespace App\Http\Controllers;

use App\Models\Sms_view_subscribers as Sms_view_subscribers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
class Sms_view_subscribersController extends Controller {

    public function index()
      { 
        $data['sms_view_subscriberss'] = Sms_view_subscribers::paginate(5);
		
        return view('sms_view_subscribers/index',$data);
      }
    public function add()
      { 
        return view('sms_view_subscribers/add');
      }
    public function addPost()
      {
        $sms_view_subscribers_data = array(
             'customerid' => Input::get('customerid'), 
             'SubscriberName' => Input::get('SubscriberName'), 
             'MobileNo' => Input::get('MobileNo'), 
             'Area' => Input::get('Area'), 
             'Address' => Input::get('Address'), 
            );
                    $sms_view_subscribers_id = Sms_view_subscribers::insert($sms_view_subscribers_data);
        return redirect('sms_view_subscribers')->with('message', 'Sms_view_subscribers successfully added');
    }
    public function delete($id)
    {   
        $sms_view_subscribers=Sms_view_subscribers::find($id);
        $sms_view_subscribers->delete();
        return redirect('sms_view_subscribers')->with('message', 'Sms_view_subscribers deleted successfully.');
    }
    public function edit($id)
    {   
        $data['sms_view_subscribers']=Sms_view_subscribers::find($id);
        return view('sms_view_subscribers/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('sms_view_subscribers_id');
        $sms_view_subscribers=Sms_view_subscribers::find($id);
                                               
        $sms_view_subscribers_data = array(
          'customerid' => Input::get('customerid'), 
          'SubscriberName' => Input::get('SubscriberName'), 
          'MobileNo' => Input::get('MobileNo'), 
          'Area' => Input::get('Area'), 
          'Address' => Input::get('Address'), 
        );
        $sms_view_subscribers_id = Sms_view_subscribers::where('id', '=', $id)->update($sms_view_subscribers_data);
        return redirect('sms_view_subscribers')->with('message', 'Sms_view_subscribers Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $sms_view_subscribers=Sms_view_subscribers::find($id);
        $sms_view_subscribers->status=!$sms_view_subscribers->status;
        $sms_view_subscribers->save();
        return redirect('sms_view_subscribers')->with('message', 'Change sms_view_subscribers status successfully');
    }
     public function view($id)
    {   
        $data['sms_view_subscribers']=Sms_view_subscribers::find($id);
        return view('sms_view_subscribers/view',$data);
        
    }

    public function details($customerid)
    {
      $customer= Sms_view_subscribers::where('customerid',$customerid)->first();
      if(is_null($customer)) return 0;
      return $customer;
    }
  }
