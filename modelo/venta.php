<?php
class Venta{
    public $Id;
    public $Fecha;
    public $Montototal;
    public $Observaciones;

    public function MostrarDatos(){
        echo 'Datos de venta:'.'<br>';
        echo 'Id: '.$this->Id.'<br>';
        echo 'Fecha: '.$this->Fecha.'<br>';
        echo 'Monto total: '.$this->Montototal.'<br>';
        echo 'Observaciones: '.$this->Observaciones.'<br>';
        echo 'Datos del cliente:'.'<br>';
        echo 'Id: '.$this->Cliente->Id.'<br>';
        echo 'Codigo: '.$this->Cliente->Codigo.'<br>';
        echo 'Nombre: '.$this->Cliente->Nombre.'<br>';
        echo 'Apellido: '.$this->Cliente->Apellido.'<br>';
        echo 'Documento: '.$this->Cliente->Documento.'<br>';
        echo 'Direccion: '.$this->Cliente->Direccion.'<br>';
        echo 'Telefono: '.$this->Cliente->Telefono.'<br>';
        echo 'Mail: '.$this->Cliente->Mail.'<br>';
        echo 'Datos linea de venta: '.'<br>';
        echo 'Id: '.$this->Lineaventa->Id.'<br>';
        echo 'Numero: '.$this->Lineaventa->Numerolinea.'<br>';
        echo 'Subtotal: '.$this->Lineaventa->Subtotal.'<br>';
        echo 'Cantidad: '.$this->Lineaventa->Cantidad.'<br>';
        echo 'Datos del producto'.'<br>';
        echo 'Id: '.$this->Lineaventa->Producto->Id.'<br>';
        echo 'Descripcion: '.$this->Lineaventa->Producto->Descripcion.'<br>';
        echo 'Codigo: '.$this->Lineaventa->Producto->Codigo.'<br>';
        echo 'precio de venta: '.$this->Lineaventa->Producto->precioventa.'<br>';
        echo 'precio de compra: '.$this->Lineaventa->Producto->Preciocompra.'<br>';
        echo 'Datos del proveedor'.'<br>';
        echo 'Id : '.$this->Lineaventa->Producto->Proveedor->Id.'<br>';
        echo 'Codigo: '.$this->Lineaventa->Producto->Proveedor->Codigo.'<br>';
        echo 'Razon Social: '.$this->Lineaventa->Producto->Proveedor->Rsocial.'<br>';
        echo 'Cuit: '.$this->Lineaventa->Producto->Proveedor->Cuit.'<br>';
        echo 'Direccion: '.$this->Lineaventa->Producto->Proveedor->Direccion.'<br>';
        echo 'Telefono: '.$this->Lineaventa->Producto->Proveedor->Telefono.'<br>';
        echo 'Mail: '.$this->Lineaventa->Producto->Proveedor->Mail.'<br>'; 
    }
}