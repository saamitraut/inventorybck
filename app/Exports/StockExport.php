<?php
namespace App\Exports;
use App\Models\Stock;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StockExport implements FromCollection,WithHeadings
{
  public function collection()
  {
    return Stock::list(true);
  }
  public function headings() : array
    {
        return ['Material','Credit','Debit','Date'];
    }

    
}