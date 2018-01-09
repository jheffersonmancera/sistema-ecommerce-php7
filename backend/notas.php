
/*=============================================
=            PLUGINS SUBLIME TEXT            =
=============================================*/
-AdvanceNewFile
    _ctrl+alt+n
-Emmet
   _html:  !tab
-BracketHighliter
-Alignment
    _ ctrl+alt+a 

-ConsoleWrap
    _ ctrl+shift+q
 -Comment Snipet   
    _comm-html-section
    _comm-section
-jsFormat
   __ctrl+alt+f organiza lineas de codigo
   
 -Minify Current Html5 
    _ctrl+shift+m

-configuracion de SettingsUser 
    _"save_on_focus_lost": true
-configuracion de keybindings
      _{"keys": ["ctrl+."], "command": "toggle_side_bar"}
/*========================
========================*/












/*=============================================
=  Definicion de a que objetos visuales       =
=============================================*/
Definicion de a que objetos visuales se les cambiara color dinamicamente.
barraSuperior
textoSuperior
colorFondo
colorTexto
logo
icono
redesSociales

red:facebook
estilo: facebookColor
url. http://facebook.com/tutorialesx

/*=============================================
=       Creacion de Base de datos:           =
=============================================*/
-Creamos la base de datos ecommerce
-agregamos la tabla plantilla para modificar dinamicamente a
frontend/vistas/css/plantilla.css:
  *id int ai pk
  *barraSuperior text
  *textoSuperior text
  *colorFondo  text
  *icono text
  *logo text
  *colorTexto text
  *redesSociales text
  *fecha timestamp
 -----------------------------------------------------------------------------
<!--=======================
=  CREACION array en formato JSON PARA SOLUCIONAR ALMACENAMIENTO DE REDES SOCIALES -esto se pone en el campo redesSociales de la tabla plantilla- =
========================-->

[{
  "red": "fa-facebook",
  "estilo": "facebookBlanco",
  "url": "http://facebook.com/"
}, {
  "red": "fa-youtube",
  "estilo": "youtubeBlanco",
  "url": "http://youtube.com/"
}, {
  "red": "fa-twitter",
  "estilo": "twitterBlanco",
  "url": "http://twitter.com/"
}, {
  "red": "fa-google-plus",
  "estilo": "googleBlanco",
  "url": "http://google.com/"
}, {
  "red": "fa-instagram",
  "estilo": "instagramBlanco",
  "url": "http://instagram.com/"
}]


<!--====  End of    ====-->


/*=============================================
Creacion de Conexion:
=============================================*/
frontend/modelos/conexion.php
*4 devuelve toda la conexion a la base de datos


frontend/modelos/plantilla.modelo.php

1*/* Se usa la funcion publica static cuando se llama a un parametro*/
/ 
2*/* se usa fetch por tratarse de una sola filas
cuando son varias filas se usa el fetchAll*/


/*=============================================
modelo, controlador de estilos dinamicos
=============================================*/
frontend/controladores/plantilla.controlador.php


/*=============================================
Agregar solicitud de controladores en index.php
=============================================*/
require_once "controladores/plantilla.controlador.php";
require_once "modelos/plantilla.modelo.php";

/*=============================================
Codigo para traer los iconos de redes sociales dinamicamente con json
=============================================*/
<?php

          $social = ControladorPlantilla::ctrEstiloPlantilla();

          $jsonRedesSociales = json_decode($social["redesSociales"],true);    

          foreach ($jsonRedesSociales as $key => $value) {

            echo '<li>
                <a href="'.$value["url"].'" target="_blank">
                  <i class="fa '.$value["red"].' redSocial '.$value["estilo"].'" aria-hidden="true"></i>
                </a>
              </li>';
          }

          ?>


/*=============================================
Modificar una hoja de estilo con javascript
=============================================*/
frontend/vistas/js/plantilla.js
Crear archivo frontend/ajax/plantilla.ajax.php
*5 Este archivo nunca es solicitado por el sistema hasta que javascript lo solicita es necesario requerirlo de nuevo


var_dump sirve para mostrar lo que contiene la variable a la hora de hacer pruebas
*6// json_encode convierto un array to string
      json_decode convierte string en un array
esto sirve para mostrar en consola console.log("colorFondo", colorFondo);

plantilla.php
*7 configuración del icono

/*=============================================
CREACION DE LA TABLA CATEGORIA y SUBCATEGORIAS
=============================================*/
categorias: id, categoria, ruta, fecha
subcategorias: id,subcategoria,id_categoria,ruta,fecha


/*=====  End of Section comment block  ======*/


/*=============================================
MODELO Y CONTROLADOR
=============================================*/
-productos.controlador.php
****Este controlador servira para administrar las categorias tambien
-productos.modelo.php
-Se hace inclusion de los controladores y modelos en index.php

/*===========*/
/*=============================================
CABEZOTE.PHP traer categorias desde base de datos
=============================================*/
-Creacion de la clase ControladorProductos en productos.controlador.php.
-Creación del modelo en productos.modelo.php
***1 traemos parametros por lo tanto es estatico
***2 Para traer varias filas usamos fetchAll()
***3 Enlazar parametros


/*===========*/
/*============================================
SISTEMA DE URL AMIGABLE
=============================================*/
-CREAR frontend/.htaccess
crear codigo de rewrite para urls


-Crear archivo modelos/rutas.php
//se modifica cuando se suba al SERVIDOR

-index.php require_once "modelos/rutas.php";
-plantilla.php: generar explode para separa la ruta amigable
-

/*===========*/
/*=============================================
LISTA BLANCA DE URLS AMIGABLES
=============================================*/
-
/*=====  ======*/
-Crear modelos/productos.php
error404.php
/*=============================================
SLIDE.PHP
=============================================*/



/*=====   ======*/
