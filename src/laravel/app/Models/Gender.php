<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Error;

class Gender extends Model
{
    protected $error;

    public function __construct(){
        $this->error = new Error();
    }

    //一覧情報を取得
    public function getListResource()
    {
        try{
            $genders = Gender::get();
            return $genders;
        } catch (\Exception $e) {
            $this->error->redirect500($e);
        }
    }
}
