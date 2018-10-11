<?php

#http://localhost/collectionOrganizer/testesPHP.php

include './conecta.php';

include './class/Acumular.php';

/*
$comissaoTotal = new Acumular(0);

for($i=0;$i<10;$i++) {
    
   print 'Posição do laço: '.$i.' - ';
   print 'Valor acumulado: '.$comissaoTotal->acumular($i).'<br>';
    
}
*/

   function conexaoTests(){
    $query = "select * from comics.editoras";
 
    $statement->execute();
 
    $pessoaArray = $stm->fetch(\PDO::FETCH_ASSOC);
 
    return $pessoaArray;
  }


?>