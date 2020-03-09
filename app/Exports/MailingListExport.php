<?php

namespace App\Exports;

use App\MailingList;
use Maatwebsite\Excel\Concerns\FromCollection;
 use Maatwebsite\Excel\Concerns\WithHeadings;

class MailingListExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MailingList::select(['email'])->get();
    }

    public function headings(): array
       {
          return [
            'email',
           ];
        }
}
