<?php

namespace App\Classes\Import;

// added request namespace
use Illuminate\Http\Request;


class TransactionImportUpload extends \Maatwebsite\Excel\Files\ExcelFile
{

    protected $delimiter  = ',';
    protected $enclosure  = '"';
    protected $lineEnding = '\n';


    public function getFile()
    {

        $request = new Request;
        $file = $request->file('myfile');
        $filename = $file->getClientOriginalName();

        // error:
        //Call to a member function getClientOriginalName() on null

        return $filename;

    }

    public function getFilters()
    {
        return [
            'chunk'
        ];
    }

}


