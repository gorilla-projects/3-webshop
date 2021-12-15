<div class="container">
    <cart-form>
        <div class="row">
            <div class="col-md-4 pt-3" v-for="fruit in fruits">
                <product :fruit_data="fruit"></product>
            </div>
        </div>
    </cart-form>
</div>