<?php

namespace App;

use App\Contact;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public $timestamps = false;
	
	protected $fillable = [
        'name',
        'author',
        'date',
    ];
}
