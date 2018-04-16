<?php
include 'db.php';

echo "<pre>";
var_dump(query_msg($connect));
die();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Chat PHP</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link href="https://fonts.googleapis.com/css?family=Mukta+Vaani" rel="stylesheet">
	</head>
	<body>
		<div class="conteudo">
			<div class="caixa-chat">
				<div class="chat">
					<?php
					foreach (query_msg($connect) as $value)
					{
						?>
						<div class="dados-chat"><?= $value[1] ?>:</span>
							<span  style="color:#848484;"><?= $value[2] ?></span>
							<span style="float: right">Hora: <?= formatarData($value[3]) ?></span>
						</div>
						<?php
					}
					?>
				</div>
			</div>
			<form method="post" action="index.php">
				<input type="text" name="nome" placeholder="Preencha seu nome">
				<textarea name="msg" placeholder="Digite sua msg"></textarea>
				<input type="submit" name="enviar" value="Enviar" >
			</form>
		</div>
	</body>
</html>
