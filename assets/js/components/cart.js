Vue.component('cart-form', {
    data: function () {
        return {
            cart: null,
        }
    },

    props: {
        method: {
            default: 'POST',
        }
    },

    mounted() {

    },

    created() {
        this.cart = this.$parent.cart;
    },

    methods: {
        closeShoppingCart() {
            $('.layer').fadeOut();
            $('.cart').fadeOut();
        },
    },

    template: `
        <section>
            <button @click="closeShoppingCart">Close cart</button>
            <div class="row">
                <div class="col-md-4" v-for="product in cart">
                    {{ cart }}
                </div>
            </div>
        </section>
    `,
})