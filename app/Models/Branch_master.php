<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Eloquent;

class Branch_master extends Eloquent  {

    protected $table = 'branch_master';
    static function list()
    {
        return self::select(DB::raw('Name,CASE WHEN status = 0 THEN "PENDING" ELSE "ACTIVE" END as status'))->get();
    }
    static function list2()
    {
        $Branches = Branch_master::all()->toArray();        
        $res=array();
        foreach ($Branches as $Branch) {
          $res[$Branch['id']]=$Branch;
        }
        return $res;
    }
}