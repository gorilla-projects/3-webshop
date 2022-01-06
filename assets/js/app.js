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
        updateCart(article) {
            let foundIndex = false;

            this.cart.products.forEach(function(product, index) {
                if (product.id == article.id) {
                    foundIndex = index;
                }
            });

            if (foundIndex === false) {
                this.cart.products.push({
                    id: article.id,
                    cost: article.cost,
                    name: article.name,
                    image: article.image,
                    amount: 1,
                });
            } else {
                this.cart.products[foundIndex].amount++;
            }

            this.cart.totalProducts = this.totalProducts();
            this.cart.totalPrice = this.totalPrice();

            localStorage.setItem('cart', JSON.stringify(this.cart))
        },

        totalPrice() {
            let totalPrice = 0;

            this.cart.products.forEach(article => {
                totalPrice += (article.amount * article.cost);
            });

            return totalPrice;
        },

        totalProducts() {
            let totalProducts = 0;

            this.cart.products.forEach(article => {
                totalProducts += article.amount;
            });

            return totalProducts;
        },

        showShoppingCart() {
            this.$refs.cartComponent.showShoppingCart();
        },

        closeShoppingCart() {
            this.$refs.cartComponent.closeShoppingCart();
        },

        saveToBackEnd() {
            let form = new FormData

            form.append('cart', JSON.stringify(this.cart))
            
            // Header must be set to tell back-end that this is an Ajax call
            axios.post('?page=checkout&action=savecard', form, {
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                }
            }).then(function (response) {
                console.log(response.data)
            }).catch(function (error) {

            })
        },

        updateStock() {
            
        },
    },    
})

Vue.config.devtools = true
Vue.config.productionTip = false