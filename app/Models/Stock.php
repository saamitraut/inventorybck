<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
use Eloquent;

class Stock extends Eloquent  {

    protected $table = 'stock';
     protected $dates = ['date'];

     static function list($export=false,$material_id=false,$issuedon=false){

        if($export){
            $return=self::select('material_master.name as material','Stock.credit','Stock.debit','Stock.date');
        }else{
             $return=self::select('material_master.name as material','Stock.*');
        }

        if($material_id){
            $return=$return->where('material_id', '=', $material_id);
        }
        if($issuedon){
            $return=$return->where('date', 'like', $issuedon.'%');
        }
       
        $return=$return->leftjoin('material_master', 'Stock.material_id', '=', 'material_master.id');
        if($export){
            $return=$return->orderBy('stock.date', 'desc')->get();
        }else{
            $return=$return->orderBy('stock.date', 'desc')->paginate(5);
        }         
        return $return;   
     }


    }