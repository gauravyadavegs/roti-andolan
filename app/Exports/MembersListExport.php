<?php

namespace App\Exports;

use Carbon\Carbon;
use DateTime;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class MembersListExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
    use Exportable;

    private $members_list;

    public function __construct($members_list)
    {
        $this->members_list = $members_list;
    }


    public function collection()
    {
        $members_list = collect($this->members_list);
        return $members_list->transform(function ($item, $key) {
            $item->created_at = Carbon::parse($item->created_at)->format('d-m-Y');
            return $item;
        });
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $cellRange = 'A1:F1';
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            },
        ];
    }
    public function headings(): array
    {
        return [
            'S No',
            'Name',
            'Email',
            'Phone No',
            'Created At',
            'Updated At'
        ];
    }
}
