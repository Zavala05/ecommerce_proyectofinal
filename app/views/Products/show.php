<h1>VISTA DE DETALLES (TEST)</h1>
<h2><?= $data['product']->name ?></h2>
<p>ID: <?= $data['product']->id ?></p>
<p>Precio: $<?= number_format($data['product']->price, 2) ?></p>
<a href="<?= URL_ROOT ?>/products">← Volver a productos</a>