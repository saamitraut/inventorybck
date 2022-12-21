<?php
namespace App\Exports;
use App\Models\Requiredfor_master;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RequiredforExport implements FromCollection,WithHeadings
{
  public function collection()
  {
    return Requiredfor_master::List();
  }
  public function headings() : array
    {
        return ['Name','Status'];
    }

    
}