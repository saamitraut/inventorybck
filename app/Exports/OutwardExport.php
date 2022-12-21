<?php
namespace App\Exports;
use App\Models\Outward_master;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OutwardExport implements FromCollection,WithHeadings
{
  public function collection()
  {
    return Outward_master::List(true);
  }
  public function headings() : array
    {
        return ['material','material_description','issued','issuedon','branch','requiredfor','purpose'];
    }

    
}