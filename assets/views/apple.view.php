<div class="container">
    <div class="row">
        <?php foreach ($fruits as $fruit) : ?>
            <div class="col-md-4">
                <img src="<?= $_ENV['IMAGE_PATH'] . $fruit['image'] ?>" width="100%">
            </div>
        <?php endforeach ?>
    </div>
</div>