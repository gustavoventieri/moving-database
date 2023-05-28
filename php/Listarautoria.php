<?php

include_once 'autoria.php';
$p = new autoria();
$pro_bd = $p->listar();

?>
<br>
<b> Cod_autor &nbsp;&nbsp; &nbsp; &nbsp;  Cod_livro &nbsp;&nbsp; &nbsp; &nbsp; Data Lançamento &nbsp;&nbsp; &nbsp; &nbsp; Editora</b>
<?php
if(is_array($pro_bd)) {
foreach($pro_bd as $pro_mostrar)
{
    ?>
    <br><br>
    
       <b> <?php echo $pro_mostrar[0]; ?></b>&nbsp;&nbsp; &nbsp; &nbsp;  &nbsp;&nbsp; &nbsp; &nbsp;  &nbsp;&nbsp; &nbsp; &nbsp;  &nbsp;&nbsp; &nbsp; &nbsp;
        <?php echo $pro_mostrar[1]; ?>       &nbsp;&nbsp; &nbsp; &nbsp;  &nbsp;&nbsp; &nbsp; &nbsp;  &nbsp;&nbsp; &nbsp; &nbsp;  &nbsp;&nbsp; 
        <?php echo $pro_mostrar[2]; ?>       &nbsp;&nbsp; &nbsp; &nbsp;  &nbsp;&nbsp; &nbsp; &nbsp;  &nbsp;&nbsp; 
        <?php echo $pro_mostrar[3] ?> &nbsp;&nbsp; &nbsp; &nbsp;
      
        <?php
      

}
}
echo "<br><br> <button> <a href = 'autoria.html'>Voltar</a></button>";?>

</section>
</body>
</html>