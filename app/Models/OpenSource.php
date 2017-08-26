<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class OpenSource extends Model
{

    use SoftDeletes;
    /**
     * 表名
     * @var string
     */
    protected $table = 'open_source';
    /**
     * 定义软删除
     * @var array
     */
    protected $dates = ['deleted_at'];
    /**
     * 可插入的字段
     * @var array
     */
    protected $fillable = ['name','desc','thumb','url','label','author'];
}
