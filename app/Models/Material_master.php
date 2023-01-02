<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Eloquent;

class Material_master extends Eloquent  {

    protected $table = 'material_master';

    static function list()
    {
        $materials=self::all()->toArray();
        $res=array();
        foreach ($materials as $material) {
          $res[$material['id']]=$material;
        }
        return $res;
    }
    static function list2($export=false,$name=false)
    {
        // return self::select('Name')->get();
        $return=self::leftjoin('unit_master', 'material_master.unit', '=', 'unit_master.id');
        if($name){
            $return=$return->where('material_master.name', '=', $name);
        }
        if($export){
            $return=$return->select('material_master.name AS material','unit_master.name AS unit')->get();
        }else{
            $return=$return->select('material_master.name AS material','unit_master.name AS unit','material_master.id','material_master.status','material_master.GST')->paginate(5);
        }
        return $return;  
    
    }

}