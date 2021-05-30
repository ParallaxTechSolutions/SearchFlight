@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.bravo-booking-payment.actions.edit', ['name' => $bravoBookingPayment->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <bravo-booking-payment-form
                :action="'{{ $bravoBookingPayment->resource_url }}'"
                :data="{{ $bravoBookingPayment->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.bravo-booking-payment.actions.edit', ['name' => $bravoBookingPayment->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.bravo-booking-payment.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </bravo-booking-payment-form>

        </div>
    
</div>

@endsection