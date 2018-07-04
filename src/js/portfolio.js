//O script Hover faz com que o link apareça quando o mouse passar por cima e desapareça quando mesmo sair de cima.
$(".img-campo-portfolio").hover(function() {
    /* Stuff to do when the mouse enters the element */
    $(this).find(".href-portfolio").removeClass("invisivel");
}, function() {
    /* Stuff to do when the mouse leaves the element */
    $(this).find(".href-portfolio").addClass("invisivel");
});


//efeito img, esse script coloca um efeito de opacity nas imagens e faz com que apareçam uma por vez.
$(".img-campo-portfolio").each(function(i){
    $(this).delay(150 * i).fadeIn(1500);
});