<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Department extends Model
{
    //一覧情報を取得
    public function getListResource()
    {
        $departments = DB::table('departments')
            ->get();
        return $departments;
    }
}
