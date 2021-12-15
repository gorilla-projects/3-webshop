Vue.component('cart-form', {
    data: function () {
        return {

        }
    },

    props: {
        method: {
            default: 'POST',
        }
    },

    methods: {
        sentToBackEnd() {
            this.$root.$emit('save-cart')
        }
    },

    template: `
        <form :method="method" @submit.prevent="sentToBackEnd">
            <slot></slot>
            <input type="hidden" name="name" value="Toby Versteeg">
            <input type="submit" value="Save cart">
        </form>
        `,
})