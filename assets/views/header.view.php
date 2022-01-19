<!-- HEADER VIEW PHP -->
<header class="header">
    <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6 text-center mt-5">
            <h1>The Fruity Bowl</h1>
        </div>

        <div class="col-md-3 text-end pe-5 mt-5">
            <shopping-cart ref="shoppingCart"></shopping-cart>
        </div>
    </div>

    <?= !is_null($content) && array_key_exists('headerData', $content) ? $content['headerData'] : '' ?>
</header>