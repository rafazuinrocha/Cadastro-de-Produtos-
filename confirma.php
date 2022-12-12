<?php
$codigo=$_POST['codigo'];
$nome=$_POST['nome'];
$categoria=$_POST['categoria'];
if (empty($codigo)||empty($nome)||empty($categoria))
{ print"Nenhum dado pode ficar em branco.";
  print"<br><br><a href='altera.php'>Voltar</a>";
  exit;}
try {  $conec = new PDO('mysql:host=localhost;dbname='."cadastro","root","",
    array(PDO::ATTR_PERSISTENT => true));}
catch (Exception $e) 
	{ print "Erro..".$e->getMessage(); exit;}
try { $conec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sth=$conec->prepare("UPDATE produtos SET nome='$nome', categoria='$categoria' WHERE codigo='$codigo'");
	$sth->execute();
if($sth->rowCount()==0)
	{ print "Produto nao encontrado";
      print "<br><br><a href='index.php'>Voltar</a>";
	exit;}
print"Produto alterado com sucesso.";
print"<br><br><a href='index.php'>Voltar</a>";}
catch(Exception $e)
	{	print"<br>Erro".$e->getMessage();
		print"<br><a href='index.php'>Voltar</a>";}
?>