<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Eloquent;

class Report extends Eloquent  {

    protected $table = 'stockreport';

    static function list()
    {
        
        return Report::join('material_master', 'stockreport.material_id', '=', 'material_master.id')
            ->select('material_master.name','stockreport.credit','stockreport.debit','stockreport.availableStock',)
            ->get();

        
    }
}