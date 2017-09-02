<?php

require_once '../vendor/autoload.php';
require_once 'Users.php';
$uno = new Users();

$uno->generateUser();
//$users = $uno->getAll();


?>


<!DOCTYPE html>
<html>
<head>
	<title>DATATABLES</title>
	<!-- bootstrap css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- datatable bootstrap css -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
	<!-- pdf library css -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs-3.3.7/pdfmake-0.1.18/dt-1.10.13/af-2.1.3/b-1.2.4/b-html5-1.2.4/b-print-1.2.4/datatables.min.css"/>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h5>User datatable</h5>
				</div>
				<div class="panel-body">
					
						<table class="table table-striped table-bordered" cellspacing="0" width="100%" id="userstable">
						<thead>
							<tr>
								<th>ID</th>
								<th>NAME</th>
								<th>EMAIL</th>
								<th>Phone</th>
								<th>ADDRESS</th>	
							</tr>
						</thead>
						<tbody>
							<? foreach ($users as $user):?>
							<tr>
								<td><? echo $user->id?></td>
								<td><? echo $user->name?></td>
								<td><? echo $user->email?></td>
								<td><? echo $user->phone?></td>
								<td><? echo $user->address?></td>
							</tr>
						<?  endforeach; ?>
						</tbody>
					</table>
					
				</div>
			</div>
		</div>	
	</div>
</div>				




<!-- // jQuery -->
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

  <!-- datatable script -->
  <script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script> 

<!--Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- bootstrap datatable -->
<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="dataTables.scrollingPagination.js"></script>
<!-- pdf library  -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs-3.3.7/pdfmake-0.1.18/dt-1.10.13/af-2.1.3/b-1.2.4/b-html5-1.2.4/b-print-1.2.4/datatables.min.js"></script>


<script type="text/javascript">
	$(document).ready(function(){
    $('#userstable').DataTable({    	
    	
	"language": { "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"},
	"pageLength" : 10, // mostrados por defecto
	"scrollY" : 400 // scroll en el eje y, tamaño de la tabla en pixeles 
	// "paging":false,
	// "pagingType": "scrolling",
	
    
} );
});
</script>
</body>
</html>