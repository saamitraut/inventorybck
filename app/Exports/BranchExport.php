<?php
namespace App\Exports;
use App\Models\Branch_master;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BranchExport implements FromCollection,WithHeadings
{
  public function collection()
  {
    return Branch_master::List();
  }
  public function headings() : array
    {
        return ['Name','Status'];
    }

    
}