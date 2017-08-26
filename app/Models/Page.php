<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use SoftDeletes;
    //
    /**
     * 应该被调整为日期的属性
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $table = 'pages';
    protected $fillable = ['name','type','url','grey_url','module_url','creator','ideas','shuticon','label','version','mark'];
}
