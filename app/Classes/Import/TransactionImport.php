<?php

namespace App\Classes\Import;

class TransactionImport extends \Maatwebsite\Excel\Files\ExcelFile
{

    protected $delimiter  = ',';
    protected $enclosure  = '"';
    protected $lineEnding = '\n';

    public function getFile()
    {
        return  'storage/uploads/MOCK_DATA.csv';
    }

    public function getFilters()
    {
        return [
            'chunk'
        ];
    }

}


