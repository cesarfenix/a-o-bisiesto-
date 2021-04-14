<!DOCTYPE html>
<html lang="es">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css"tipe="text/css">
	<title></title>
</head>
<body>
	<div class="container" id="resultado">
		<p>El año es : <?= $Mes->getAnio() ?></p>
		<p>El numero de mes es : <?= $Mes->getNumero() ?></p>
		<p>El mes es : <?= $Mes->getNombre() ?></p>
		<p><?= $Mes->getDias() ?></p>
	</div>
	
</body>
</html>