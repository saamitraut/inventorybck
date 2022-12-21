<?php
namespace App\Exports;
use App\Models\Purpose_master;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PurposeExport implements FromCollection,WithHeadings
{
  public function collection()
  {
    return Purpose_master::list(true);
  }
  public function headings() : array
    {
        return ['Purpose'];
    }

    
}