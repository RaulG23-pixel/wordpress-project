<?php
/*Plugin Name: add_temporal_order
  Description: Plugin for add products with a temporal user to the database
  Author: Raul Gonzalez
*/

add_action( 'rest_api_init', function () {
	register_rest_route( 'prueba/v1', '/add-tmp/',
		array(
			'methods' => 'POST',
			'callback' => 'saveData'
		)
	);
});

function saveData(WP_REST_Request $request){
    global $wpdb;
    $params = $request->get_params();
    $newarr = json_encode($params);
    $order_code = generateCode();
    $wpdb->insert('tmp_ordenes',array('products' => $newarr, 'user' => 'tmp_user', 'order_code' => $order_code));
    $response = new WP_REST_Response([
      "status" => "OK",
      "response" => "Elemento agregado correctamente",
       "data" => $params,
       "order_code" => $order_code
    ]);
    return $response;
}
function generateCode(){
  $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
  $template = '';
  $i = 0;
  while($i < 12){
      $template .= $chars[rand(0, strlen($chars))];
    $i++;
  }
  return $template;
}