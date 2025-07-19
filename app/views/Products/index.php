<h1 class="mb-4">Productos Disponibles</h1>

<div class="row">
    <?php foreach ($data['products'] as $product) : ?>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <img src="/assets/images/<?php echo $product->image; ?>" class="card-img-top" alt="<?php echo $product->name; ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $product->name; ?></h5>
                <p class="card-text"><?php echo substr($product->description, 0, 100) . '...'; ?></p>
                <p class="text-primary fw-bold">$<?php echo number_format($product->price, 2); ?></p>
            </div>
            <div class="card-footer bg-white">
                <a href="/product/show/<?php echo $product->id; ?>" class="btn btn-primary">Ver Detalles</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>