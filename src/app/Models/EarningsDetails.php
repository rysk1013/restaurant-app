<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EarningsDetails extends Model
{
    use HasFactory;
    use softDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'menu_name',
        'menu_price',
        'order_num',
        'create_user',
        'update_user',
    ];

    public function earnings()
    {
        return $this->belongsTo(Earnings::class);
    }

    public function menus()
    {
        return $this->hasMany(Menus::class);
    }
}
