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
            $return=$return->select('material_master.name as material','material_description','supplier.name as supplier','received','return','inward_master.rate','transportation','amount','receivedon');
        }else{
            $return=$return->select('inward_master.id','inward_master.material_id','inward_master.material_description','inward_master.opening_stock','inward_master.received','inward_master.closing_stock','inward_master.return','inward_master.rate','inward_master.amount','inward_master.receivedon','inward_master.status','inward_master.image','inward_master.receiptno','inward_master.transportation','material_master.name as material','supplier','supplier.name as suppliername','inward_master.reorder',);
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
    static function reorders(){
        return self::leftjoin('material_master', 'inward_master.material_id', '=', 'material_master.id')
                    ->select('material_master.name as material','inward_master.reorder')
                    
                    ->whereRaw('inward_master.id in (select max(id) from inward_master group by material_id)')
                    ->whereNotNull('reorder')
                    ->get();
    }


}