<?php
namespace App\Exports;
use App\Models\Inward_master;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class InwardExport implements FromCollection,WithHeadings
{
  public function collection()
  {
    return Inward_master::List(true);
  }
  public function headings() : array
    {
        return ['material','material_description','supplier','received','return','rate','amount','receivedon'];
    }

    
}