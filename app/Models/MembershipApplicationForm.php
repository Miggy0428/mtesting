<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Form;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class MembershipApplicationForm extends Model
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'membership_application_forms';


     protected $fillable = [
        'name',
        'email',
       
    ];
    
}
