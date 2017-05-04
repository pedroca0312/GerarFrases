<?php
    session_start();
   $_SESSION['atividades'][]=$_GET['atividade'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<form method="get">
    <input type="text" name="atividade" placeholder="Ex.: Levar o booby pra passear">
    <input type="submit" value="adicionar">
</form>
    <h3>Exibir atividades</h3>
    <?php print_r($_SESSION['atividades']); ?>
</body>
</html>