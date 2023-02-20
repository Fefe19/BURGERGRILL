<?php
include 'modelo/productDao.php';

$entrantes = productDao::getAllByType('1');
$hamburguesas = productDao::getAllByType('2');
$postres = productDao::getAllByType('3');
$bebidas = productDao::getAllByType('4');
 

/*
include 'entrante.php';
include 'hamburguesa.php';
include 'postre.php';
include 'bebida.php';

$LlistaEn = array(new Entrante(0,'NACHOS DE CARNE Y CHILI',4.90,'img/NACHOSH.png'),
                    new Entrante(1,'PATATAS BRAVAS',3.90,'img/BRAVAS.png'),
                    new Entrante(2,'AROS DE CEBOLLA',3.90,'img/AROS.png'),
                    new Entrante(3,'TEQUES DE QUESO',5.90,'img/TEQUES.png'),
                    new Entrante(4,'PATATAS FRITAS',2.90,'img/FRITAS.png'),
                    new Entrante(5,'TIRAS DE POLLO',5.90,'img/POLLO.png'),
                );

$LlistaHamb = array(new Hamburguesa(0,'HAMBURGUESA YANKEE',10.90,'img/YANKEE.png'),
                    new Hamburguesa(1,'HAMBURGUESA PIGMA',12.90,'img/PIGMA.png'),
                    new Hamburguesa(2,'HAMBURGUESA KEVIN CHICK',14.90,'img/KEVIN.png'),
                    new Hamburguesa(3,'HAMBURGUESA KEVIN BACON',13.90,'img/KEVINB.png'),
                    new Hamburguesa(4,'HAMBURGUESA BOMBA SEXY',11.90,'img/BOMBA.png'),
                    new Hamburguesa(5,'HAMBURGUESA LA KIKI',11.90,'img/KIKI.png'),
                    new Hamburguesa(6,'HAMBURGUESA CHIPOTLE',13.90,'img/CHIPOTLE.png'),
                    new Hamburguesa(7,'HAMBURGUESA M-30',12.90,'img/M30.png'),
            );

$LlistaPo = array(new Postre(0,'TARTA DE QUESO',4.50,'img/TARTA.png'),
                    new Postre(1,'HELADO DE OREO',3.50,'img/OREO.png'),
                    new Postre(2,'GOFRE CON HELADO',4.20,'img/GOFRE.png'),
            );

$LlistaBe = array(new Bebida(0,'CERVEZA DE JARRA',2.50,'img/JARRA.png'),
                    new Bebida(1,'COCA-COLA',1.80,'img/COLA.png'),
                    new Bebida(2,'LIMONADA',3.20,'img/LIMONADA.png'),
            );

            */
?>