<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
//    public $timestamps = false;
    protected $dateFormat = 'U';
    protected $table = 'news'; //表名：好房拓和E行销寿险业务员成交榜单
    protected $guarded = [
        'iAutoID'
    ]; //允许可update或者insert的字段值

    protected $fillable = [
        'iAutoID',
        'sNews',
        'iPublishTime',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $columnable = [
        'iAutoID',
        'sNews',
        'iPublishTime',
        'created_at',
        'updated_at',
        'deleted_at',
    ]; //允许查询的字段
    protected $orderable = ['*']; //允许排序的字段
    protected $rangeable = ['*']; //允许范围搜索的字段

    protected $primaryKey = 'iAutoID'; //主键
}
