<?php 
    /*  
  
        Este es un programa desarrollado bajo el concepto de Software Libre y Uds.,
	pueden modificarlo y redistribuirlo bajo los terminos de la GNU General 
	Public License como ha sido publicado por Free Software Foundation;
	ya sea bajo la Licencia version 2 o cualquier Licencia posterior.

    	
	Autores: Francisco Terrones Ramos
			 
	
	Fecha Liberaci�n del c�digo: 15/08/2013
		
	
	Este codigo ha sido modificado parcialmente por
	
	visita: conectateperu.blogspot.com
	
	*/
header ("Expires: Thu, 27 Mar 1980 23:59:00 GMT"); //la pagina expira en una fecha pasada
header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); //ultima actualizacion ahora cuando la cargamos
header ("Cache-Control: no-cache, must-revalidate"); //no guardar en CACHE
header ("Pragma: no-cache");

include("conectar.php");

include_once("./popupmsg/popup.class.php");

// Normal Usage  , with time out.

$HeadlineStyleArr["text-align"] = "left";
$HeadlineStyleArr["color"] = "purple"; 
$HeadlineStyleArr["background-color"] = "silver";
$HeadlineStyleArr["font-style"] = "italic";
$HeadlineStyleArr["font-family"] = "arial, sans-serif";
$MessageStyleArr["border"] = "black 8px solid";
$MessageStyleArr["filter"] =  "alpha(opacity=80)"; // IE
$MessageStyleArr["moz-opacity"] = 0.8;  //FF
$MessageStyleArr["opacity"] = 0.8;    // FF

$TextStyleArr["text-align"] = "center";
$TextStyleArr["color"] = "silver"; 
$TextStyleArr["background-color"] = "purple";
$TextStyleArr["font-weight"] = "bold";
$TextStyleArr["font-family"] = "arial, sans-serif";
?>

<link href="styles.css" rel="stylesheet" type="text/css">

<?php
session_start();

if (!isset($_SESSION['user']))
{
 die ("Access Denied");
}

if (!isset($_SESSION['rol']))
{
 die ("Access Denied No tiene rol");
}


?>

 
<!--<h2>Mi Cuenta</h2>-->
 


<html>
<?php  
if ($_SESSION['rol']==1)
{
?>  

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link href="img/logo.ico" rel="shortcut icon">
  <title>Sistema Ventas</title>

  <script language="JavaScript" src="menu/JSCookMenu.js"></script>
  <link rel="stylesheet" href="menu/theme.css" type="text/css">
  <script language="JavaScript" src="menu/theme.js"></script>
  <script language="JavaScript">
//inicio MENU ADMINISTRADOR

var MenuPrincipal = [
	[null,'Inicio',null,null,'Inicio',
		//[null,'Reloj','./reloj/ureloj.php','principal','Reloj'],
		//[null,'Calculadora','./calculadora/ucalculadora.php','principal','Calculadora'],
		//_cmSplit,
		//[null,'Salir','./salir.php','principal','Salir']
	],
	[null,'Inter. Comerciales',null,null,'Ventas clientes',
		[null,'Proveedores','./proveedores/index.php','principal','Proveedores'],
		[null,'Clientes','./clientes/index.php','principal','Clientes']
	],
	[null,'Productos',null,null,'Productos',
		[null,'Articulos','./articulos/index.php','principal','Articulos'],
		[null,'Familias','./familias/index.php','principal','Familias']
	],
	[null,'Ventas clientes',null,null,'Ventas clientes',
		[null,'Ventas Facturas','./ventas_facturas/index.php','principal','Ventas Mostrador'],
		[null,'Ventas Boletas','./ventas_boletas/index.php','principal','Ventas Mostrador'],
		[null,'Facturas de Ventas','./facturas_clientes/index.php','principal','Facturas'],
		[null,'Boleta de Ventas','./boletas_clientes/index.php','principal','Facturas']
		//[null,'Ordenes de salida','./albaranes_clientes/index.php','principal','Guia despacho'],
		//[null,'Facturar Guia despacho ventas','./lote_albaranes_clientes/index.php','principal','Facturar Guia despacho']
	],
	[null,'Compras proveedores',null,null,'Compras proveedores',
		[null,'Facturas de Compras','./facturas_proveedores/index.php','principal','Proveedores'],
		[null,'Recepcion de mercancia','./albaranes_proveedores/index.php','principal','Guia despacho'],
		[null,'Facturar Guia despacho a proveedores','./lote_albaranes_proveedores/index.php','principal','Facturar Guia despacho']
	],
	[null,'Tesoreria',null,null,'Tesoreria',
	    [null,'Cobros','./cobros/index.php','principal','Cobros'],
		[null,'Pagos','./pagos/index.php','principal','Pagos'],
		[null,'Caja Diaria','./cerrarcaja/index.php','principal','Caja Diaria'],
		[null,'Libro Diario','./librodiario/index.php','principal','Libro Diario'],
		_cmSplit,
		[null,'Reportes',null,null,'Reportes',
			[null,'Costo Articulos en Stock','./fpdf/imprimir_articulos_costo.php','principal','Costo Articulos en Stock'],
	    	[null,'Productos Stock negativo','./fpdf/imprimir_stocks_negativo.php','principal','Productos Stocks negativos'],
		    [null,'Precios Netos Tienda','./fpdf/imprimir_articulos_venta.php','principal','Precios Netos Tienda'],
			[null,'Articulos Proveedor','./fpdf/imprimir_articulos_proveedor.php','principal','Articulos Proveedor']
			
			
	]	
	],
	[null,'Mantenimientos',null,null,'Mantenimientos',
		[null,'Etiquetas','./etiquetas/index.php','principal','Etiquetas'],
		[null,'Optimizar el sistema','./optimizar/index.php','principal','Optimizar el sistema'],
		[null,'Parametros del Sistema','./parametros/parametros.php','principal','Par�metros del Sistema'],
		_cmSplit,
		[null,'Tablas',null,null,'Tablas',
			[null,'Impuestos','./impuestos/index.php','principal','Impuestos'],
	    	[null,'Entidades bancarias','./entidades/index.php','principal','Entidades bancarias'],
		    [null,'Ubicaciones','./ubicaciones/index.php','principal','Ubicaciones'],
		    [null,'Embalajes','./embalajes/index.php','principal','Embalajes'],
			[null,'Provincias','./provincias/index.php','principal','Provincias'],
			[null,'Vendedores','./vendedores/index.php','principal','Vendedores'],
			[null,'Cobradores','./cobradores/index.php','principal','Cobradores'],
		    [null,'Formas de pago','./formaspago/index.php','principal','Formas de pago']
	]
	],
	//[null,'Copias Seguridad',null,null,'Copias de Seguridad',
		//[null,'Hacer copia','./backup/hacerbak.php','principal','Hacer copia'],
		//[null,'Restaurar copia','./backup/restaurarbak.php','principal','Restaurar copia']
	//],
	//Registrar Usuario
	[null,'Registrar Usuario',null,null,'Registrar Usuario',
		[null,'Agregar Usuario','./register.php','principal','Hacer copia']
		
	],
	
];




//FIN MENU ADMINISTRADOR
</script>
<?php
}
 ?>
<?php  
if ($_SESSION['rol']==2)
{
?>  

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link href="img/logo.ico" rel="shortcut icon">
  <title>Sistema Ventas</title>

  <script language="JavaScript" src="menu/JSCookMenu.js"></script>
  <link rel="stylesheet" href="menu/theme.css" type="text/css">
  <script language="JavaScript" src="menu/theme.js"></script>
  <script language="JavaScript">
//inicio MENU VENTAS

var MenuPrincipal = [
	[null,'Inicio',null,null,'Inicio',
		//[null,'Reloj','./reloj/ureloj.php','principal','Reloj'],
		//[null,'Calculadora','./calculadora/ucalculadora.php','principal','Calculadora'],
		//_cmSplit,
		//[null,'Salir','./salir.php','principal','Salir']
	],
	[null,'Inter. Comerciales',null,null,'Ventas clientes',
		//[null,'Proveedores','./proveedores/index.php','principal','Proveedores'],
		[null,'Clientes','./clientes/index.php','principal','Clientes']
	],
	[null,'Productos',null,null,'Productos',
	//	[null,'Articulos','./articulos/index.php','principal','Articulos'],
	//	[null,'Familias','./familias/index.php','principal','Familias']
	],
	[null,'Ventas clientes',null,null,'Ventas clientes',
		[null,'Ventas Facturas','./ventas_facturas/index.php','principal','Ventas Mostrador'],
		[null,'Ventas Boletas','./ventas_boletas/index.php','principal','Ventas Mostrador']
		//[null,'Facturas de Ventas','./facturas_clientes/index.php','principal','Facturas'],
		//[null,'Boleta de Ventas','./boletas_clientes/index.php','principal','Facturas'],
		//[null,'Ordenes de salida','./albaranes_clientes/index.php','principal','Guia despacho'],
		//[null,'Facturar Guia despacho ventas','./lote_albaranes_clientes/index.php','principal','Facturar Guia despacho']
	],
	[null,'Compras proveedores',null,null,'Compras proveedores',
		//[null,'Facturas de Compras','./facturas_proveedores/index.php','principal','Proveedores'],
		//[null,'Recepcion de mercancia','./albaranes_proveedores/index.php','principal','Guia despacho'],
		//[null,'Facturar Guia despacho a proveedores','./lote_albaranes_proveedores/index.php','principal','Facturar Guia despacho']
	],
	[null,'Tesoreria',null,null,'Tesoreria',
	    //[null,'Cobros','./cobros/index.php','principal','Cobros'],
		//[null,'Pagos','./pagos/index.php','principal','Pagos'],
		//[null,'Caja Diaria','./cerrarcaja/index.php','principal','Caja Diaria'],
		//[null,'Libro Diario','./librodiario/index.php','principal','Libro Diario'],
		//_cmSplit,
		//[null,'Reportes',null,null,'Reportes',
			//[null,'Costo Articulos en Stock','./fpdf/imprimir_articulos_costo.php','principal','Costo Articulos en Stock'],
	    	//[null,'Productos Stock negativo','./fpdf/imprimir_stocks_negativo.php','principal','Productos Stocks negativos'],
		    //[null,'Precios Netos Tienda','./fpdf/imprimir_articulos_venta.php','principal','Precios Netos Tienda'],
			//[null,'Articulos Proveedor','./fpdf/imprimir_articulos_proveedor.php','principal','Articulos Proveedor']
			
			
	//]	
	],
	[null,'Mantenimientos',null,null,'Mantenimientos',
		//[null,'Etiquetas','./etiquetas/index.php','principal','Etiquetas'],
		//[null,'Optimizar el sistema','./optimizar/index.php','principal','Optimizar el sistema'],
		//[null,'Parametros del Sistema','./parametros/parametros.php','principal','Par�metros del Sistema'],
		//_cmSplit,
		//[null,'Tablas',null,null,'Tablas',
		//	[null,'Impuestos','./impuestos/index.php','principal','Impuestos'],
	    //	[null,'Entidades bancarias','./entidades/index.php','principal','Entidades bancarias'],
		//    [null,'Ubicaciones','./ubicaciones/index.php','principal','Ubicaciones'],
		//    [null,'Embalajes','./embalajes/index.php','principal','Embalajes'],
		//	[null,'Provincias','./provincias/index.php','principal','Provincias'],
		//	[null,'Vendedores','./vendedores/index.php','principal','Vendedores'],
		//	[null,'Cobradores','./cobradores/index.php','principal','Cobradores'],
		//    [null,'Formas de pago','./formaspago/index.php','principal','Formas de pago']
	//]
	],
	[null,'Agregar Usuario',null,null,'Agregar Usuario',
		//[null,'Hacer copia','./backup/hacerbak.php','principal','Hacer copia'],
		//[null,'Restaurar copia','./backup/restaurarbak.php','principal','Restaurar copia']
	],
	
];




//FIN MENU VENTAS
</script>
<?php
}
 ?>


  <style type="text/css">
  body {
	font:Arial;
  	background-color: rgb(255, 255,255);
    background-image: url(images/superior.png);
    background-repeat: no-repeat;
	margin: 0px;
    }



  #MenuAplicacion { 
  	margin-left: 10px;
    margin-top: 0px;
    }
  </style>

</head>

<body>
<br>

<div id="caja6" align="left" >

<table  width="9%" height="12" border="0" align="left" cellpadding="0" cellspacing="0">
	<!--<tr> 
			<td height="10" valign="top" class="mnuheader" colspan="3">
				<div id="caja6" align="center" ><font size="3" color="white"><strong>Mi Cuenta</strong></font></div>
			</td>
	</tr> -->
  	<tr> 
			<td  class="mnuheader" >
				<div id="caja5" align="center" ><font size="2" color="white"><strong><?php echo $_SESSION['user']; ?></strong></font></div>
			</td>
			<!--<td  class="mnuheader" >
				<div id="caja5" align="center" ><font size="2" color="white"><strong><a href="settings.php" style="color:#FFFFFF">Config</a></strong></font></div>
			</td>-->
			<td  class="mnuheader" >
				<div id="caja5" align="center" ><font size="2" color="white"><strong><a href="logout.php" style="color:#FFFFFF"><?php echo "salir"; ?></a></strong></font></div>
			</td>
	</tr>	
<!-- Inicio img Admin -->	
<?php  
if ($_SESSION['rol']==1)
{
?>   	
</table>
</div>
<div align="center">
<table border=0 WIDTH=820 HEIGHT=100 CELLPADDING=0 CELLSPACING=2 ALIGN=CENTER>
<tr>
<td WIDTH=60 ALIGN=CENTER VALIGN=BOTTOM>

<img src="img/menu/home.png" alt="MaxCode" width="63" height="68" border="0" longdesc="Facturaci�n Web" style="margin:6px 0 0 0;">

</td>

<td WIDTH=105 ALIGN=CENTER VALIGN=BOTTOM>
<img src="img/menu/people.png" alt="MaxCode" width="80" height="72" border="0" longdesc="Facturaci�n Web" style="margin:6px 0 0 0;">
</td>

<td WIDTH=65 ALIGN=CENTER VALIGN=BOTTOM>
<img src="img/menu/producto.png" alt="MaxCode" width="65" height="70" border="0" longdesc="Facturaci�n Web" style="margin:6px 0 0 0;">
</td>

<td WIDTH=100 ALIGN=CENTER VALIGN=BOTTOM>
<img src="img/menu/pago1.png" alt="MaxCode" width="85" height="82" border="0" longdesc="Facturaci�n Web" style="margin:6px 0 0 0;">
</td>

<td WIDTH=120 ALIGN=CENTER VALIGN=BOTTOM>
<img src="img/menu/proveedor.png" alt="MaxCode" width="75" height="75" border="0" longdesc="Facturaci�n Web" style="margin:6px 0 0 0;">
</td>

<td WIDTH=70 ALIGN=CENTER VALIGN=BOTTOM>
<img src="img/menu/money.png" alt="MaxCode" width="80" height="70" border="0" longdesc="Facturaci�n Web" style="margin:6px 0 0 0;">
</td>

<td WIDTH=100 ALIGN=CENTER VALIGN=BOTTOM>
<img src="img/menu/tools.png" alt="MaxCode" width="70" height="67" border="0" longdesc="Facturaci�n Web" style="margin:6px 0 0 0;">
</td>

<td WIDTH=100 ALIGN=CENTER VALIGN=BOTTOM>
<img src="img/menu/usuario.png" alt="MaxCode" width="85" height="90" border="0" longdesc="Facturaci�n Web" style="margin:6px 0 0 0;">
</td>

</tr>
</table>
<?php  
}
?> 
<!-- FIN IMG ADMIN -->
<!--INICIO IMG VENTAS-->
<?php  
if ($_SESSION['rol']==2)
{
?>   	
</table>
</div>
<div align="center">
<table border=0 WIDTH=820 HEIGHT=100 CELLPADDING=0 CELLSPACING=2 ALIGN=CENTER>
<tr>
<td WIDTH=60 ALIGN=CENTER VALIGN=BOTTOM>

<img src="img/menu/home.png" alt="MaxCode" width="63" height="68" border="0" longdesc="Facturaci�n Web" style="margin:6px 0 0 0;">

</td>

<td WIDTH=105 ALIGN=CENTER VALIGN=BOTTOM>
<img src="img/menu/people.png" alt="MaxCode" width="80" height="72" border="0" longdesc="Facturaci�n Web" style="margin:6px 0 0 0;">
</td>

<td WIDTH=65 ALIGN=CENTER VALIGN=BOTTOM>
<img src="img/menu/producto.png" alt="MaxCode" width="65" height="70" border="0" longdesc="Facturaci�n Web" style="margin:6px 0 0 0;">
</td>

<td WIDTH=100 ALIGN=CENTER VALIGN=BOTTOM>
<img src="img/menu/car1.png" alt="MaxCode" width="80" height="77" border="0" longdesc="Facturaci�n Web" style="margin:6px 0 0 0;">
</td>

<td WIDTH=120 ALIGN=CENTER VALIGN=BOTTOM>
<img src="img/menu/proveedor.png" alt="MaxCode" width="75" height="75" border="0" longdesc="Facturaci�n Web" style="margin:6px 0 0 0;">
</td>

<td WIDTH=70 ALIGN=CENTER VALIGN=BOTTOM>
<img src="img/menu/money.png" alt="MaxCode" width="80" height="70" border="0" longdesc="Facturaci�n Web" style="margin:6px 0 0 0;">
</td>

<td WIDTH=100 ALIGN=CENTER VALIGN=BOTTOM>
<img src="img/menu/tools.png" alt="MaxCode" width="70" height="67" border="0" longdesc="Facturaci�n Web" style="margin:6px 0 0 0;">
</td>

<td WIDTH=100 ALIGN=CENTER VALIGN=BOTTOM>
<img src="img/menu/usuario.png" alt="MaxCode" width="85" height="90" border="0" longdesc="Facturaci�n Web" style="margin:6px 0 0 0;">
</td>

</tr>
</table>
<?php  
}
?> 
<!-- FIN IMG VENTAS -->
<div id="MenuAplicacion" align="center"></div>
	
	<div align="center">
		
	<div id="MenuAplicacion" align="center"></div>

<script language="JavaScript">


	cmDraw ('MenuAplicacion', MenuPrincipal, 'hbr', cmThemeGray, 'ThemeGray');


</script>

	<iframe src="central2.php" name="principal" title="principal" width="100%" height="1050px" frameborder=0 scrolling="no" style="margin-left: 0px; margin-right: 0px; margin-top: 2px; margin-bottom: 0px;"></iframe>

</body>

</html>

