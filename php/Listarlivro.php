<?php

include_once 'livro.php';
$p = new livro();
$pro_bd = $p->listar();

?>
<br>
<b> Cod_livro &nbsp;&nbsp; &nbsp; &nbsp;  Titulo  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; Categoria &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; ISBN &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  Idioma &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; QntdPag </b>
<?php
if(is_array($pro_bd)) {
foreach($pro_bd as $pro_mostrar)
{
    ?>
    <br><br>
    
    <b> <?php echo $pro_mostrar[0]; ?></b>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
        <?php echo $pro_mostrar[1]; ?> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
        <?php echo $pro_mostrar[2]; ?>       &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
        <?php echo $pro_mostrar[3] ?> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; 
        <?php echo $pro_mostrar[4]?> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
        <?php echo $pro_mostrar[5]?> &nbsp;&nbsp; &nbsp; &nbsp;
        
        <?php
      

}
}
echo "<br><br> <button> <a href = 'menulivro.html'>Voltar</a></button>";?>

</section>
</body>
</html>