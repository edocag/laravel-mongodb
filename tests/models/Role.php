<?php

use edocag\Mongodb\Eloquent\Model as Eloquent;

class Role extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'roles';
    protected static $unguarded = true;

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function mysqlUser()
    {
        return $this->belongsTo('MysqlUser');
    }
}
