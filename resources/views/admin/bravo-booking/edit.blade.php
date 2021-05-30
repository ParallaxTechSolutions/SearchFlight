@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.bravo-booking.actions.edit', ['name' => $bravoBooking->email]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <bravo-booking-form
                :action="'{{ $bravoBooking->resource_url }}'"
                :data="{{ $bravoBooking->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.bravo-booking.actions.edit', ['name' => $bravoBooking->email]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.bravo-booking.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </bravo-booking-form>

        </div>
    
</div>

@endsection