<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Eloquent;

class Outward_master extends Eloquent  {

    protected $table = 'outward_master';
     protected $dates = ['issuedon'];
     static function list($export=false,$material_id=false,$issuedon=false,$branch_id=false,$required_for=false,$purpose=false)
    {
        $return=self::leftjoin('branch_master', 'outward_master.branch_id', '=', 'branch_master.id')
                    ->leftjoin('material_master', 'outward_master.material_id', '=', 'material_master.id')
                    ->leftjoin('requiredfor_master', 'outward_master.required_for', '=', 'requiredfor_master.id')
                    ->leftjoin('purpose_master', 'outward_master.purpose', '=', 'purpose_master.id');
        
        if($export){
            $return=$return->select('material_master.name as material','outward_master.material_description','outward_master.issued','outward_master.issuedon','branch_master.name as branch','requiredfor_master.name as requiredfor','purpose_master.name as purpose');
        }else{
            $return=$return->select('outward_master.*','material_master.name as material','branch_master.name as branch','requiredfor_master.name as requiredfor','purpose_master.name as purpose');
        }        
        
        if($material_id){
            $return=$return->where('material_id', '=', $material_id);
        }
        if($issuedon){
            $return=$return->where('issuedon', 'like', $issuedon.'%');
        }
        if($branch_id){
            $return=$return->where('branch_id', '=', $branch_id);
        }
        if($required_for){
            $return=$return->where('required_for', '=', $required_for);
        }
        if($purpose){
            $return=$return->where('purpose', 'like', $purpose.'%');
        }
        if($export){
            $return=$return->orderBy('outward_master.id', 'desc')->get();
        }else{
            $return=$return->orderBy('outward_master.id', 'desc')->paginate(5);
        }         
        return $return;    
    }
}