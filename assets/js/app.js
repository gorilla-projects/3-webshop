// Set config defaults when creating the instance
const instance = axios.create();
  
// Alter defaults after instance has been created
instance.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

var app = new Vue({
    el: '#app',
    data: {
        appName: 'The Fruit Bowl',
        cart: '',
        axiosInstance: '',
    },

    mounted() {
        this.$on('add-to-cart', (id) => {
            this.updateCart(id)
        })

        this.$on('save-cart', () => {
            this.saveToBackEnd()
        })
    },

    created() {
        if (localStorage.getItem('cart') === null) {
            this.cart = {
                products: [],
                totalProducts: 0,
                totalPrice: 0,
            }

            localStorage.setItem('cart', JSON.stringify(this.cart));
        }

        this.cart = JSON.parse(localStorage.getItem('cart'));
    },

    methods: {
        updateCart(id) {
            let foundIndex = false;

            this.cart.products.forEach(function(product, index) {
                if (product.id == id) {
                    foundIndex = index;
                }
            });

            if (foundIndex === false) {
                this.cart.products.push({
                    id: id,
                    amount: 1,
                });
            } else {
                this.cart.products[foundIndex].amount++;
            }

            this.cart.totalProducts++;

            localStorage.setItem('cart', JSON.stringify(this.cart))
        },

        showCart() {
            $('.layer').fadeIn();

            $('.cart').toggle({
                direction: 'right',
            });
        },

        fadeOutShoppingCart() {
            this.$refs.cartComponent.closeShoppingCart();
        },

        saveToBackEnd() {
            let form = new FormData

            form.append('products', JSON.stringify(this.products))
            
            // Header must be set to tell back-end that this is an Ajax call
            axios.post('?page=home&action=savecard', form, {
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                }
            }).then(function (response) {
                console.log(response.data)
            }).catch(function (error) {

            })
        },
    }
})

Vue.config.devtools = true
Vue.config.productionTip = false