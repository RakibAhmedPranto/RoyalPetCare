<?php

namespace App\Exports;

use App\Appointment;
use Maatwebsite\Excel\Concerns\FromCollection;
 use Maatwebsite\Excel\Concerns\WithHeadings;

class AppointmentExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Appointment::select(['appointment_date','pet_type','phone','email','message','status'])->get();
    }

    public function headings(): array
       {
          return [
            'appointment_date',
            'pet_type',
            'phone',
            'email',
            'message',
            'status',
           ];
        }
}
