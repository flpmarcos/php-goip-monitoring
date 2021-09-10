<?php 
	include("controller/getChip.php");
	
	$BDchipeira = new BDchipeira();
	$chips = $BDchipeira->consultaChipeira();
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Chipeira</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="assets/css/loading.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		
	</head>
		
	<body class="no-skin branc">
		<div class="container">
			<div class="row">
				<div id="loader">
		    		<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="lading"></div>
				</div>
			</div>
		</div>
		
		<div id="tudo" >
		<div id="navbar" class="navbar navbar-default          ace-save-state" style="background-color: #8A2BE2 !important;">
			<div class="navbar-container ace-save-state" id="navbar-container" style="background-color: #8A2BE2 !important;">
				<button type="button" class="navbar-toggle menu-toggler pull-left hide" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>
				
				<div class="navbar-header pull-left">
					<a id="inicio" href="{{=URL('default','index')}}" class="navbar-brand">
						<small>
							<i class="fa fa-commenting-o"></i>
							Chipeira
						</small>
					</a>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
			
					
			<div class="main-content">
				<!-- GRID -->
						<div class="panel panel-primary" style=" border-color: #8a2be2 !important;">
				         		<div id="historicoChips" class="panel-body">
				         				<div class="col-md-12">
											<button id="refresh-startQueue" class="fa fa-play btn btn-md btn-default  pull-left" onclick="startQueue()">  Iniciar</button>
											<button id="refresh-stopQueue" class="fa fa-pause btn btn-md btn-default hide  pull-left" onclick="stopQueue()">  Parar</button>
										</div>
				
				         				
				         				<table id="table-chip"
											class="table table-striped table-bordered table-hover">
										  <thead>
										    <tr>
										      <th>Nome</th>
										      <th>Numero</th>
										      <th>GSM Status</th>
										      <th>Voip Status</th>
										      <th>Chip Status</th>
										      <th>IMEI</th>
										      <th>IMSI</th>
										      <th>OPERADORA</th>
										      <th>SINAL</th>
										      
										    </tr>
										  </thead>
										  <tbody id="retorno-chip">
										    
										
					         			<?php 
					         			
					         				foreach ($chips as $chip){
						         		
						         				echo "<tr><th scope='row'>"
						         					. $chip['name'] .
						         					 "</th><th>"
						         					 .$chip['num'].
						         					 "</th><th>"
						         					 .$chip['gsm_status'].
						         					 "</th><th>"
						         					 .$chip['voip_status'].
						         					 "</th><th>"
						         					 .$chip['voip_state'].
						         					 "</th><th>"
						         					 .$chip['imei'].
						         					 "</th><th>"
						         					 .$chip['imsi'].
						         					 "</th><th>"
						         					 .$chip['carrier'].
						         					 "</th><th>"
						         					 .$chip['signal'].
						         					 "</th></tr>";
					         				}
					         			?>
					         			</tbody>
									</table>
				         		</div>
				    		</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Tecnologika Soluções</span>
							 &copy; 2017
						</span>
						&nbsp; &nbsp;
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/jquery.sparkline.index.min.js"></script>
		<script src="assets/js/jquery.flot.min.js"></script>
		<script src="assets/js/jquery.flot.pie.min.js"></script>
		<script src="assets/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="assets/js/dataTables.buttons.min.js"></script>
		<script src="assets/js/buttons.flash.min.js"></script>
		<script src="assets/js/buttons.html5.min.js"></script>
		<script src="assets/js/buttons.print.min.js"></script>
		<script src="assets/js/buttons.colVis.min.js"></script>
		<script src="assets/js/dataTables.select.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		
		<script>

		function chipTable() {

			chipENV = $('#table-chip')
					.DataTable(
							{

								language : {
									"sEmptyTable" : "Nenhum registro encontrado",
									"sInfo" : "Mostrando de _START_ até _END_ de _TOTAL_ registros",
									"sInfoEmpty" : "Mostrando 0 até 0 de 0 registros",
									"sInfoFiltered" : "(Filtrados de _MAX_ registros)",
									"sInfoPostFix" : "",
									"sInfoThousands" : ".",
									"sLengthMenu" : "_MENU_ resultados por página",
									"sLoadingRecords" : "Carregando...",
									"sProcessing" : "Processando...",
									"sZeroRecords" : "Nenhum registro encontrado",
									"sSearch" : "Pesquisar",
									"oPaginate" : {
										"sNext" : "Próximo",
										"sPrevious" : "Anterior",
										"sFirst" : "Primeiro",
										"sLast" : "Último"
									},
									"oAria" : {
										"sSortAscending" : ": Ordenar colunas de forma ascendente",
										"sSortDescending" : ": Ordenar colunas de forma descendente"
									}
								},
								dom : 'Bfrtpl',
								buttons : [  ]
							});

		}

		
		function reload(){
			$('#loader').removeClass('hide');
			$('#tudo').addClass('hide');
			location.reload();
		}



	   	
    	function startQueue(){
			
    			$('#refresh-startQueue').addClass('hide');
	    		$('#refresh-stopQueue').removeClass('hide');
	    		
	    		intervalQueue = setInterval("reload();",10000);
	    
    	};
    	
    	
    	
    	function stopQueue(){
    		
    		
    		    $('#refresh-stopQueue').addClass('hide');
    			$('#refresh-startQueue').removeClass('hide');
    		
    			clearInterval(intervalQueue);
    	
    	}
	
			
		
		</script>
		<script>

		//setInterval(function(){ reload();   }, 10000);
		
		$(document).ready(function() {
			chipTable();
			$('#loader').addClass('hide');
			$('#tudo').removeClass('hide');
			startQueue();
		});


	
		
		</script>
		</div>
	</body>
</html>
