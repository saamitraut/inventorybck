<?php
namespace App\Exports;
use App\Models\Report;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReportExport implements FromCollection,WithHeadings
{
  public function collection()
  {
    return Report::get();
  }
  public function headings() : array
    {
        return ['Material','Credit','Debit','Available'];
    }

    
}