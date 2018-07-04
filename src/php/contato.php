<?php require_once("cabecalho.php"); ?>
<?php require_once("menus.php"); ?>
    <!-- Preciso receber no e-mail-->
<div class="cor-fundo">
    <main class="text-default">


        <div class="">
            <h1 class="contato-distancia">Contato, críticas e sugestões</h1>
            <form method="POST" action="contatoBancoDeDados.php">
                <fieldset>
                    <legend>Seus dados</legend>
                    <label class="com-icone" for="">
                        Nome completo <br>
                        <input  type="text" name="nome" required autofocus  placeholder="Ex:Elton Miranda">
                    </label><br>

                    <label class="com-icone" for="">
                        E-mail <br>
                        <input type="email" name="email" required placeholder="seu@email.com">
                    </label>

                </fieldset><br>
                <fieldset>
                    <legend>Assuntos</legend>
                    <label for="">
                        <input type="radio" name="assunto" value="blog"> Blog
                    </label>
                    <label for="">
                        <input type="radio" name="assunto" value="servico"> Serviços
                    </label>
                    <label for="">
                        <input type="radio" name="assunto" value="conselhos"> Me de conselhos
                    </label>
                    <label for="">
                        <input type="radio" name="assunto" value="outro"> Outros
                    </label>

                </fieldset>
                <label for="mensagem"></label>
                <textarea id="mensagem" name="mensagem" cols="60" rows="10"></textarea><br>
                <button type="submit" class="btn btn-primary">Enviar mensagem</button>
            </form>

        </div>

    </main>
</div>



<?php require_once("rodape.php"); ?>