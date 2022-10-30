<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number', 'user_id', 'status', 'grand_total', 'item_count', 'payment_status', 'payment_method',
        'prenom', 'nom', 'address', 'city', 'country','phone'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
