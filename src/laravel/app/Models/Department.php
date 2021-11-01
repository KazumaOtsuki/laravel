<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Error;

class Department extends Model
{
    protected $error;

    public function __construct(){
        $this->error = new Error();
    }

    //一覧情報を取得
    public function getListResource()
    {
        try{
            $departments = Department::get();
            return $departments;
        } catch (\Exception $e) {
            $this->error->redirect500($e);
        }
    }
}
