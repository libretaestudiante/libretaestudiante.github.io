var btnMenu = document.getElementById ("btn-menu");  
var nav = document.getElementById ("nav");

btnMenu.addEventListener("click", function(){  /* cuando haga click en menu se le agrega la clase nav */
    nav.classList.toggle("mostrar");
})
