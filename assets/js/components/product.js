Vue.component('product', {
    data: function () {
        return {

        }
    },

    props: {
        fruit_data: {},
    },

    methods: {
        addToCart(id) {
            this.$root.$emit('add-to-cart', id)
        },
    },

    template: `
        <div class="card">
            <img :src="'/assets/images/webshop/' + fruit_data.image" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ fruit_data.name }}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p>Stock: {{ fruit_data.stock }}</p>
                <input type="button" class="btn btn-primary" :disabled="fruit_data.stock === 0" @click="addToCart(fruit_data.id)" value="Order">
            </div>
        </div>`,
})