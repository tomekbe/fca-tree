$(document).ready(function () {

    $("#fca-app-wrap").append("<div id='fca-app'>Loading Decision Tree</div>");	  

    
    $("head").append("<script src='bower_components/angular/angular.js'></script>");
  	$("head").append("<script src='bower_components/angular-resource/angular-resource.js'></script>");
  	$("head").append("<script src='bower_components/angular-cookies/angular-cookies.js'></script>");
    $("head").append("<script src='bower_components/angular-animate/angular-animate.js'></script>");

    $("head").append("<script src='bower_components/angular-sanitize/angular-sanitize.js'></script>");
    $("head").append("<script src='bower_components/angular-route/angular-route.js'></script>");

    $("body").append("<script src='scripts/app.js'></script>");
    $("body").append("<script src='scripts/services.js'></script>");
    $("body").append("<script src='scripts/controllers/main.js'></script>");


    $("head").append('<link rel="stylesheet" type="text/css" href="styles/main.css">');   
    $("head").append('<link rel="stylesheet" type="text/css" href="styles/animate.css">'); 

})
