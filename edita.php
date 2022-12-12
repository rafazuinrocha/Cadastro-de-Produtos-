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
    $sth=$conec->prepare("SELECT * FROM produtos WHERE codigo='".$codigo."'");
	$sth->execute();
if($sth->rowCount()==0)
	{ print "Produto nao encontrado";
      print "<br><br><a href='index.php'>Voltar</a>";
	exit;}
$linha=$sth->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_FIRST);
$codigo=$linha[0];
$nome=$linha[1];
$categoria=$linha[2];
print "<html>
<head><title>Edicao</title></head>
<body>
<TABLE border= '1' bgcolor = 'white' width='35%'>
<form method='post' action='confirma.php'>
<TR><th align = 'center'>Edicao de Produtos</th></tr>
<tr><td><br>
Codigo:<input type='text' name='codigo' value='$codigo' readonly> Nome:<input type='text' name='nome' value='$nome'>
<br><br>Categoria:<select name='categoria' value='$categoria'>
    <option value=''>Selecione</option>
    <option value='AL'>Alimento</option>
    <option value='BD'>Bebida</option>
	<option value='AC'>Acougue</option>
</select>
<br>
<p align='center'><input type='submit' value='Alterar'></p>
<br>
</td></tr>
</form>
</table>
</body>
</html>";}
catch(Exception $e)
	{	print"<br>Erro".$e->getMessage();
		print"<br><br><a href='index.php'>Voltar</a>";}
?>