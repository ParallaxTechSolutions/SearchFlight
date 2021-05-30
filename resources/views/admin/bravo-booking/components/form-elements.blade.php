<div class="form-group row align-items-center" :class="{'has-danger': errors.has('code'), 'has-success': fields.code && fields.code.valid }">
    <label for="code" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.code') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.code" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('code'), 'form-control-success': fields.code && fields.code.valid}" id="code" name="code" placeholder="{{ trans('admin.bravo-booking.columns.code') }}">
        <div v-if="errors.has('code')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('code') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('commission_type'), 'has-success': fields.commission_type && fields.commission_type.valid }">
    <label for="commission_type" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.commission_type') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.commission_type" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('commission_type'), 'form-control-success': fields.commission_type && fields.commission_type.valid}" id="commission_type" name="commission_type" placeholder="{{ trans('admin.bravo-booking.columns.commission_type') }}">
        <div v-if="errors.has('commission_type')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('commission_type') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('create_user'), 'has-success': fields.create_user && fields.create_user.valid }">
    <label for="create_user" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.create_user') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.create_user" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('create_user'), 'form-control-success': fields.create_user && fields.create_user.valid}" id="create_user" name="create_user" placeholder="{{ trans('admin.bravo-booking.columns.create_user') }}">
        <div v-if="errors.has('create_user')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('create_user') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('customer_notes'), 'has-success': fields.customer_notes && fields.customer_notes.valid }">
    <label for="customer_notes" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.customer_notes') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.customer_notes" v-validate="''" id="customer_notes" name="customer_notes"></textarea>
        </div>
        <div v-if="errors.has('customer_notes')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('customer_notes') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('country'), 'has-success': fields.country && fields.country.valid }">
    <label for="country" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.country') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.country" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('country'), 'form-control-success': fields.country && fields.country.valid}" id="country" name="country" placeholder="{{ trans('admin.bravo-booking.columns.country') }}">
        <div v-if="errors.has('country')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('country') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('zip_code'), 'has-success': fields.zip_code && fields.zip_code.valid }">
    <label for="zip_code" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.zip_code') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.zip_code" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('zip_code'), 'form-control-success': fields.zip_code && fields.zip_code.valid}" id="zip_code" name="zip_code" placeholder="{{ trans('admin.bravo-booking.columns.zip_code') }}">
        <div v-if="errors.has('zip_code')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('zip_code') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('state'), 'has-success': fields.state && fields.state.valid }">
    <label for="state" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.state') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.state" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('state'), 'form-control-success': fields.state && fields.state.valid}" id="state" name="state" placeholder="{{ trans('admin.bravo-booking.columns.state') }}">
        <div v-if="errors.has('state')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('state') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('city'), 'has-success': fields.city && fields.city.valid }">
    <label for="city" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.city') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.city" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('city'), 'form-control-success': fields.city && fields.city.valid}" id="city" name="city" placeholder="{{ trans('admin.bravo-booking.columns.city') }}">
        <div v-if="errors.has('city')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('city') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('address2'), 'has-success': fields.address2 && fields.address2.valid }">
    <label for="address2" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.address2') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.address2" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('address2'), 'form-control-success': fields.address2 && fields.address2.valid}" id="address2" name="address2" placeholder="{{ trans('admin.bravo-booking.columns.address2') }}">
        <div v-if="errors.has('address2')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('address2') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('address'), 'has-success': fields.address && fields.address.valid }">
    <label for="address" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.address') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.address" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('address'), 'form-control-success': fields.address && fields.address.valid}" id="address" name="address" placeholder="{{ trans('admin.bravo-booking.columns.address') }}">
        <div v-if="errors.has('address')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('address') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('phone'), 'has-success': fields.phone && fields.phone.valid }">
    <label for="phone" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.phone') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.phone" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('phone'), 'form-control-success': fields.phone && fields.phone.valid}" id="phone" name="phone" placeholder="{{ trans('admin.bravo-booking.columns.phone') }}">
        <div v-if="errors.has('phone')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('phone') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('last_name'), 'has-success': fields.last_name && fields.last_name.valid }">
    <label for="last_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.last_name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.last_name" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('last_name'), 'form-control-success': fields.last_name && fields.last_name.valid}" id="last_name" name="last_name" placeholder="{{ trans('admin.bravo-booking.columns.last_name') }}">
        <div v-if="errors.has('last_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('last_name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('first_name'), 'has-success': fields.first_name && fields.first_name.valid }">
    <label for="first_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.first_name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.first_name" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('first_name'), 'form-control-success': fields.first_name && fields.first_name.valid}" id="first_name" name="first_name" placeholder="{{ trans('admin.bravo-booking.columns.first_name') }}">
        <div v-if="errors.has('first_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('first_name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('email'), 'has-success': fields.email && fields.email.valid }">
    <label for="email" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.email') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.email" v-validate="'email'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('email'), 'form-control-success': fields.email && fields.email.valid}" id="email" name="email" placeholder="{{ trans('admin.bravo-booking.columns.email') }}">
        <div v-if="errors.has('email')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('email') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('commission'), 'has-success': fields.commission && fields.commission.valid }">
    <label for="commission" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.commission') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.commission" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('commission'), 'form-control-success': fields.commission && fields.commission.valid}" id="commission" name="commission" placeholder="{{ trans('admin.bravo-booking.columns.commission') }}">
        <div v-if="errors.has('commission')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('commission') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('vendor_id'), 'has-success': fields.vendor_id && fields.vendor_id.valid }">
    <label for="vendor_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.vendor_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.vendor_id" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('vendor_id'), 'form-control-success': fields.vendor_id && fields.vendor_id.valid}" id="vendor_id" name="vendor_id" placeholder="{{ trans('admin.bravo-booking.columns.vendor_id') }}">
        <div v-if="errors.has('vendor_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('vendor_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('deposit_type'), 'has-success': fields.deposit_type && fields.deposit_type.valid }">
    <label for="deposit_type" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.deposit_type') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.deposit_type" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('deposit_type'), 'form-control-success': fields.deposit_type && fields.deposit_type.valid}" id="deposit_type" name="deposit_type" placeholder="{{ trans('admin.bravo-booking.columns.deposit_type') }}">
        <div v-if="errors.has('deposit_type')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('deposit_type') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('deposit'), 'has-success': fields.deposit && fields.deposit.valid }">
    <label for="deposit" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.deposit') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.deposit" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('deposit'), 'form-control-success': fields.deposit && fields.deposit.valid}" id="deposit" name="deposit" placeholder="{{ trans('admin.bravo-booking.columns.deposit') }}">
        <div v-if="errors.has('deposit')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('deposit') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('status'), 'has-success': fields.status && fields.status.valid }">
    <label for="status" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.status') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.status" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('status'), 'form-control-success': fields.status && fields.status.valid}" id="status" name="status" placeholder="{{ trans('admin.bravo-booking.columns.status') }}">
        <div v-if="errors.has('status')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('status') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('currency'), 'has-success': fields.currency && fields.currency.valid }">
    <label for="currency" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.currency') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.currency" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('currency'), 'form-control-success': fields.currency && fields.currency.valid}" id="currency" name="currency" placeholder="{{ trans('admin.bravo-booking.columns.currency') }}">
        <div v-if="errors.has('currency')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('currency') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('total_guests'), 'has-success': fields.total_guests && fields.total_guests.valid }">
    <label for="total_guests" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.total_guests') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.total_guests" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('total_guests'), 'form-control-success': fields.total_guests && fields.total_guests.valid}" id="total_guests" name="total_guests" placeholder="{{ trans('admin.bravo-booking.columns.total_guests') }}">
        <div v-if="errors.has('total_guests')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('total_guests') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('total'), 'has-success': fields.total && fields.total.valid }">
    <label for="total" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.total') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.total" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('total'), 'form-control-success': fields.total && fields.total.valid}" id="total" name="total" placeholder="{{ trans('admin.bravo-booking.columns.total') }}">
        <div v-if="errors.has('total')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('total') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('end_date'), 'has-success': fields.end_date && fields.end_date.valid }">
    <label for="end_date" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.end_date') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.end_date" :config="datetimePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('end_date'), 'form-control-success': fields.end_date && fields.end_date.valid}" id="end_date" name="end_date" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_date_and_time') }}"></datetime>
        </div>
        <div v-if="errors.has('end_date')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('end_date') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('start_date'), 'has-success': fields.start_date && fields.start_date.valid }">
    <label for="start_date" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.start_date') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.start_date" :config="datetimePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('start_date'), 'form-control-success': fields.start_date && fields.start_date.valid}" id="start_date" name="start_date" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_date_and_time') }}"></datetime>
        </div>
        <div v-if="errors.has('start_date')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('start_date') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('object_model'), 'has-success': fields.object_model && fields.object_model.valid }">
    <label for="object_model" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.object_model') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.object_model" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('object_model'), 'form-control-success': fields.object_model && fields.object_model.valid}" id="object_model" name="object_model" placeholder="{{ trans('admin.bravo-booking.columns.object_model') }}">
        <div v-if="errors.has('object_model')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('object_model') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('object_id'), 'has-success': fields.object_id && fields.object_id.valid }">
    <label for="object_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.object_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.object_id" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('object_id'), 'form-control-success': fields.object_id && fields.object_id.valid}" id="object_id" name="object_id" placeholder="{{ trans('admin.bravo-booking.columns.object_id') }}">
        <div v-if="errors.has('object_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('object_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('gateway'), 'has-success': fields.gateway && fields.gateway.valid }">
    <label for="gateway" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.gateway') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.gateway" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('gateway'), 'form-control-success': fields.gateway && fields.gateway.valid}" id="gateway" name="gateway" placeholder="{{ trans('admin.bravo-booking.columns.gateway') }}">
        <div v-if="errors.has('gateway')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('gateway') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('payment_id'), 'has-success': fields.payment_id && fields.payment_id.valid }">
    <label for="payment_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.payment_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.payment_id" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('payment_id'), 'form-control-success': fields.payment_id && fields.payment_id.valid}" id="payment_id" name="payment_id" placeholder="{{ trans('admin.bravo-booking.columns.payment_id') }}">
        <div v-if="errors.has('payment_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('payment_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('customer_id'), 'has-success': fields.customer_id && fields.customer_id.valid }">
    <label for="customer_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.customer_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.customer_id" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('customer_id'), 'form-control-success': fields.customer_id && fields.customer_id.valid}" id="customer_id" name="customer_id" placeholder="{{ trans('admin.bravo-booking.columns.customer_id') }}">
        <div v-if="errors.has('customer_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('customer_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('update_user'), 'has-success': fields.update_user && fields.update_user.valid }">
    <label for="update_user" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking.columns.update_user') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.update_user" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('update_user'), 'form-control-success': fields.update_user && fields.update_user.valid}" id="update_user" name="update_user" placeholder="{{ trans('admin.bravo-booking.columns.update_user') }}">
        <div v-if="errors.has('update_user')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('update_user') }}</div>
    </div>
</div>


