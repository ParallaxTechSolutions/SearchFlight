@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.bravo-booking.actions.create'))

@section('body')

    <div class="container-xl">

                <div class="card">
        
        <bravo-booking-form
            :action="'{{ url('admin/bravo-bookings') }}'"
            v-cloak
            inline-template>

            <form class="form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="action" novalidate>
                
                <div class="card-header">
                    <i class="fa fa-plus"></i> {{ trans('admin.bravo-booking.actions.create') }}
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