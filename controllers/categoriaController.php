<?php
require_once 'models/Categoria.php';
require_once 'models/Producto.php';

class categoriaController
{
    public function index()
    {
        Utils::isAdmin();
        $categoria = new Categoria();
        $categorias = $categoria->getAll();

        require_once 'views/categoria/index.php';
    }

    public function ver()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            //Conseguir categoría 
            $categoria = new Categoria();
            $categoria->setId($id);
            $categoria = $categoria->getOne();

            //Conseguir productos 
            $producto = new Producto();
            $producto->setCategoria($id);
            $productos = $producto->getAllbyCategory();
        }

        require_once 'views/categoria/ver.php';
    }

    public function crear()
    {
        Utils::isAdmin();
        require_once 'views/categoria/crear.php';
    }

    public function save()
    {
        Utils::isAdmin();

        if (isset($_POST) && isset($_POST['nombre'])) {
            //Guardar categoría
            $categoria = new Categoria();

            $categoria->setNombre($_POST['nombre']);

            $categoria->save();
        }
        header("Location:" . base_url . "categoria/index");
    }
}
