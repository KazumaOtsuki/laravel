<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Error extends Model
{
    //一覧情報を取得
    public static function redirect500()
    {
        abort(500);
        //カスタムエラーページ作成中
    }
}
