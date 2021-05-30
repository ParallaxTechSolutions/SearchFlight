<div class="form-group row align-items-center" :class="{'has-danger': errors.has('booking_id'), 'has-success': fields.booking_id && fields.booking_id.valid }">
    <label for="booking_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking-payment.columns.booking_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.booking_id" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('booking_id'), 'form-control-success': fields.booking_id && fields.booking_id.valid}" id="booking_id" name="booking_id" placeholder="{{ trans('admin.bravo-booking-payment.columns.booking_id') }}">
        <div v-if="errors.has('booking_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('booking_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('payment_gateway'), 'has-success': fields.payment_gateway && fields.payment_gateway.valid }">
    <label for="payment_gateway" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking-payment.columns.payment_gateway') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.payment_gateway" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('payment_gateway'), 'form-control-success': fields.payment_gateway && fields.payment_gateway.valid}" id="payment_gateway" name="payment_gateway" placeholder="{{ trans('admin.bravo-booking-payment.columns.payment_gateway') }}">
        <div v-if="errors.has('payment_gateway')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('payment_gateway') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('amount'), 'has-success': fields.amount && fields.amount.valid }">
    <label for="amount" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking-payment.columns.amount') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.amount" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('amount'), 'form-control-success': fields.amount && fields.amount.valid}" id="amount" name="amount" placeholder="{{ trans('admin.bravo-booking-payment.columns.amount') }}">
        <div v-if="errors.has('amount')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('amount') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('currency'), 'has-success': fields.currency && fields.currency.valid }">
    <label for="currency" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking-payment.columns.currency') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.currency" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('currency'), 'form-control-success': fields.currency && fields.currency.valid}" id="currency" name="currency" placeholder="{{ trans('admin.bravo-booking-payment.columns.currency') }}">
        <div v-if="errors.has('currency')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('currency') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('converted_amount'), 'has-success': fields.converted_amount && fields.converted_amount.valid }">
    <label for="converted_amount" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking-payment.columns.converted_amount') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.converted_amount" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('converted_amount'), 'form-control-success': fields.converted_amount && fields.converted_amount.valid}" id="converted_amount" name="converted_amount" placeholder="{{ trans('admin.bravo-booking-payment.columns.converted_amount') }}">
        <div v-if="errors.has('converted_amount')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('converted_amount') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('converted_currency'), 'has-success': fields.converted_currency && fields.converted_currency.valid }">
    <label for="converted_currency" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking-payment.columns.converted_currency') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.converted_currency" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('converted_currency'), 'form-control-success': fields.converted_currency && fields.converted_currency.valid}" id="converted_currency" name="converted_currency" placeholder="{{ trans('admin.bravo-booking-payment.columns.converted_currency') }}">
        <div v-if="errors.has('converted_currency')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('converted_currency') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('exchange_rate'), 'has-success': fields.exchange_rate && fields.exchange_rate.valid }">
    <label for="exchange_rate" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking-payment.columns.exchange_rate') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.exchange_rate" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('exchange_rate'), 'form-control-success': fields.exchange_rate && fields.exchange_rate.valid}" id="exchange_rate" name="exchange_rate" placeholder="{{ trans('admin.bravo-booking-payment.columns.exchange_rate') }}">
        <div v-if="errors.has('exchange_rate')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('exchange_rate') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('status'), 'has-success': fields.status && fields.status.valid }">
    <label for="status" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking-payment.columns.status') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.status" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('status'), 'form-control-success': fields.status && fields.status.valid}" id="status" name="status" placeholder="{{ trans('admin.bravo-booking-payment.columns.status') }}">
        <div v-if="errors.has('status')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('status') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('logs'), 'has-success': fields.logs && fields.logs.valid }">
    <label for="logs" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking-payment.columns.logs') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.logs" v-validate="''" id="logs" name="logs"></textarea>
        </div>
        <div v-if="errors.has('logs')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('logs') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('create_user'), 'has-success': fields.create_user && fields.create_user.valid }">
    <label for="create_user" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking-payment.columns.create_user') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.create_user" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('create_user'), 'form-control-success': fields.create_user && fields.create_user.valid}" id="create_user" name="create_user" placeholder="{{ trans('admin.bravo-booking-payment.columns.create_user') }}">
        <div v-if="errors.has('create_user')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('create_user') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('update_user'), 'has-success': fields.update_user && fields.update_user.valid }">
    <label for="update_user" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.bravo-booking-payment.columns.update_user') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.update_user" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('update_user'), 'form-control-success': fields.update_user && fields.update_user.valid}" id="update_user" name="update_user" placeholder="{{ trans('admin.bravo-booking-payment.columns.update_user') }}">
        <div v-if="errors.has('update_user')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('update_user') }}</div>
    </div>
</div>


