<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminSetting extends Model
{
    use HasFactory;
    protected $fillable = ['system_name', 'active', 'photo', 'added_by', 'updated_by', 'alert', 'address', 'phone'];
}
