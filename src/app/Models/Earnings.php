<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Earnings extends Model
{
    use HasFactory;
    use softDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'create_user',
        'update_user',
    ];
}
