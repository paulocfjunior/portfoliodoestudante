<script>
//Barra de menu acompanha o scroll, assim que o scroll entrar na posição da barra ela automaticamente vai pro top.
    var distanciaMenu = $('#menu').offset().top;
    var $menu = $('#menu'); // guardar o elemento na memoria para melhorar performance
    $(document).on('scroll', function () {
        if ($(window).scrollTop() >= distanciaMenu ) {
            $menu.addClass('fixar');

        } else {
            $menu.removeClass('fixar');
        }
    });


</script>

<footer class="" >
    <p><h1 class="title-footer" style="font-size:40px">Que tal conversarmos ?</h1> <p class="title-footer" style="font-size: 30px">Me mande um <a href="contato.php">e-mail</a> ou me manda uma mensagem no Whatsapp
        5514988084841</p></p>

    <p class="elton-miranda">&copy; Elton da Silva Miranda 2018</p>
    <?php require_once("icones.php");?>
    <iframe class="page-facebook" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FElton-Miranda-Desenvolvedor-Web-381561225678924%2F%3Fmodal%3Dadmin_todo_tour&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media">

</footer>

</body>
</html>