<h1>Productos destacados</h1>

<?php while ($prod = $productos->fetch_object()) : ?>
    <div class="product">
        <a href="<?=base_url?>producto/ver&id=<?=$prod->id?>">
            <?php if ($prod->imagen != null) : ?>
                <img src="<?= base_url ?>uploads/images/<?= $prod->imagen ?>">
            <?php else : ?>
                <img src="<?=base_url?>assets/img/camiseta2.png">
            <?php endif; ?>
            <h3><?= $prod->nombre ?></h3>
        </a>
        <p>$<?= $prod->precio ?></p>
        <a href="<?=base_url?>/carrito/add&id=<?=$prod->id?>" class="button">Comprar</a>
    </div>
<?php endwhile; ?>