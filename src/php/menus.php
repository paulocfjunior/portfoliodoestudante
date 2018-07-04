<div class="">
    <aside class="navegacao-site ">
        <nav>
            <main class="" id="menu">
                <ul class="nav navbar-nav">

                    <li class="active"><a href="index.php" class="menus"><i class="fa fa-home"></i><br>Home</a></li>
                    <li class="active"><a href="portfolio.php" class="menus"><i class="fa fa-code"></i><br>Portfolio</a></li>
                   <!-- o link vai ser direcionado pra pagina index indo em direção ao sobre-->
                    <li class="active"><a href="index.php#sobre" class="menus" id="sobre-mim"><i class="fa fa-user "></i><br>Sobre mim</a></li>
                    <li class="active"><a href="trabalhos.php" class="menus"><i class="fa fa-paperclip"></i><br>Como trabalho ?</a></li>
                 <!-- Quando o mouse passar por cima será mostrado uma lista de serviços, baseado no https://alvaron.com.br/servicos/-->
                    <li class="active"><a href="servicos.php" class="menus"><i class="fa fa-heartbeat"></i><br>Serviços</a></li>
                    <li class="active"><a href="index.php#me-contrate" class="menus" id="mecontrate"><i class="fa fa-bars"></i><br>Me contrate</a></li>
                    <li class="active"><a href="contato.php" class="menus"><i class="fa fa-envelope"></i><br>Contato</a></li>
                    <li class="active"><a href="avaliacao.php" class="menus"><i class="fa fa-star"></i><br>Avaliação</a></li>
                    <li class="active"><a href="certificado.php" class="menus"><i class="fa  fa-certificate" ></i><br>Certificados</a></li>

                </ul>
            </main>
        </nav>
    </aside>

</div> 

<script>
    //document é o meu html
    //Os dois scripts terão efeito de rolar a página até o campo designado.
    $(document).ready(function() {

        $('#sobre-mim').click(function() {
            $('html, body').animate({
                scrollTop: $('#sobre').offset().top
            }, 1000);
        });

    });

    $(document).ready(function() {

        $('#mecontrate').click(function() {
            $('html, body').animate({
                scrollTop: $('#me-contrate').offset().top
            }, 1000);
        });

    });




</script>