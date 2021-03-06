<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    public $directory="/images/";
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[

        'title',
        'content',
        'path'



    ];

    protected $dates = ['deleted_at'];

    public function user(){

        return $this->belongsTo('App\Models\User');
    }

    public function getPathAttribute($value){

        return $this->directory . $value;

    }
}
