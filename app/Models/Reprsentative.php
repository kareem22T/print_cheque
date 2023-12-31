<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reprsentative extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
       'name',
       'phone',
       'email',
       'additional_notes',
    ];

    public function cheques()
    {
        return $this->hasMany('App\Models\Cheque', 'reprsentative_id');
    }

}
