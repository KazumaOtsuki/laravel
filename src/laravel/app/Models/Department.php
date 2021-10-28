<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Models\Error;

class Department extends Model
{
    protected $departments;
    protected $error;

    public function __construct(){
        $this->departments = DB::table('departments');

        $this->error = new Error();
    }

    //一覧情報を取得
    public function getListResource()
    {
        try{
            $departments = $this->departments
                ->get();
            return $departments;
        } catch (\Exception $e) {
            echo $e->getMessage();
            $this->error->redirect500();
        }
    }
}
