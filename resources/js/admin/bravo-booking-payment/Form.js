import AppForm from '../app-components/Form/AppForm';

Vue.component('bravo-booking-payment-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                booking_id:  '' ,
                payment_gateway:  '' ,
                amount:  '' ,
                currency:  '' ,
                converted_amount:  '' ,
                converted_currency:  '' ,
                exchange_rate:  '' ,
                status:  '' ,
                logs:  '' ,
                create_user:  '' ,
                update_user:  '' ,
                
            }
        }
    }

});