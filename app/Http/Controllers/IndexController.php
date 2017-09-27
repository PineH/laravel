<?php
/**
 * Created by PhpStorm.
 * User: H
 * Date: 2017/9/18
 * Time: 17:03
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller{
    public function index(){
        /**
         * 查询用户
         */
        $list = DB::select('select * from user');
        return view('Index.index',['list' => $list]);
    }


}