<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cheque extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "notes",
        'reprsentative_id',
        'cheque',
    ];

    public function reprsentative()
    {
        return $this->belongsTo('App\Models\Reprsentative', 'reprsentative_id');
    }

}
