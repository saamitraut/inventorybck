<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Eloquent;

class Supplier extends Eloquent  {

    protected $table = 'supplier';
    static function list($export=false,$name=false,$number=false,$address=false)
    {
        if($export){
            $return=self::select('name','number','address');
        }else{
            $return=self::select('*');
        }        
        
        if($name){
            $return=$return->where('name', 'like', '%'.$name.'%');
        }
        if($number){
            $return=$return->where('number', 'like', '%'.$number.'%');
        }
        if($address){
            $return=$return->where('address', 'like', '%'.$address.'%');
        }
        if($export){
            $return=$return->get();
        }else{
            $return=$return->paginate(5);
        } 
        
        return $return;    
    }
}