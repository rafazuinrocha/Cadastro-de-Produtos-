<?php
try {  $conec = new PDO('mysql:host=localhost;
    dbname='."cadastro","root","",
    array(PDO::ATTR_PERSISTENT => true));}
catch (Exception $e) 
	{ print "Erro..".$e->getMessage(); exit;}
try {$conec->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sth=$conec->prepare("SELECT * FROM produtos");
	$sth->execute();
	print "<TABLE border='1'";
	print "<TR><TD>Codigo</TD>
			   <TD>Nome</TD>
			   <TD>Categoria</TD></TR>";
	if ($sth->rowCount()==0)
	{ print "<TR><TD></TD><TD>Nenhum produto cadastrado.</TD><TD></TD></TR></TABLE>";
 	  print "<BR><BR><a href='index.php'>Voltar</a>";
	exit;}
	$linha=$sth->fetch(PDO::FETCH_NUM,PDO::FETCH_ORI_FIRST);
	do { print "<TR>";
	     print "<TD>".$linha[0]."</TD>";
	     print "<TD>".$linha[1]."</TD>";
		 print "<TD>".$linha[2]."</TD>";
	     print "</TR>";}
    while($linha=$sth->fetch(PDO::FETCH_NUM,PDO::FETCH_ORI_NEXT));
    print "</TABLE>";}
catch (Exception $e)
    { print "<BR>Erro".$e->getMessage();}
print "<BR><BR><a href='index.php'>Voltar</a>";
?>