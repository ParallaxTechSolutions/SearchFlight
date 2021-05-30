<?php

namespace App\Http\Requests\Admin\BravoBooking;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class IndexBravoBooking extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.bravo-booking.index');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'orderBy' => 'in:id,code,vendor_id,customer_id,payment_id,gateway,object_id,object_model,start_date,end_date,total,total_guests,currency,status,deposit,deposit_type,commission,commission_type,email,first_name,last_name,phone,address,address2,city,state,zip_code,country,create_user,update_user|nullable',
            'orderDirection' => 'in:asc,desc|nullable',
            'search' => 'string|nullable',
            'page' => 'integer|nullable',
            'per_page' => 'integer|nullable',

        ];
    }
}
