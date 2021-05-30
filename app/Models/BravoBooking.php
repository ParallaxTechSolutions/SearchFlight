<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\BravoBooking;

class BravoBooking extends Model
{
    
    use SoftDeletes;
    protected $fillable = [
        'code',
        'vendor_id',
        'customer_id',
        'payment_id',
        'gateway',
        'object_id',
        'object_model',
        'start_date',
        'end_date',
        'total',
        'total_guests',
        'currency',
        'status',
        'deposit',
        'deposit_type',
        'commission',
        'commission_type',
        'email',
        'first_name',
        'last_name',
        'phone',
        'address',
        'address2',
        'city',
        'state',
        'zip_code',
        'country',
        'customer_notes',
        'create_user',
        'update_user',
    
    ];
    
    
    protected $dates = [
        'start_date',
        'end_date',
        'deleted_at',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/bravo-bookings/'.$this->getKey());
    }
}
