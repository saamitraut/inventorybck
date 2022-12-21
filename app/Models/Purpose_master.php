<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
use Eloquent;

class Purpose_master extends Eloquent  {

    protected $table = 'purpose_master';
    static function list($export=false,$name=false)
    {
        if($export){
            $return=self::select('name');
        }else{
            $return=self::select('*');
        }        
        
        if($name){
            $return=$return->where('name', '=', $name);
        }
        if($export){
            $return=$return->get();
        }else{
            $return=$return->paginate(5);
        } 
        
        return $return;    
    }
}