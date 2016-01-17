<?php

namespace App\Classes\Import;


class ImportHelper
{

    public function convertDate($date){

        return substr($date,0,4).'-'.substr($date,4,2).'-'.substr($date,6);

    }

}


