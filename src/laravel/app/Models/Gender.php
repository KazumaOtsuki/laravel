<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Models\Error;

class Gender extends Model
{
    protected $genders;
    protected $error;

    public function __construct(){
        $this->genders = DB::table('genders');

        $this->error = new Error();
    }

    //一覧情報を取得
    public function getListResource()
    {
        try{
            $genders = $this->genders
                ->get();
            return $genders;
        } catch (\Exception $e) {
            $this->error->redirect500($e);
        }
    }
}
