<?php

namespace App\Exports;

use PhpOffice\PhpSpreadsheet\Shared\Date;

class ComeInDocumentsExport extends BaseDocumentsExport
{
    public function headings(): array
    {
        return [
            'Date of receiving',
            'Place of issue',
            'Symbol',
            'Document type',
            'Summary',
            'Recipient',
        ];
    }

    public function map($document): array
    {
        return [
            Date::dateTimeToExcel($document->effective_at),
            $document->publisher->name,
            $document->symbol,
            $document->type->name,
            $document->abstract,
            implode(', ', ($document->receivers->map(function($receiver){
                return $receiver->name;
            }))->toArray()),
        ];
    }

}
