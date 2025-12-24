<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'tbl_teacher';
    protected $primaryKey = 'tid';
    // Add full_name and tel here so Laravel can save them
    protected $fillable = [
        'full_name',
        'tel'
    ];
    public $timestamps = false;

}
