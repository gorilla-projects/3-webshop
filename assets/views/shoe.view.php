<h1>Shoe</h1>

<div class="container">
    <?php foreach($data as $shoe) : ?>
        <div class="row">
            <div class="col-md-12"><?= $shoe['name'] ?></div>
        </div>
    <?php endforeach ?>
</div>