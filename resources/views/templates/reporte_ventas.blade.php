<!DOCTYPE HTML>
<html>
<head>
	<title>Reporte de Ventas </title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />

</head>

<style>
	.card {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		transition: 0.3s;

		border-radius: 5px;
		text-align: center;
	}

	.card:hover {
		box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
	}

	img {
		border-radius: 5px 5px 0 0;
	}

	.container {
		padding: 2px 16px;
    }
    table th{
        background-color: #337ab7 !important;
        color: white;

    }

    table>tbody>tr>td{
        vertical-align: middle !important;
    }

    .btn-group, .btn-group-vertical{
        position: absolute !important;
    }
</style>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

				@include ('layouts.header')

 <!-- <meta charset="uf-8"> -->
	<meta name="viewport" content="with=dev-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="#">

		<title>Reporte de ventas </title>
		<br>
				<!-- Bostrap css -->
		<link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
	
<!-- data tables css basico -->
<link rel="stylesheet" type="text/css" href="datatables/datatables.min.css" />
<!-- datatablesestiloboostrap 4 css  -->
<link rel="stylesheet" type="text/css" href="datatables/DataTables-1.10.18/css/datatables.bootstrap4.min.css">
<!-- font awesome con cdn  -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" 
integrity="sha384-oS3vJWV+0UjzBFQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<!-- <script src="https://kit.fontawesome.com/e7271ede2b.js" crossorigin="anonymous"></script> -->

</head>
	<body >
		<head>
			<h1 class="text-center text-light">Reporte de Ventas  </h1>
		</head>
<br>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css"></script>
<script type="text/javascript" src="js/main.js"></script>



<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				
			<table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
            <th>Articulo</th>
                <th>id_venta</th>
                <th>cliente id</th>
                <th>Numero de piezas</th>
                <th>Precio unitario</th>
                <th>Monto total</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Anillo chapa de oro </td>
                <td>1</td>
                <td>100</td>
                <td>2</td>
                <td>$60</td>
                <td>$120</td>
                <td>2022/04/25</td>
               
            </tr>
            <tr>
            <td>Pulsera  de oro </td>
                <td>5</td>
                <td>150</td>
                <td>1</td>
                <td>$1000</td>
                <td>$1000</td>
                <td>2022/04/25</td>
               
            </tr>
            <tr>
            <td>Anillo de oro blanco</td>
                <td>130</td>
                <td>560</td>
                <td>8</td>
                <td>$100</td>
                <td>$8000</td>
                <td>2022/04/25</td>
               
            </tr>
            <tr>
            <td>Anillo de oro  </td>
                <td>239</td>
                <td>23424</td>
                <td>10</td>
                <td>$120</td>
                <td>$1200</td>
                <td>2022/04/25</td>
               
            </tr>
            <tr>
            <td>Collar escarlata </td>
                <td>53415</td>
                <td>65534</td>
                <td>3</td>
                <td>$456</td>
                <td>$1368</td>
                <td>20122/04/25</td>

               
            </tr><tr>
            <td>Espada</td>
                <td>534231</td>
                <td>75360</td>
                <td>345</td>
                <td>$60</td>
                <td>$20700</td>
                <td>2022/04/25</td>
               
            </tr><tr>
            <td>Gargantilla de Rubis</td>
                <td>6752</td>
                <td>143</td>
                <td>700</td>
                <td>$150</td>
                <td>$105000</td>
                <td>2022/04/25</td>
               
            </tr>
            <tr>
            <td>Anubis</td>
                <td>1</td>
                <td>100</td>
                <td>2</td>
                <td>$60</td>
                <td>$120</td>
                <td>2022/04/25</td>
               
            </tr>
            <tr>
            <td>Anubis libris</td>
                <td>1453</td>
                <td>10054</td>
                <td>2544</td>
                <td>$4520</td>
                <td>$1,149,888</td>
                <td>2022/04/25</td>
               
            </tr>
        </tfoot>
    </table>

			</div>

		</div>

	</div>

</div>



	</body>
   
</html>

