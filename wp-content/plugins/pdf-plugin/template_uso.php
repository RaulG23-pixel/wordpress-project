<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@200;300;400;500&display=swap"
        rel="stylesheet">
    <title>template</title>
</head>
<style>
            
            * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    html{
        background:gray;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: white;
        width: 789px;
        margin: auto;
    }

    .container {
        max-width: 756px;
        margin: auto;
    }

    .title {
        font-family: Arial, Helvetica, sans-serif;
    }


    .img_container-pais {
        width: 130px;
        float: right;
    }

    .img_container-pais img {
        width: 100%;
    }

    .imagen-portada::after {
        clear: both;
        content: "";
        display:table;
    }

    .mt-3 {
        margin-top: 14.5rem;
    }

    .page {
        padding: 2.9rem 2.3rem 0 2.3rem;
        margin-top: 1rem;
        border: 1px solid #000;
        height: 970px;
        page-break-after: always;
    }
    .page:last-child{
        page-break-after:unset;
    }
    .page.page-alt{
        padding: 1.8rem 0 0 0;
        padding-left: 2rem;
    }

    .img_container-logo {
        width: 250px;
        margin-right: 1.2rem;
        margin-left: 26px;
        margin-top: 17px;
    }

    .img_container-logo img {
        width: 100%;
    }

    .title-flex {
        display: flex;
    }
    .clearfix::after{
        clear: both;
        content: "";
        display: table;
    }

    .row.row-flex-center {
       width: 540px;
       margin: auto;
       margin-top: 260px;
    }
    .row-flex-center > * {
        display: inline-block;
        float: left;
        width: 233px;
    }
    .row-flex{
        display:block;
    }
    .title-text {
        padding-left: 1.1rem;
        border-left: 1px solid rgb(231, 231, 231);
    }

    .title-weight {
        font-weight: 800;
        font-size: 2rem;
        margin-right: .2rem;
        color: rgb(3, 24, 116);
    }

    .title-number {
        color: rgb(63, 63, 63);
        font-size: 2.2rem;
    }

    .title-first {
        font-size: 0.88rem;
        text-transform: uppercase;
        color: rgb(51, 51, 51);
    }

    .title-subtitle {
        text-transform: uppercase;
        font-size: .60rem;
        color:#323232;
    }

    .portada-flex-end {
        display: inline-block;
        width: 420px;
        transform: translateX(314px);
    }
    .portada_bottom{
        margin-top: 460px;
    }
    
    .portada-flex-end div, .portada-flex-end img {
        display: inline-block;
    }
    .portada-flex-end .column{
        width: 30%;
    }
    .column .img_container { 
        width: 64px;
        display: block;
        margin: auto;
    }
    .portada-flex-end img {
        width: 100%
    }
    .column.text{
        width: 32%;
    }

    .portada_footer-text {
        font-size: .52rem;
        padding: 0;
        padding-left: .5rem;
        border-left: 1px solid #ccc;
    }

    .portada_footer-text span {
        display: block;
        line-height: 9px;
        color: #515151;
    }

    .page-marker {
        position: relative;
    }

    .marker-container {
        width: 350px;
        position: absolute;
        
    }
    .marker-1{
        top: 0;
        right: 0;
    }
    .marker-2{
        bottom:0;
        right: 0;
    }
    .marker-3{
        bottom:0;
        left:0;
        padding: 15px;
        text-align: center;
    }
    .marker-3 span{
        font-size: 9px;
        display:block;
    }
    .marker {
        position: relative;
        text-align: right;
        padding: .54rem 1.7rem;
        background: rgb(2, 30, 124);
        color: rgb(218, 218, 218);
        font-size: 12px;
        height: 23px;
    }

    .marker::after {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        content: '';
        width: 99px;
        background-color: rgb(24, 130, 236);
    }

    .content {
        margin-top: 1.2rem;
    }

    .page1-header {
        display: block;
        margin-top: 40px;
        margin-bottom: 80px;
    }
    .page1-header::after{
        content: "";
        display: table;
        clear: both;
    }
    .page1-header div{
        display: inline-block;
        float: left;
    }
    .page1-header .page1-header-logo {
        width: 30%;
        margin-left: 1rem;
    }
    .page1-header-text{
        border-left: 1px solid #ccc;
        padding-left: .7rem;
        width: 60%;
        padding-right: 2rem;
    }
    .page1-header-text h3{
        color:rgb(3, 24, 95);
        margin-bottom: 3px;
        margin-top: 6px;
    }
    .page1-header-text span{
        font-size: 12px;
        color: rgb(54,54,54);
    }
    .icon_container{
        width: 34px;
        margin-top: 28px;
        padding: .78rem;
    }
    .icon_container img{
        width: 100%;
    }
    .item{
        display:block;
        margin-top: -8.3rem;
        align-items: center;
    }
    .item div {
        float: left;
        display: inline-block;
    }
    .item.row-2{
        margin-top: -7.8rem;
    }
    .item.row-3{
        margin-top:-7.9rem;
    }
    .item-description{
        padding: 0.4rem 0 0 .5rem;
        border-left: 1px solid #ccc;
        width: 70%;
    }
    .item-description h4{
        font-size: .82rem;
        color:rgb(1, 42, 105);
        margin-bottom: 5px;
        font-weight: bold;
    }
    .item-description p{
        font-size: .62rem;
        line-height: 15px;
        color: rgb(88,88,88);
        font-weight:400;
        width:89%;
    }
    .row-page-1{
        margin-top: 1.4rem;
        max-height: 188px;
        margin-bottom: 46px;
    }
    .row-page-1:last-child{
        margin-bottom: 0;
    }
    .row-page-items .column-img{
        width: 36%;
        display: inline-block;
    }
    .row-page-items .column-text{
        width: 31%;
        display: inline-block;
    }
    .img-container-column{
        width:100%;
        display: inline-block;
    }
    .img-container-column img{
        width: 100%;
    }
    .row{
        width: 100%;
    }
    /*PAGE 2*/
    /*Header*/
    .page.pagina2{
        padding-bottom: 0;
        position:relative;
    }
    .page2-marker{
        font-size: 10px;
        position: absolute;
        bottom: 35px;
        right: 65px;
    }
    .page2-header{
        display:block;
    }
    .page2-header div{
        display: inline-block;
    }
    .page2-header__img-container {
        width: 210px;
        padding-right: 25px;
    }
    .page2-header__img-container img{
        width: 100%;
    }
    .page2-header__column1{
        width: 36%;
        text-align: right;
    }
    .page2-header__column1 p{
        font-size: 8.7px;
    }
    .page2-header__column2{
        width: 50%;
        text-align:right;
        padding-right: 2rem;
    }
    .page2-header__text-container{
        margin-top: 2.2rem;
    }
    .page2-header__text-container span{
        display:block;
        font-size: 11px;
    }
    .page2-authors{
        margin-top: 0.7rem;
        margin-bottom: 0.5rem;
    }
    .page2-authors::after{
        content: "";
        clear: both;
        display: table;
    }
    .page2-authors > div{
        float: left;
        display: inline-block;
        width: 50%;
    }
    .page2-authors div span{
        display:block;
        font-size: 11px;
    }
    /*TABLE*/
    .page2-table{
        margin-top: 23px;
        margin-bottom: 112px;
    }
    .page_break{
        page-break-after: always;
    }
    table{
        width: 100%;
        margin-bottom: 30px;
    }
    .table-header{
        background-color: rgb(8, 49, 126);
        color: rgb(221, 221, 221);
        font-size: 12px;
    }
    .table-header th{
        font-weight: bold;
        padding: 6px 0;
        margin-bottom: 2px;
    }
    .table-body td{
        text-align: center;
        font-size: 10.25px;
        line-height: 23px;
        vertical-align: top;
        text-align: left;
        padding-top: .6rem;
    }
    .table-img-container{
        max-width: 41px;
        margin: 0 auto;
    }
    .table-img-container.end{
        max-width: 27px;
    }
    .table-img-container img{
        width:100%;
    }
    .table-data-image{
        width: 140px;
    }
    .table-body .table-data-item{
        width: 55px;
        text-align: center;
    }
    .table-body .table-data-model{
        width: 60px;
        text-align: center;
    }
    .table-body .table-data-description{
        width: 120px;
    }
    .table-body .table-data-cant, .table-body .table-data-un {
        width: 60px;
        text-align: center;
    }
    .table-body .table-data-valor_un, .table-body .table-data-valor_total{
        width: 80px;
        text-align: center;
    }

    
    
    /*LOGISTICA*/
    .datos-logistica{
        margin-top: 0px;
        font-size: 10px;
        position: absolute;
        bottom: 34rem;
    }
    .datos-logistica div{
        display: inline-block;
        height: 39px;
    }
    .datos-logistica .observaciones{
        width:60%;
        font-size: 9px;
    }
    .row-observaciones.observaciones_first{
        height: 32px;
    }
    .row-observaciones.garantia{
        height: 23px;
    }
    .datos-logistica .page-results{
        width: 20%;
        margin-left: 100px;
        position:absolute;
    }
    .page-results > div {
        display:inline-block;
        width: 50%;
        height: auto;
    }
    .page-results .results-column-value{
        width: 47%;
    }
    .results-column-title > *, .results-column-value > *{
        display:block;
        line-height: 21px;
    }
    
    .tiempos-entrega-value{
        margin-left: 15px;
        width: 100px;
    }
    .row-observaciones > *{
        display: inline-block;
        margin-bottom: 20px;
        vertical-align: top;
    }
    .value-fields{
        margin-left: 60px;
        width: 170px;
    }
    .value-fields > * {
        display:block;
    }
    .value-fields:last-child{
        margin-bottom: -5px;
    }
    .row-observaciones:nth-child(1) .tiempos-entrega-value{
        vertical-align: bottom;
    }
    .row-observaciones .tiempos-entrega{
        width: 161px;
    }
    .page2-footer{
        position: absolute;
        bottom: 20px;
    }
    .page2-footer-top::after{
        content: '';
        clear: both;
        display: table;
    }
    
    .page2-footer-top > div{
        width: 50%;
        float: left;
        display:inline-block;
    }
    .footer-top-icon{
        width: 40px;
    }
    .footer-top-icon img{
        width: 100%;
    }
    .footer-top-content{
        font-size: 9px;
        margin-top: 10px;
    }
    .footer-top-content div{
        display: inline-block;
    }
    .footer-top-content .footer-top-icon{
        width: 12%;
    }
    .footer-top-content .footer-top-text{
        width: 78%;
        margin-left: 10px;
        margin-top: 5px;
    }
    .top-text_subtitle{
        color: #4a4a4a;
    }
    .footer-bottom-content p {
        text-align: center;
        margin: 0 auto;
        font-size: 8px;
        margin-top: 7px;
        width: 160px;
    }
    /*PAGE 3*/
    .page.pagina3{
        padding-right: 0;
    }
    .page3-header{
        margin-top: 8px;
    }
    .page3-header::after{
        content: '';
        clear:both;
        display:table;
    }
    .page3-header-logo{
        width: 210px;
        margin-right: 12px;
        float:left;
    }
    .page3-header-logo img{
        width: 100%;
    }
    .page3-header-title{
        float:left;
        vertical-align: bottom;
        line-height: 68px;
        font-size: 20px;
        padding-left: 18px;
        border-left: 1px solid rgb(226, 226, 226);
        color:rgb(1, 42, 105);
        text-transform: uppercase;
    }
    .page3-content::after{
        content: '';
        clear: both;
        display: table;
    }
    .page3-content > div{
        float:left;
    }
    .page3-content-column-1{
        width: 63%;
    }
    .page3-content-column-2{
        width: 37%;
        padding-top: 22px;
    }
    .page3-text-title{
        font-size: 12px;
        color: rgb(7, 26, 134);
        font-weight: bold;
        margin-top: 14px;
    }
    .text-title-first{
        margin-top: 24px;
    }
    .page3-row-content ul{
        width: 85%;
        margin-left: 17px;
        margin-top: 10px;
    }
    .page3-row-content li{
        font-size: 11px;
        line-height: 15px;
        margin-bottom: 6px;
    }
    .page3-row-content span{
        font-size: 11px;
    }
    .column-2-img-container{
        width: 262px;
        margin-bottom: 20px;
    }
    .column-2-img-container img{
        width:100%;
    }
    /*PAGINA4*/
    .page.pagina4{
        padding-left: 0;
        padding-right: 0;
    }
    .page4__header{
        margin-top: 43px;
        color: rgb(31,49,134);
    }
    .page4__header > div{
        width: 32%;
        display: inline-block;
        height: 240px;
        vertical-align: middle;        
    }
    .logo-container img{
        width: 187px;
        margin-top: 78px;
        margin-left: 32px;
    }
    .logo-container span{
        display: block;
        font-size: 9.9px;
        margin-left: 70px;
    }
    .img-header4 img{
        width: 248px;
        height: 100%;
    }
    .page4__header .text-container{
        border-left: 1px solid rgb(233, 233, 233);
        padding-left: 20px;
    }
    .page4__header .text-container h2{
        color: rgb(1, 31, 129);
        text-transform: uppercase;
        margin-top: 18px;
    }
    .page4__header .text-container span{
        font-size: 12.9px;
    }
    .page4__header .text-container span{
        display:block;
        font-size: 11.20px;
    }
    .contact-data-container{
        margin-top: 20px;
    }
    .contact-data-container span{
        line-height: 16px;
    }
    .sede{
        font-weight: bold;
        letter-spacing: 2px;
    }
    .row.banner{
        height: 500px;
        margin-top: 20px;
    }
    .row.banner .img-container{
        width: 100%;
        height: 100%;
    }
    .row.banner .img-container img{
        width: 100%;
        height: 100%;
    }

</style>
<body>
    <div class="container">
        <div class="portada page">
            <div class="row imagen-portada">
                <div class="img_container-pais">
                    <img src='http://localhost/pdf-plugin/assets/img/francia-pais.jpg' alt="imagen de francia">
                </div>
            </div>
            <div class="row mt-3 row-flex-center clearfix">
                <div class="img_container-logo row-item">
                    <img src="http://localhost/pdf-plugin/assets/img/kalstein.jpg" alt="logo kalstein">
                </div>
                <div class="normal row-item title-text">
                    <p class="title-first">Cotización</p>
                    <div>
                        <span class="title title-weight">QUO</span><span class="title-number">135</span>
                    </div>
                    <span class="title-subtitle">Un acompañamiento diferente, a su servicio</span>
                </div>
            </div>
            <div class="row clearfix portada_bottom">
                <div class="portada-flex-end clearfix">
                    <div class="column">
                        <div class="img_container">
                            <img src="http://localhost/pdf-plugin/assets/img/kalstein-logo-transparent.jpg" alt="marca de kalstein transparente">
                        </div>
                    </div>
                    <div class="column text">
                        <div class="portada_footer-text">
                            <span>All rights reserved ® KALSTEIN France S. A. S.,</span>
                            <span>2 Rue Jean Lantier • 75001 Paris •</span>
                            <span>+33 1 78 95 87 89 / +33 6 80 76 07 10 • </span>
                            <span>https://kalstein.eu</span>
                            <span>KALSTEIN FRANCE, S. A. S</span>
                        </div>
                    </div>
                    <div class="column">
                        <div class="img_container">
                            <img src="http://localhost/pdf-plugin/assets/img/qr.jpg" alt="codigo qr">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagina1 page page-marker page-alt">
            <div class="marker-container marker-1">
                <div class="marker"></div>
            </div>
            <div class="marker-container marker-2">
                <div class="marker">pagina 2 de 5</div>
            </div>
            <div class="content">
                <div class="row page1-header clearfix">
                    <div class="img_container-logo page1-header-logo">
                        <img src="http://localhost/pdf-plugin/assets/img/kalstein.jpg" alt="logo de kalstein">
                    </div>
                    <div class="page1-header-text">
                        <span>Nuestros servicios</span>
                        <h3>Beneficios y Respaldo</h3>
                        <span>En Kalstein France, nos ocupamos de la plena satisfacción de nuestros clientes, es por eso
                            que brindamos servicios de
                            valor agregado del más alto nivel basados en nuestra experiencia.
                        </span>
                    </div>
                </div>
                <div class="row row-flex row-page-1 row-page-items clearfix">
                    <div class="column-text">
                        <div class="item clearfix">
                            <div class="icon_container">
                                <img src="http://localhost/pdf-plugin/assets/img/icono1.png" alt="icono 1">
                            </div>
                            <div class="item-description">
                                <h4>Inducciones y entrenamiento online</h4>
                                <p>En cualquier parte del mundo, reciba su inducción o capacitación de nuestro equipo especializado de ingenieros</p>
                            </div>
                        </div>
                    </div>
                    <div class="column-text">
                        <div class="item clearfix">
                            <div class="icon_container">
                                <img src="http://localhost/pdf-plugin/assets/img/icono2.png" alt="icono 1">
                            </div>
                            <div class="item-description">
                                <h4>Rápida Respuesta</h4>
                                <p>Nuestro equipo de trabajo siempre está disponible para responder a todas sus consultas o preguntas, con el fin de ayudarlo en cualquier situación</p>
                            </div>
                        </div>
                    </div>
                    <div class="column-img">
                        <div class="img-container-column">
                            <img src="http://localhost/pdf-plugin/assets/img/imagen1.jpg" alt="imagen 1">
                        </div>
                    </div>
                </div>
                <div class="row row-flex row-page-1 row-page-items clearfix">
                    <div class="column-text">
                        <div class="item row-2 clearfix">
                            <div class="icon_container">
                                <img src="http://localhost/pdf-plugin/assets/img/icono3.png" alt="icono 1">
                            </div>
                            <div class="item-description">
                                <h4>Inducciones y entrenamiento online</h4>
                                <p>En cualquier parte del mundo, reciba su inducción o capacitación de nuestro equipo especializado de ingenieros</p>
                            </div>
                        </div>
                    </div>
                    <div class="column-text">
                        <div class="item row-2 clearfix">
                            <div class="icon_container">
                                <img src="http://localhost/pdf-plugin/assets/img/icono4.png" alt="icono 1">
                            </div>
                            <div class="item-description">
                                <h4>Rápida Respuesta</h4>
                                <p>Nuestro equipo de trabajo siempre está disponible para responder a todas sus consultas o preguntas, con el fin de ayudarlo en cualquier situación</p>
                            </div>
                        </div>
                    </div>
                    <div class="column-img">
                        <div class="img-container-column">
                            <img src="http://localhost/pdf-plugin/assets/img/imagen2.jpg" alt="imagen 1">
                        </div>
                    </div>
                </div>
                <div class="row row-flex row-page-1 row-page-items clearfix">
                    <div class="column-text">
                        <div class="item row-3 clearfix">
                            <div class="icon_container">
                                <img src="http://localhost/pdf-plugin/assets/img/icono5.png" alt="icono 1">
                            </div>
                            <div class="item-description">
                                <h4>Inducciones y entrenamiento online</h4>
                                <p>En cualquier parte del mundo, reciba su inducción o capacitación de nuestro equipo especializado de ingenieros</p>
                            </div>
                        </div>
                    </div>
                    <div class="column-text">
                        <div class="item row-3 clearfix">
                            <div class="icon_container">
                                <img src="http://localhost/pdf-plugin/assets/img/icono6.png" alt="icono 1">
                            </div>
                            <div class="item-description">
                                <h4>Rápida Respuesta</h4>
                                <p>Nuestro equipo de trabajo siempre está disponible para responder a todas sus consultas o preguntas, con el fin de ayudarlo en cualquier situación</p>
                            </div>
                        </div>
                    </div>
                    <div class="column-img">
                        <div class="img-container-column">
                            <img src="http://localhost/pdf-plugin/assets/img/imagen3.jpg" alt="imagen 1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        %content%
        <div class="pagina3 page page-marker">
            <div class="marker-container marker-1">
                <div class="marker"></div>
            </div>
            <div class="row">
                <div class="page3-header">
                    <div class="page3-header-logo">
                        <img src="http://localhost/pdf-plugin/assets/img/kalstein.jpg" alt="logo de kalstein">
                    </div>
                    <h2 class="page3-header-title">condiciones comerciales</h2>
                </div>
                <div class="row page3-content">
                    <div class="page3-content-column-1">
                        <div class="page3-row-content">
                            <p class="page3-text-title text-title-first">ACEPTACION DE ORDEN DE COMPRA</p>
                            <ul>
                                <li>Kalstein France SAS recibe a satisfacción la orden de compra,
                                     cuando este documentoexpresa fielmente las condiciones comerciales establecidas en la ofert
                                </li>
                                <li>Pagos de contado: Para el trámite y despacho de la mercancía solicitada,
                                     es requerida lacomprobación de pago en cuentas bancarias de Kalstein France</li>
                                <li> Clientes con Crédito: Para tramitar y despachar la mercancía solicitada,
                                     requiere comprobación de cupo asignado y no estar en mora con Kalstein France.</li>
                            </ul>
                        </div>
                        <div class="page3-row-content">
                            <p class="page3-text-title">MONEDA DE NEGOCIACION</p>
                            <ul>
                                <li>
                                    Ofertas en moneda extranjera, se realizará el cálculo de conversión de moneda
                                     de acuerdo alo establecido por el Banco de Francia, fijado el día de la facturación
                                </li>
                                <li>
                                    La moneda de negociacion establecida para la presente cotizacion es EUR.
                                </li>
                                
                            </ul>
                        </div>
                        <div class="page3-row-content">
                            <p class="page3-text-title">GARANTIA</p>
                            <ul>
                                <li>
                                    Todos los equipos comercializados por Kalstein France, tienen garantía de un año pordefectos
                                     de fabricación a partir de la fecha de la facturacion de la mercancía.
                                </li>
                                <li>
                                    La garantía no cubre daños causados por mala instalación u operacion,
                                     defectos portransporte o por usos diferentes a los especificados por el fabricante.
                                </li>
                                <li> La garantia excluye partes electricas o consumibles.</li>
                            </ul>
                        </div>
                        <div class="page3-row-content">
                            <p class="page3-text-title">TIEMPOS DE ENTREGA</p>
                            <ul>
                                <li>
                                    Los tiempos de entrega indicados en esta cotizacion son estimaciones sujetas a variables.
                                </li>
                            </ul>
                        </div>
                        <div class="page3-row-content">
                            <p class="page3-text-title">CANCELACIONES Y DEVOLUCIONES SIN JUSTA CAUSA</p>
                            <ul>
                                <li>
                                    Mercancía en inventario, tendrá una penalización equivalente al 20% del valor de la orden decompra.
                                </li>
                                <li>
                                    Mercancía de Importación, después de recibida la orden de compra a satisfacción se disponede un máximo de (3) días para la
                                     cancelación de la orden de compra, pasado este tiempo nose aceptan cancelaciones y la mercancía será facturada conforme a lo establecido.
                                </li>
                                <li>
                                    La devolución de la mercancía será responsabilidad del Cliente, la caja, envoltorios y todaslas partes que conforman el equipo a devolver, deberán estar en perfectas condiciones sinmaltrato, rayas y etiquetas adicionales, el equipo de Soporte técnico y logística de KalsteinFrance, realizará informe técnico e indicará el recibo a satisfacción de la mercancía.
                                     De noser recibida a satisfacción se facturará el equipo conforme a lo establecido en la Orden decompra.
                                </li>
                            </ul>
                        </div>
                        <div class="page3-row-content">
                            <p class="page3-text-title">POLÍTICAS, TÉRMINOS Y CONDICIONES GENERALES:</p>
                            <span>https://kalstein.eu/p12/Terms-and-Conditions/pages.html</span>
                        </div>
                    </div>
                    <div class="page3-content-column-2">
                        <div class="column-2-img-container">
                            <img src="http://localhost/pdf-plugin/assets/img/imagen1.jpg" alt="imagen de muestra 1">
                        </div>
                        <div class="column-2-img-container">
                            <img src="http://localhost/pdf-plugin/assets/img/imagen2.jpg" alt="imagen de muestra 1">
                        </div>
                        <div class="column-2-img-container">
                            <img src="http://localhost/pdf-plugin/assets/img/imagen3.jpg" alt="imagen de muestra 1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="marker-container marker-2">
                <div class="marker">pagina 4 de 5</div>
            </div>
        </div>
        <div class="pagina4 page page-marker">
            <div class="marker-container marker-1">
                <div class="marker"></div>
            </div>
            <div class="marker-container marker-2">
                <div class="marker">pagina 5 de 5</div>
            </div>
            <div class="marker-container marker-3">
                <span>KALSTEIN FRANCE S.A.S</span>
                <span>• 2 Rue Jean Lantier, • 75001 Paris •</span>
                <span>+33 1 78 95 87 89 / +33 6 80 76 07 10 • https://kalstein.eu</span>
            </div>
            <div class="page4__content">
                <div class="row page4__header">
                    <div class="logo-container">
                        <img src="http://localhost/pdf-plugin/assets/img/kalstein.jpg" alt="logo de kalstein">
                        <span>A different accompaniment, at your service</span>
                    </div>
                    <div class="text-container">
                        <h2>¿Alguna duda?</h2>
                        <span>Contactanos</span>
                        <div class="contact-data-container">
                            <span>PARIS - FRANCE</span>
                            <span class="sede">SEDE</span>
                            <span>2 Rue Jean Lantier</span>
                            <span>Paris - France.</span>
                            <span><b>Fax</b>: +33 (0) 1 78 95 87 89</span>
                            <span><b>Tlf</b>: +33 (0) 6 80 76 07 10s</span>
                            <span>10sales@kalstein.eu</span>
                            <span><b>https</b>://<b>kalstein</b>.<b>net</b>/</span>
                        </div>
                    </div>
                    <div class="img-header4">
                        <img src="http://localhost/pdf-plugin/assets/img/imagen4.jpg" alt="imagen4">
                    </div>
                </div>
                <div class="row banner">
                    <div class="img-container">
                        <img src="http://localhost/pdf-plugin/assets/img/imagen5.jpg" alt="banner de presentacion">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>