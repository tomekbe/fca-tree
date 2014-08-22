'use strict';

angular.module('fcaTreeApp', [
    'ngCookies',
    'ngResource',
    'ngSanitize',
    'ngAnimate',
    'ngRoute',

    'fcaTreeApp.questionService',
    'fcaTreeApp.directives'

  ])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/main.html',
        controller: 'MainCtrl'
      })
      .otherwise({
        redirectTo: '/'
      });
  });


// bootstrapping
setTimeout(function() {
      var all = window.document.getElementById('fca-app');
      var body = window.document.getElementById('fca-app-wrap');
      all.setAttribute('ng-view','');
      //all.setAttribute('ng-animate',"'slide'");
      angular.bootstrap(body, ['fcaTreeApp']);
      //document.getElementById('loader').style.display='none';//alert("fix for IE8");
    },750);