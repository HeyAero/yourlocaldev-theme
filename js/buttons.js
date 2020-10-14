jQuery(function($){
    $( document ).ready(function() {
        if(window.location.href === "http://yourlocaldev.com/") {
            $("#topNav").addClass("d-none");
            $("#footerMain").addClass("d-none");
        }
    });
});

jQuery(function($){
    console.log('Close First Page');
    $("#welcomeButton").click(function(){
        $('#welcomeDiv').addClass('animate__animated animate__fadeOut animate__slower')
        setTimeout(function() {
            $("#welcomeDiv").hide()
            $("#welcomeDiv2").removeClass('d-none');
        }, 3000);
    });
});

jQuery(function($){
    console.log('Close Second Page');
    $("#mobileMenuButton").click(function(){
        if ($("#mobileMenu").hasClass("d-none")) {
            $("#mobileMenu").removeClass("d-none")
        } else {
            $("#mobileMenu").addClass("d-none")
        }
    });
});

jQuery(function($){
    console.log('Open Home Page');
    $("#launchSite").click(function(){
        $('#welcomeDiv2').addClass('animate__animated animate__fadeOut animate__slower')
        $('#bgCanvas').addClass('animate__animated animate__fadeOut animate__slower')
        setTimeout(function() {
            $("#welcomeDiv2").hide()
            $("#bgCanvas").hide()
            window.location.href = "/home"
        }, 3000);
    });
});