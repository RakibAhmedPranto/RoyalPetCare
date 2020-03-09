<?php

namespace App\Exports;

use App\Feedback;
use Maatwebsite\Excel\Concerns\FromCollection;
 use Maatwebsite\Excel\Concerns\WithHeadings;

class FeedbackExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Feedback::select(['name','email','subject','message'])->get();
    }

    public function headings(): array
       {
          return [
            'name',
            'email',
            'subject',
            'message',
           ];
        }
}
