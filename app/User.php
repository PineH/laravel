<?php
/**
 * Created by PhpStorm.
 * User: H
 * Date: 2017/9/18
 * Time: 22:16
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model{
    /**
     * 与模型关联的数据表
     * @var string
     */
    protected $table = 'user';

}