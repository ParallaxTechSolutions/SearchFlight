<?php

namespace App\Http\Requests\Admin\BravoBookingPayment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateBravoBookingPayment extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.bravo-booking-payment.edit', $this->bravoBookingPayment);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'booking_id' => ['nullable', 'integer'],
            'payment_gateway' => ['nullable', 'string'],
            'amount' => ['nullable', 'numeric'],
            'currency' => ['nullable', 'string'],
            'converted_amount' => ['nullable', 'numeric'],
            'converted_currency' => ['nullable', 'string'],
            'exchange_rate' => ['nullable', 'numeric'],
            'status' => ['nullable', 'string'],
            'logs' => ['nullable', 'string'],
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
