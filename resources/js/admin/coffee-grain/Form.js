import AppForm from '../app-components/Form/AppForm';

Vue.component('coffee-grain-form', {
    props: ['stockOptions', 'drinkOptions', 'smellOptions', 'aspectOptions'],
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                lote:  '' ,
                nf:  '' ,
                slip:  '' ,
                qtd:  '' ,
                prod:  '' ,
                safra:  '' ,
                bebida:  '' ,
                cheiro:  '' ,
                aspecto:  '' ,
                mofo:  '' ,
                def:  '' ,
                umid:  '' ,
                imp:  '' ,
                broca:  '' ,
                num18:  '' ,
                num17:  '' ,
                num16:  '' ,
                num15:  '' ,
                num14:  '' ,
                num13:  '' ,
                num12:  '' ,
                num10_11:  '' ,
                numfundo_b:  '' ,
                stock_id:  '' ,
            },

            stocks: [],
            stockSelected: null,

            drinks: [],
            drinkSelected: null,

            smells: [],
            smellSelected: null,

            aspects: [],
            aspectSelected: null,
        }
    },

    mounted() {
        this.stocks = this.stockOptions;
        const stockIdSelected = this.form.stock_id;
        const stockSelected = this.stocks.find(stock => stock.id === stockIdSelected);
        this.stockSelected = stockSelected ? [stockSelected] : [];

        this.drinks = this.drinkOptions;
        const drinkNameSelected = this.form.bebida;
        const drinkSelected = this.drinks.find(drink => drink.name === drinkNameSelected);
        this.drinkSelected = drinkSelected ? [drinkSelected] : [];

        this.smells = this.smellOptions;
        const smellNameSelected = this.form.cheiro;
        const smellSelected = this.smells.find(smell => smell.name === smellNameSelected);
        this.smellSelected = smellSelected ? [smellSelected] : [];

        this.aspects = this.aspectOptions;
        const aspectNameSelected = this.form.aspecto;
        const aspectSelected = this.aspects.find(aspect => aspect.name === aspectNameSelected);
        this.aspectSelected = aspectSelected ? [aspectSelected] : [];
    },

    watch: {
        stockSelected: function(newVal) {
            this.form.stock_id = newVal ? newVal.id : null;
        },

        drinkSelected: function(newVal) {
            this.form.bebida = newVal ? newVal.name : null;
        },

        smellSelected: function(newVal) {
            this.form.cheiro = newVal ? newVal.name : null;
        },

        aspectSelected: function(newVal) {
            this.form.aspecto = newVal ? newVal.name : null;
        },
    }

});