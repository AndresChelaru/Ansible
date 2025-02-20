<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script type="text/javascript" src="js/jquery-3.7.1.min.js"></script>
</head>
<body>
	<h1>Selección de servicios</h1>
	<form action="exec.php" method="post">
		<input type="checkbox" id="lamp" name="lamp" value="lamp">
		<label for="lamp"> LAMP</label><br>
		<input type="checkbox" id="ftp" name="ftp" value="ftp">
		<label for="ftp"> FTP</label><br>
		<input type="checkbox" id="wp" name="wp" value="wp">
		<label for="wp"> WordPress</label><br>
		<br>
		<div id="dLamp" style="display: none;" >
			<input type="text" name="lampDomain" placeholder="Nombre de dominio del servidor">
			<input type="password" name="lampMysqlRootPass" placeholder="Contraseña root de MySQL">
		</div>
		<br>		
		<input type="submit" value="Instalar servicios">
	</form>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#lamp").click(function() {
				if($(this).is(":checked")) {		
		        	$('#dLamp').show();
    			} else {
		        	$('#dLamp').hide();    				
    			}
			});			
		});		
	</script>
</body>
</html>