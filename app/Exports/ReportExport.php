<?php
namespace App\Exports;
use App\Models\Report;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReportExport implements FromCollection,WithHeadings
{
  public function collection()
  {
    return Report::List();
  }
  public function headings() : array
    {
        return ['Material','Credit','Debit','Available'];
    }

    
}