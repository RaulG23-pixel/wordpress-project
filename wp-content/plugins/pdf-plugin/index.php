<?php
/*
    Plugin Name: Pdf-plugin
    Description: Mi plugin para generar PDFs
    Author: Raul Gonzalez
*/


//Datos de prueba;
require __DIR__."/createPdf.php";
require __DIR__."/data.php";

add_action( 'rest_api_init', function () {
	register_rest_route( 'prueba/v1', '/my-data/',
		array(
			'methods' => 'GET', 
			'callback' => 'getData'
		)
	);
});

  function getData(WP_REST_Request $request){
    global $wpdb;
    $order_code = $request->get_param('order_code');
    $result = $wpdb->get_results('SELECT * FROM `tmp_ordenes` WHERE `order_code` =' . "'" .$order_code."'");
    $products = $result[0]->products;
    $product1 = json_decode($products)[0];
    return $product1->description;
  }
