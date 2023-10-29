import AppForm from '../app-components/Form/AppForm';

Vue.component('getting-blend-form', {
    props: ['stockOptions', 'blendDetailOptions', 'adminUserId'],
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                code:  '' ,
                admin_user_id:  '' ,
                stock_id:  '' ,
                blend_details_id:  '' ,
                qtd:  '' ,
                finished:  false ,
                
            },

            stocks: [],
            stockSelected: null,

            blendDetails: [],
            blendDetailSelected: null,
        }
    },
    
    mounted() {
        this.stocks = this.stockOptions;
        const stockIdSelected = this.form.stock_id;
        const stockSelected = this.stocks.find(stock => stock.id === stockIdSelected);
        this.stockSelected = stockSelected ? [stockSelected] : [];

        this.blendDetails = this.blendDetailOptions;
        const blendDetailIdSelected = this.form.blend_details_id;
        const blendDetailSelected = this.blendDetails.find(blendDetail => blendDetail.id === blendDetailIdSelected);
        this.blendDetailSelected = blendDetailSelected ? [blendDetailSelected] : [];

        this.form.admin_user_id = this.adminUserId;
    },

    watch: {
        stockSelected: function(newVal) {
            this.form.stock_id = newVal ? newVal.id : null;
        },

        blendDetailSelected: function(newVal) {
            this.form.blend_details_id = newVal ? newVal.id : null;
        }
    }
});