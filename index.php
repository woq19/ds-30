<?php

require_once 'modelo/cliente.php';
require_once 'modelo/datospersona.php';
require_once 'modelo/lineadeventa.php';
require_once 'modelo/producto.php';
require_once 'modelo/proveedor.php';
require_once 'modelo/venta.php';

$c = new Cliente;
$c->Id=1;
$c->Codigo=12;
$c->Nombre='Walter';
$c->Apellido='Quintana';
$c->Documento=39564520;
$c->Direccion='rioja 1177';
$c->Telefono=3416355066;
$c->Mail='qweqweqweqw@asdasda.com';

$pr = new Proveedor;
$pr->Id=2;
$pr->Codigo=2;
$pr->Rsocial='Elevar';
$pr->Cuit='125-5445455-45';
$pr->Direccion='callao 4020';
$pr->Telefono=3416916524;
$pr->Mail='sdasd@asdasd.com';

$p=new Producto;
$p->Id=3;
$p->Descripcion='sdasda';
$p->Codigo=1212524565;
$p->Precioventa='$400.00';
$p->Preciocompra='$200.00';
$p->Proveedor=$pr;

$lv=new Lineaventa;
$lv->Id=4;
$lv->Numerolinea=4;
$lv->Producto=$p;
$lv->Subtotal='$500.00';
$lv->Cantidad=6;
