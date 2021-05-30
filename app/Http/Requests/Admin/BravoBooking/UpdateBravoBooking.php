<?php

namespace App\Http\Requests\Admin\BravoBooking;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateBravoBooking extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.bravo-booking.edit', $this->bravoBooking);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'code' => ['nullable', 'string'],
            'vendor_id' => ['nullable', 'integer'],
            'customer_id' => ['nullable', 'integer'],
            'payment_id' => ['nullable', 'integer'],
            'gateway' => ['nullable', 'string'],
            'object_id' => ['nullable', 'integer'],
            'object_model' => ['nullable', 'string'],
            'start_date' => ['nullable', 'date'],
            'end_date' => ['nullable', 'date'],
            'total' => ['nullable', 'numeric'],
            'total_guests' => ['nullable', 'integer'],
            'currency' => ['nullable', 'string'],
            'status' => ['nullable', 'string'],
            'deposit' => ['nullable', 'numeric'],
            'deposit_type' => ['nullable', 'string'],
            'commission' => ['nullable', 'numeric'],
            'commission_type' => ['nullable', 'string'],
            'email' => ['nullable', 'email', 'string'],
            'first_name' => ['nullable', 'string'],
            'last_name' => ['nullable', 'string'],
            'phone' => ['nullable', 'string'],
            'address' => ['nullable', 'string'],
            'address2' => ['nullable', 'string'],
            'city' => ['nullable', 'string'],
            'state' => ['nullable', 'string'],
            'zip_code' => ['nullable', 'string'],
            'country' => ['nullable', 'string'],
            'customer_notes' => ['nullable', 'string'],
            'create_user' => ['nullable', 'integer'],
            'update_user' => ['nullable', 'integer'],
            
        ];
    }

    /**
     * Modify input data
     *
     * @return array
     */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();


        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
