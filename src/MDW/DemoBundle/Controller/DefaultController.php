<?php

namespace MDW\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('MDWDemoBundle:Default:index.html.twig');
    }

    public function articulosAction() {
        //-- Simulamos obtener los datos de la base de datos cargando los artículos a un array
        $articulos = array(
            array('id' => 1, 'title' => 'Articulo numero 1', 'created' => '2011-01-01'),
            array('id' => 2, 'title' => 'Articulo numero 2', 'created' => '2011-01-02'),
            array('id' => 3, 'title' => 'Articulo numero 3', 'created' => '2011-01-03'),
        );
        return $this->render('MDWDemoBundle:Default:articulos.html.twig', array('articulos' => $articulos));
    }

    public function articuloAction($id) {
        //-- Simulamos obtener los datos de la base de datos cargando los artículos a un array
        $articulos = array(
            array('id' => 1, 'title' => 'Articulo numero 1', 'created' => '2011-01-01'),
            array('id' => 2, 'title' => 'Articulo numero 2', 'created' => '2011-01-02'),
            array('id' => 3, 'title' => 'Articulo numero 3', 'created' => '2011-01-03'),
        );
        //-- Buscamos dentro del array el ID solicitado 
        $articuloSeleccionado = null;
        foreach ($articulos as $articulo) {
            if ($articulo['id'] == $id) {
                $articuloSeleccionado = $articulo;
                break;
            }
        }
        //-- Invocamos a nuestra nueva plantilla, pasando los datos return 
        return $this->render('MDWDemoBundle:Default:articulo.html.twig', array('articulo' => $articuloSeleccionado));
    }
}