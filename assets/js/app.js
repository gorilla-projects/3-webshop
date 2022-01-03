// Set config defaults when creating the instance
const instance = axios.create();
  
// Alter defaults after instance has been created
instance.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

var app = new Vue({
    el: '#app',
    data: {
        appName: 'The Fruit Bowl',
        products: [],
        axiosInstance: '',
    },

    mounted() {
        this.$on('add-to-cart', (id) => {
            this.products.push(id)
        })

        this.$on('save-cart', () => {
            this.saveToBackEnd()
        })
    },

    methods: {
        updateCart(id) {
            this.products.push(id)
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