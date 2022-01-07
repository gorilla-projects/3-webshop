<h1>Contact</h1>

<a href="?page=checkout">Checkout</a>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="?page=contact&action=handleForm&id=<?= $fruit !== false ? $fruit['id'] : '' ?>">
                <label>Fruit name: </label>
                <input type="text" name="name" value="<?= $fruit !== false ? $fruit['name'] : '' ?>"><br />

                <label>Price: </label>
                <input type="text" name="price" value="<?= $fruit !== false ? $fruit['price'] : '' ?>"><br />

                <label>Stock: </label>
                <input type="text" name="stock" value="<?= $fruit !== false ? $fruit['stock'] : '' ?>"><br />

                <label>Image: </label>
                <input type="text" name="image" value="<?= $fruit !== false ? $fruit['image'] : '' ?>"><br />

                <input type="submit" value="Send form">
            </form>
        </div>
    </div>
</div>