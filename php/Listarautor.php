<?php

include_once 'autor.php';
$p = new alunos();
$pro_bd = $p->listar();

?>
<br>
<b> Cod_autor &nbsp;&nbsp; &nbsp; &nbsp;  Nome &nbsp;&nbsp; &nbsp; &nbsp; Sobrenome &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; Email &nbsp;&nbsp; &nbsp; &nbsp; Nasc </b>
<?php
if(is_array($pro_bd)) {
foreach($pro_bd as $pro_mostrar)
{
    ?>
    <br><br>
    
       <b> <?php echo $pro_mostrar[0]; ?></b>&nbsp;&nbsp; &nbsp; &nbsp;
        <?php echo $pro_mostrar[1]; ?>   &nbsp;&nbsp; &nbsp; &nbsp;
        <?php echo $pro_mostrar[2]; ?>      &nbsp;&nbsp; &nbsp; &nbsp;
        <?php echo $pro_mostrar[3]; ?>   &nbsp;&nbsp; &nbsp; &nbsp;
        <?php echo $pro_mostrar[4]; ?>   
     
          
      
        <?php
      

}
}
echo "<br><br> <button> <a href = 'menudisciplinas.html'>Voltar</a></button>";?>

</section>
</body>
</html>