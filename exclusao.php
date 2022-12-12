<?php
$codigo=$_POST["codigo"];
if (empty($codigo))
	{ print "<html><body>Produto nao encontrado.<br><br><a href='index.php'>Voltar</a></body></html>";
   exit;}
try {  $conec = new PDO('mysql:host=localhost;dbname='."cadastro","root","",
    array(PDO::ATTR_PERSISTENT => true));}
catch (Exception $e) 
	{ print "Erro..".$e->getMessage(); exit;}
try { $conec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sth=$conec->prepare("DELETE FROM produtos WHERE codigo=".$codigo);
$sth->execute();
if($sth->rowCount()==0)
	{ print "Produto nao encontrado";
      print "<br><br><a href='index.php'>Voltar</a>";
	exit;}
print "Produto excluido com sucesso.";
print "<br><br><a href='index.php'>Voltar</a>";}
catch(Exception $e)
	{ print "<br>Erro".$e->getMessage();
	print "<br><a href='index.php'>Voltar</a>";}
?>