<?php
namespace App\Exports;
use App\Models\Material_master;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MaterialExport implements FromCollection,WithHeadings
{
  public function collection()
  {
    return Material_master::List2(true);
  }
  public function headings() : array
    {
        return ['Material','Unit'];
    }

    
}