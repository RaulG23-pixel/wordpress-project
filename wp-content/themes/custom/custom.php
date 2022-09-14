<?php
/*
Template Name: custom
Template Theme URI: https://inboundcycle.com/
Author: Raul Gonzalez
Description: Plantilla desarrollada como parte del tutorial de 
como "Como crear una plantilla de Wordpress desde cero".
Version: 1.0
*/


$wpdb;
get_header();
$table = "wp_dgwt_wcas_index";
$results = $wpdb->get_results("SELECT * FROM $table LIMIT 40", OBJECT);

?>
<section class="products">
    <?php 
        foreach($results as $key){
           echo createTemplate($key);
        }
    ?>
</section>
<div class = 'product_list'>
    <header class="product_list__header">
        <h3 class="product_list__title">Tus productos</h3>
        <span class="product_list__subtitle">En este panel podrás ver todos los productos que
             quiereas añadir a la cotización
        </span>
        <button class="product_list__close_button" id="close_button">X</button>
    </header>
        <div class="product_list__content" id="products_content">
        </div>
    <div class="total_panel">
        <span>Total: </span>
        <span id="total">0</span>
    </div>
    <div class="product_list__footer">
        <button class="btn_procesar">Procesar cotización</button>
    </div>
</div>
<button class="product_list__open_button" id="open_button"> Tus productos <b>>></b> </button>

<?php
get_footer();

function createTemplate($array){
    $template = "<article class='my_product'>";
    $template .= "<div class='img_container'><img src='". $array->image ."'alt='imagen de producto'/></div>";
    $template .= "<div class='product_text'>";
    $template .= "<p class='product_title'>" . $array->name . "</p>";
    $template .= "<span class='product_description'>" . $array->description . "</span>";
    if($array->price == "-1"){
        $template .= "<span class='product_cost'> Producto no disponible</span>";
    }else{
        $template .= "<span class='product_cost'>" . $array->price . "$</span>";
    }
    $buttonCotizacion = $array->price != "-1" ? "<button class='btn btn-add'>Añadir a cotización</button>" : '';
    $template .= "
    <div class='buttons'>
        <a href='" . $array->url ."' class='btn btn-see'>Ver artículo</a>
        " . $buttonCotizacion . "
    </div>";
    $template .= "</div>";
    $template .= "</article>";

    return $template;
}

?>