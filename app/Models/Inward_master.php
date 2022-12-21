<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Eloquent;

class Inward_master extends Eloquent  {

    protected $table = 'inward_master';
    static function list($export=false,$material_id=false,$supplier=false,$receivedon=false,$receiptno=false)
    {
        $return=self::leftjoin('supplier', 'inward_master.supplier', '=', 'supplier.id')
                    ->leftjoin('material_master', 'inward_master.material_id', '=', 'material_master.id');
        
        if($export){
            $return=$return->select('material_master.name as material','material_description','supplier.name as supplier','received','return','inward_master.rate','amount','receivedon');
        }else{
            $return=$return->select('inward_master.id','inward_master.material_id','inward_master.material_description','inward_master.received','inward_master.return','inward_master.rate','inward_master.amount','inward_master.receivedon','inward_master.status','inward_master.image','inward_master.receiptno','material_master.name as material','supplier.name as supplier');
        }        
        
        if($material_id){
            $return=$return->where('material_id', '=', $material_id);
        }
        if($supplier){
            $return=$return->where('supplier', '=', $supplier);
        }
        if($receivedon){
            $return=$return->where('receivedon', 'like', $receivedon.'%');
        }
        if($receiptno){
            $return=$return->where('receiptno', 'like', $receiptno.'%');
        }
        if($export){
            $return=$return->orderBy('inward_master.id', 'desc')->get();
        }else{
            $return=$return->orderBy('inward_master.id', 'desc')->paginate(5);
        } 
        
        return $return;    
    }
}