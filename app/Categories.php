<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $primaryKey = 'category_id';
    protected $table = 'categories';
    protected $fillable = ['name', 'description'];
    public $timestamps = false;
}