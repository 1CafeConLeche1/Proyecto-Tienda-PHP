<h1>Carrito de la comprar</h1>

<?php if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1) : ?>
    <table>
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Unidades</th>
            <th>Eliminar</th>
        </tr>
        <?php
        foreach ($carrito as $indice => $elemento) :
            $producto = $elemento['producto'];
        ?>
            <tr>
                <td>
                    <?php if ($producto->imagen != null) : ?>
                        <img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img-carrito">
                    <?php else : ?>
                        <img src="<?= base_url ?>assets/img/camiseta2.png" class="img-carrito">
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
                </td>
                <td>
                    $<?= $producto->precio ?>
                </td>
                <td>
                    <?= $elemento['unidades'] ?>
                    <div class="updown-unidades">
                        <a href="<?= base_url ?>carrito/up&index=<?= $indice ?>" class="button">+</a>
                        <a href="<?= base_url ?>carrito/down&index=<?= $indice ?>" class="button">-</a>
                    </div>
                </td>
                <td>
                    <a href="<?= base_url ?>carrito/remove&index=<?= $indice ?>" class="button button-carrito button-red">Quitar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </br>
    <div class="delete-darrito">
        <a href="<?= base_url ?>carrito/delete_all" class="button button-delete button-red">Vaciar carrito</a>
    </div>

    <div class="total-carrito">
        <?php $stats = Utils::statsCarrito(); ?>
        <h3>Precio total: $<?= $stats['total'] ?></h3>
        <a href="" class="button button-pedido">Hacer pedido</a>
    </div>
<?php else : ?>
    <p>El carrito está vacío, puede añadir productos</p>
<?php endif; ?>