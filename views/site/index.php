<?php

/* @var $this yii\web\View */

$this->title = 'Tienda Virtual';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Bienvenido a la Tienda Virtual!</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6">
            <h3>Escenario</h3>
                <p align="justify">
                    Usted tiene una tienda muy básica, donde un cliente puede comprar un solo producto
                    con un valor fijo, el cliente necesita únicamente proporcionar su nombre, dirección de
                    correo electrónico y su número de celular para efectuar la compra. Una vez un cliente
                    procede a la compra de su producto, como es debido, su sistema debe saber que se creó
                    una nueva orden de pedido, asignarle su código único para identificarla y saber si esta se
                    encuentra pendiente de pago o si ya se ha realizado un pago para poder “despacharla”.
                </p>
                <p>Su tienda tiene la siguiente base de datos para almacenar la información</p>
                <img src="../public/images/bd.png" alt="">
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6">
                <h3>Requerimientos</h3>
                <p>Cree una tienda con la migración de la base de datos presentada en el escenario y las
                    modificaciones adicionales necesarias para poder realizar el flujo especificado
                    La tienda debe contener las siguientes vistas</p>
                <ol>
                    <li>Una donde el cliente proporcione los datos necesarios para generar una nueva
                        orden</li>
                    <li>
                        Una donde se presente un resumen de la orden y se permita proceder a pagar
                    </li>
                    <li>
                        Una donde el cliente pueda ver el estado de su orden, si está pagada muestre el
                        mensaje de que está pagada, de lo contrario, un botón que permita reintentarlo
                        debe estar presente
                    </li>
                    <li>
                        Una donde se pueda ver el listado de todas las órdenes que tiene la tienda
                    </li>
                </ol>

                <h3>Parámetros de evaluación</h3>
                <h4>De la prueba se evaluarán los siguientes items</h4>

                <ul>
                    <li>
                        Buen manejo de control de versiones (Git)
                    </li>
                    <li>
                        Uso de estándares de programación PSR
                    </li>
                    <li>
                        Uso de mejores prácticas de codificación
                    </li>
                    <li>
                        Pruebas unitarias
                    </li>
                    <li>
                        Manejo de variables de entorno
                    </li>
                </ul>

            </div>
        </div>

    </div>
</div>