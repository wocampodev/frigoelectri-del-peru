<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public static function data_company(){
        $company = Company::first();

        return $company;
    }
}
