$(document).ready(function(){
    // hides the main-nav when the menu goes under 950px.
    if ($(document).width() <= 950 ){
        $(".main-nav").hide();

    }
    
    // Toggles the mobile menu.
    $(".toggle").click(function(){
        $(".main-nav").toggle();
    })
});