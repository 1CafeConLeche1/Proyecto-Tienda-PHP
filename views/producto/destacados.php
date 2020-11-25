<h1>Productos destacados</h1>

<?php while ($prod = $productos->fetch_object()) : ?>
    <div class="product">
        <?php if ($prod->imagen != null) : ?>
            <img src="<?= base_url ?>uploads/images/<?= $prod->imagen ?>">
        <?php else : ?>
            <img src="assets/img/camiseta.png">
        <?php endif; ?>
        <h3><?= $prod->nombre ?></h3>
        <p><?= $prod->precio ?></p>
        <a href="" class="button">Comprar</a>
    </div>
<?php endwhile; ?>