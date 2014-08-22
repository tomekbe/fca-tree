/*global $:false */
'use strict';

angular.module('fcaTreeApp')
	.controller('MainCtrl', function ($scope,questionService) {
    
    $scope.appReady = false;
    $scope.resultmode = false;
    $scope.questionmode = true;

    $scope.disclaimermode = true;
    $scope.resultFullOrLimited = false;
    // start with section1 by default;
    $scope.steps = [];
    $scope.totalSections = 7;
    $scope.sectionNumber = 1;
    $scope.currentSection='section'+$scope.sectionNumber;

    //start with question1 by default;
    $scope.currentQuestion ='Q1';
    $scope.currentResultat = '';


    // Watch section 
    $scope.$watch('currentSection', function() { sectionTransition(); });
    
    // controllers for YES BUTTON
    $scope.clickyes  = function() {
        $scope.disclaimermode = false;

        var cString =	($scope.questions.sections[$scope.currentSection].questions[$scope.currentQuestion].Y).charAt(0);
        var cString2 =($scope.questions.sections[$scope.currentSection].questions[$scope.currentQuestion].Y).charAt(1);
        
        if(cString ==='Q') {
        //$scope.steps.push({"cS":$scope.currentSection,"cQ":$scope.currentQuestion})
          $scope.currentQuestion=$scope.questions.sections[$scope.currentSection].questions[$scope.currentQuestion].Y;
          questionTransition();

        } else if(cString ==='R') {
          $scope.resultmode = true;
          $scope.questionmode = false;
      
          if((cString2==='F')|| (cString2==='L')){
            $scope.resultFullOrLimited = true;
          } else {
            $scope.resultFullOrLimited = false;
          }
          
          $scope.currentResultat =$scope.questions.sections[$scope.currentSection].questions[$scope.currentQuestion].Y;
          resultatTransition();

        } else if(cString ==='_') {

          if($scope.sectionNumber<$scope.totalSections) {
            $scope.sectionNumber++;
          }
          $scope.currentSection='section'+$scope.sectionNumber;
          $scope.currentQuestion='Q1';
          sectionTransition();
        }
      };

      // controller for NO BUTTON
    $scope.clickno = function () {

        $scope.disclaimermode = false;

        var cString =	($scope.questions.sections[$scope.currentSection].questions[$scope.currentQuestion].N).charAt(0);
        var cString2 =($scope.questions.sections[$scope.currentSection].questions[$scope.currentQuestion].N).charAt(1);

        if(cString==='Q') {
          //$scope.steps.push({"cS":$scope.currentSection,"cQ":$scope.currentQuestion})
          $scope.currentQuestion=$scope.questions.sections[$scope.currentSection].questions[$scope.currentQuestion].N;
          questionTransition();

        } else if(cString ==='R') {
          $scope.resultmode = true;
          $scope.questionmode = false;

          if((cString2==='F')||(cString2==='L')){
            $scope.resultFullOrLimited= true;
          } else {
            $scope.resultFullOrLimited= false;
          }

          $scope.currentResultat =$scope.questions.sections[$scope.currentSection].questions[$scope.currentQuestion].N;
          resultatTransition();

        } else if(cString ==='_') {

          if($scope.sectionNumber<$scope.totalSections) {
            $scope.sectionNumber++;
          }
          $scope.currentSection='section'+$scope.sectionNumber;
          $scope.currentQuestion='Q1';
          sectionTransition();
        }
      };

    var resultatTransition = function () {
    //alert("result transition")
      $('#result-bubble').addClass('animated flipInX');
      $('#result-bubble').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $('#result-bubble').removeClass('animated flipInX');
          });

    };

    var questionTransition = function () {
      
      $('#question-bubble').addClass('animated flipInX');
      $('#question-bubble').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $('#question-bubble').removeClass('animated flipInX');
          });
    };

    var sectionTransition = function () {

      $('#question-bubble').addClass('animated flipInX');
      $('#question-bubble').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $('#question-bubble').removeClass('animated flipInX');
          });

    };

  

    //controller for go to previous question 

    $scope.gotoprevious = function () {

         /*if($scope.sectionNumber>1 {
            $scope.sectionNumber--;
            $scope.currentSection="section"+$scope.sectionNumber;

          }*/

         // console.log($scope.steps);


    };


    $scope.sectionchange = function (s) {

        // whent the sectiin changes 

          if(s===1) {
            $scope.disclaimermode = true;
          }


          $scope.sectionNumber=s;
          $scope.currentSection='section'+$scope.sectionNumber;
          $scope.currentQuestion='Q1';
          $scope.questionmode = true;
          $scope.resultmode = false;


        };

        // loading data from JSONP

    questionService.getQuestions().success(function (response) {
          $scope.appReady = true;
          $scope.questions = response;
          //$scope.currentSection=response.sections.section1

        });


  });


