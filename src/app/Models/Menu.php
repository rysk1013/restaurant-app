<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory;
    use softDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name',
        'turn',
        'price',
        'description',
        'create_user',
        'update_user',
    ];

    public function menuSubcategory()
    {
        return $this->belongsTo(MenuSubcategory::class);
    }

    public function earningsDetails()
    {
        return $this->hasMany(EarningsDetails::class);
    }
}
