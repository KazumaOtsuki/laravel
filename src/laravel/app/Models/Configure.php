<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Configure extends Model
{
    //一覧情報を取得
    public static function getEmployeeColumm()
    {
        return Config::get('define.employeeColumn');
    }
}
