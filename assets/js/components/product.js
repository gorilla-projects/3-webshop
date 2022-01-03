Vue.component('products', {
    props: {
        
    },

    data: function () {
        return {
            fruits: [],
        }
    },

    created() {
        this.getProducts();
    },

    methods: {
        addToCart(id) {
            this.$root.$emit('add-to-cart', id)
        },

        getProducts() {
            let self = this;

            axios({
                method: 'GET',
                url: '?page=home&action=getdata',
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                }
            }).then(function(response) {
                self.fruits = response.data.fruits;
            }).catch(function(error) {

            });
        },
    },

    template: `
        <div class="row">
            <div class="col-md-4 pt-3" v-for="fruit in fruits">
                <div class="card">
                    <img :src="'/assets/images/webshop/' + fruit.image" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ fruit.name }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p>Stock: {{ fruit.stock }}</p>
                        <input type="button" class="btn btn-primary" :disabled="fruit.stock === 0" @click="addToCart(fruit.id)" value="Order">
                    </div>
                </div>
            </div>
        </div>`,
})