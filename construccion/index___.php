<?php 

include("../conectar.php");

?>

<html>

<head>

  <title>Codeka Mx - Gestion de Ventas entorno Web</title>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <script language="JavaScript" src="menu/JSCookMenu.js"></script>

  <link rel="stylesheet" href="menu/theme.css" type="text/css">

  <script language="JavaScript" src="menu/theme.js"></script>

  <script language="JavaScript">

  

  

<!--

var MenuPrincipal = [

	[null,'Inicio','central2.php','principal','Inicio'],

	[null,'Inter. Comerciales',null,null,'Ventas clientes',

		[null,'Proveedores','./proveedores/index.php','principal','Proveedores'],

		[null,'Clientes','./clientes/index.php','principal','Clientes']

	],

	[null,'Productos',null,null,'Productos',

		[null,'Articulos','./articulos/index.php','principal','Articulos'],

		[null,'Familias','./familias/index.php','principal','Familias']

	],

	[null,'Ventas clientes',null,null,'Ventas clientes',

		[null,'Ventas Mostrador','./ventas_mostrador/index.php','principal','Ventas Mostrador'],

		[null,'Facturas de Ventas','./facturas_clientes/index.php','principal','Facturas'],

		[null,'Ordenes de salida','./albaranes_clientes/index.php','principal','Guia despacho'],

		[null,'Facturar Guia despacho ventas','./lote_albaranes_clientes/index.php','principal','Facturar Guia despacho']

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

		[null,'Libro Diario','./librodiario/index.php','principal','Libro Diario']

	],

	[null,'Mantenimientos',null,null,'Mantenimientos',

		[null,'Etiquetas','./etiquetas/index.php','principal','Etiquetas'],

		[null,'Impuestos','./impuestos/index.php','principal','Impuestos'],

		[null,'Entidades bancarias','./entidades/index.php','principal','Entidades bancarias'],

		[null,'Ubicaciones','./ubicaciones/index.php','principal','Ubicaciones'],

		[null,'Embalajes','./embalajes/index.php','principal','Embalajes'],

		[null,'Formas de pago','./formaspago/index.php','principal','Formas de pago'],

		[null,'Parametros del Sistema','./parametros/parametros.php','principal','Parámetros del Sistema'],

	],

	[null,'Copias Seguridad',null,null,'Copias de Seguridad',

		[null,'Hacer copia','./backup/hacerbak.php','principal','Hacer copia'],

		[null,'Restaurar copia','./backup/restaurarbak.php','principal','Restaurar copia'],

	],
        [null,'Ayuda',null,null,'Ayuda',		

				[null,'Manual Conexion terminal remoto','./servidor_remoto/manual_rem.php','principal','Manual en Linea'],
				
				[null,'Manual MaxCodeKa ( en preparacion ) ','./manual_maxcodeka/index.htm','principal','Manual MaxCodeKa'],

				[null,'Acerca de ....','./creditos.php','principal','Acerca de ....']

],	
];



--></script>

  <style type="text/css">

  body { background-color: rgb(255, 255,255);

    background-image: url(images/superior.png);

    background-repeat: no-repeat;

	margin: 0px;

    }



  #MenuAplicacion { margin-left: 10px;

    margin-top: 0px;

    }





  </style>

</head>

<body>

<div id="MenuAplicacion" align="center">

</div>



<script language="JavaScript">

<!--





	cmDraw ('MenuAplicacion', MenuPrincipal, 'hbr', cmThemeGray, 'ThemeGray');

-->

</script>

<iframe src="central2.php" name="principal" title="principal" width="100%" height="1050px" frameborder=0 scrolling="no" style="margin-left: 0px; margin-right: 0px; margin-top: 2px; margin-bottom: 0px;"></iframe>

</body>

</html>

