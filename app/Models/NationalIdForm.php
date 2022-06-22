<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NationalIdForm extends Model
{
    use HasFactory;

    protected $table = 'national_id_forms';



     protected $fillable = [
        'name',
        'email',
        
    ];
}
