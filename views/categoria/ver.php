<?php if (isset($categoria)) : ?>
    <h1><?= $categoria->nombre ?></h1>
    <?php if ($productos->num_rows == 0) : ?>
        <p>No hay productos para mostrar</p>
    <?php else : ?>
        <?php while ($prod = $productos->fetch_object()) : ?>
            <div class="product">
                <a href="<?= base_url ?>producto/ver&id=<?= $prod->id ?>">
                    <?php if ($prod->imagen != null) : ?>
                        <img src="<?= base_url ?>uploads/images/<?= $prod->imagen ?>">
                    <?php else : ?>
                        <img src="assets/img/camiseta2.png">
                    <?php endif; ?>
                    <h3><?= $prod->nombre ?></h3>
                </a>
                <p><?= $prod->precio ?></p>
                <a href="<?=base_url?>carrito/add" class="button">Comprar</a>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
<?php else : ?>
    <h1>La categoria no existe</h1>
<?php endif; ?>