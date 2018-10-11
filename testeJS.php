<?php

?>

<form method="post">
    
    <input type="text" name="argumento"  onchange="responsaveis(this.argumento);" value="" />
    
</form>


<script >


function responsaveis(roteirista/*, argumentista, editora, desenhista, capista*/) {

    var gibi = {        
        argumento: argumentista;
/*        roteiro: roteirista;
        editora: editora;
        desenhos: desenhista;
        capa: capista;
  */  }
        
        alert(gibi.argumento);
        
}

</script>

