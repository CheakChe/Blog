<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    public static function articles()
    {
    	return static::all();
    }
    public static function article($id)
    {
    	static::where('id', $id)->increment('views');
    	return static::where('id', $id)->first();
    }
}
