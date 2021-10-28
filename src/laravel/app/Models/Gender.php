<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Gender extends Model
{
    //一覧情報を取得
    public function getListResource()
    {
        $genders = DB::table('genders')
            ->get();
        return $genders;
    }
}
