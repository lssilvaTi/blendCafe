import AppForm from '../app-components/Form/AppForm';

Vue.component('stock-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                location:  '' ,
                is_active:  false ,
                
            }
        }
    }

});