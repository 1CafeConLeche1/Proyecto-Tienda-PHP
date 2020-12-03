<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete') : ?>
    <h1>Tu pedido se ha confirmado</h1>
    <p>Tu pedido ha sido guardado con exito, una vez finalizada la tranferencia bancaria, el pedido
        será procesado y enviado </p>
    <br>
    <?php if (isset($pedido)) : ?>
        <h3>Datos del pedido:</h3>

        Número del pedido: <?= $pedido->id ?> <br>
        Total a pagar: $<?= $pedido->coste ?> <br>
        Productos: <br>
        <table>
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Unidades</th>
            </tr>
            <?php while ($producto = $productos->fetch_object()) : ?>
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
                        <?= $producto->unidades ?>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php endif; ?>

<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'comfir') :  ?>
    <h1>El pedido no ha sido procesado</h1>
<?php endif; ?>