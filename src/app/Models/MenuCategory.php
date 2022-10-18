<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuCategory extends Model
{
    use HasFactory;
    use softDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name',
        'turn',
        'create_user',
        'update_user',
    ];

    public function menuSubcategories()
    {
        return $this->hasMany(MenuSubcategory::class);
    }
}
