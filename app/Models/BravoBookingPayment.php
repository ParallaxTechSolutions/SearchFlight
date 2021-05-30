<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BravoBookingPayment extends Model
{
    protected $fillable = [
        'booking_id',
        'payment_gateway',
        'amount',
        'currency',
        'converted_amount',
        'converted_currency',
        'exchange_rate',
        'status',
        'logs',
        'create_user',
        'update_user',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/bravo-booking-payments/'.$this->getKey());
    }
}
