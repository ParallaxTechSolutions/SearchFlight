import AppForm from '../app-components/Form/AppForm';

Vue.component('bravo-booking-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                code:  '' ,
                vendor_id:  '' ,
                customer_id:  '' ,
                payment_id:  '' ,
                gateway:  '' ,
                object_id:  '' ,
                object_model:  '' ,
                start_date:  '' ,
                end_date:  '' ,
                total:  '' ,
                total_guests:  '' ,
                currency:  '' ,
                status:  '' ,
                deposit:  '' ,
                deposit_type:  '' ,
                commission:  '' ,
                commission_type:  '' ,
                email:  '' ,
                first_name:  '' ,
                last_name:  '' ,
                phone:  '' ,
                address:  '' ,
                address2:  '' ,
                city:  '' ,
                state:  '' ,
                zip_code:  '' ,
                country:  '' ,
                customer_notes:  '' ,
                create_user:  '' ,
                update_user:  '' ,
                
            }
        }
    }

});