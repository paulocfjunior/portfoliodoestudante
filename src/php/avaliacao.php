<?php
session_start();
require_once("cabecalho.php");
require_once ("conecta.php");
require_once("menus.php");
 ?>
<!--Cria as estrelas, comentarios, pequeno formulario pra colocar nome e a mensagem, vai enviar e quando enviar
vai chegar no recebeAvalicoes e eu irei avaliar e permitir que seja postado na pagina de avaliacao, sera criado também acima do formulario
um espaço aonde as avaliações serão postadas-->
<div class="cor-fundo color-text">
    <div class="container text-default">

        <?php
        $consulta = "select * from avaliacoes order by id desc ";
        $con = $conexao->query($consulta) or die ($conexao->error);
        ?>
        <?php
        // ELE SEMPRE FICA AS VEZES
        while ($dado = $con->fetch_array()){
            echo "<div class='estrelas-comentarios'>";
            for($i = 1; $i <= 5; $i++){
                if($i <= $dado['quantidade_estrelas']){
                    echo "<i class=\"fa fa-star colored\"></i>";
                } else {
                    echo "<i class=\"fa fa-star\"></i>";
                }
            }
            echo "</div>";

            echo "
        <div class='dados-retorno'>
            <div class='nome-retorno'>
              {$dado['nome']}<br/>
            </div>
            <div class='mensagem-retorno'>
              {$dado['mensagem']}<br/>
            </div>
        </div>
            
      
      
        <br/>";

        }

        if('quantidade_estrelas' == 'estrela_um'){
            echo "estrela_um";
        }

        ?>
        <?php
        /* $sql = mysqli_query( "select * from avaliacoes order by id desc");
         $row = mysqli_num_rows($sql);
         if($row > 0) {
             while ($linha = mysql_fetch_array($sql)){
                 $nome = $linha['nome'];
                 $mensagem = $linha['mensagem'];
                 $quantidade_estrelas = $linha['quantidade_estrelas'];
                 echo $nome;
                 echo $linha;
                 echo $quantidade_estrelas;
             }
         } else {
             echo "Ainda não existem comentarios. Seja o primeiro a comentar";
         }*/
        ?>
<div class="formulario">
    <h1 class="titulo-principal">Avalie meu trabalho</h1>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg']."<br><br>";
        unset($_SESSION['msg']);
    }
    ?>

    <form method="POST" action="avaliacaoBancoDeDados.php" enctype="multipart/form-data">
        <div class="estrelas" id="classificacao">
            <input type="radio" id="vazio" name="estrela" value="" checked>

            <label for="estrela_um"><i class="fa"></i></label>
            <input type="radio" id="estrela_um" name="estrela" value="1">

            <label for="estrela_dois"><i class="fa"></i></label>
            <input type="radio" id="estrela_dois" name="estrela" value="2">

            <label for="estrela_tres"><i class="fa"></i></label>
            <input type="radio" id="estrela_tres" name="estrela" value="3">

            <label for="estrela_quatro"><i class="fa"></i></label>
            <input type="radio" id="estrela_quatro" name="estrela" value="4">

            <label for="estrela_cinco"><i class="fa"></i></label>
            <input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>

            <label for="">
                Digite seu nome: <br>
                <input type="text" name="nome" placeholder="ex: Elton Miranda" class="campo-nome">
            </label> <br>
            <label for="">
                Digite logo abaixo a sua avaliação: <br>
                <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Escreva aqui sua avaliação" class="campo-mensagem"></textarea>
            </label><br>
            <input class="btn btn-primary" id="enviar" type="submit" value="Enviar avaliação" disabled>

        </div>
    </form>
</div>

    </div>
</div>
<script type="text/javascript">
    $("#classificacao > input[type=radio]").on("click", function(){
        $("#enviar").prop("disabled", false);
    });
</script>

<?php require_once("rodape.php");?>
