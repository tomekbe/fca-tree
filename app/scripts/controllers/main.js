'use strict';

angular.module('fcaTreeApp')
	.controller('MainCtrl', function ($scope,questionService) {
	    
	    $scope.awesomeThings = [
	      'HTML5 Boilerplate',
	      'AngularJS',
	      'Karma'
	    ];

    	//$scope.currentQuestions="questions.sections.section1.name";
   		
      $scope.resultmode = false
      $scope.questionmode = true;

    	// start with section1 by default;

      $scope.steps = new Array();

      $scope.totalSections = 6;
      $scope.sectionNumber = 1;
   		$scope.currentSection="section"+$scope.sectionNumber;
   		//start with question1 by default;
   		$scope.currentQuestion ="Q1"

   		$scope.currentResultat = "";
    	

      // controllers for YES 
    	$scope.clickyes  = function() {
    		var cString =	($scope.questions.sections[$scope.currentSection].questions[$scope.currentQuestion].Y).charAt(0);
    		//console.log(cString);

    		if(cString =="Q") {
          $scope.steps.push({"cS":$scope.currentSection,"cQ":$scope.currentQuestion})
    			
          $scope.currentQuestion=$scope.questions.sections[$scope.currentSection].questions[$scope.currentQuestion].Y;
    		
        } else if(cString =="R") {
    			
          $scope.resultmode = true; $scope.questionmode = false;
          $scope.currentResultat =$scope.questions.sections[$scope.currentSection].questions[$scope.currentQuestion].Y
    		

    		} else if(cString =="_") {

    			//alert("_nextSection")
          if($scope.sectionNumber<$scope.totalSections) {
           $scope.sectionNumber++;
          }
          $scope.currentSection="section"+$scope.sectionNumber;
          $scope.currentQuestion="Q1";

    		}

    	}

      // controller for NO section
    	$scope.clickno = function () {

    		var cString =	($scope.questions.sections[$scope.currentSection].questions[$scope.currentQuestion].N).charAt(0);
    		//console.log(cString);

    		if(cString=="Q") {
          $scope.steps.push({"cS":$scope.currentSection,"cQ":$scope.currentQuestion})
    			
          $scope.currentQuestion=$scope.questions.sections[$scope.currentSection].questions[$scope.currentQuestion].N;

    		} else if(cString =="R") {
          $scope.resultmode = true; $scope.questionmode = false;
          $scope.currentResultat =$scope.questions.sections[$scope.currentSection].questions[$scope.currentQuestion].N
    			//alert("resultat")

    		} else if(cString =="_") {
 
    			//alert("_nextSectionN")
          if($scope.sectionNumber<$scope.totalSections) {
            $scope.sectionNumber++;
          }
          $scope.currentSection="section"+$scope.sectionNumber;
    			$scope.currentQuestion="Q1";
          //console.log($scope.sectionNumber,  $scope.currentSection);
    		}

    	}


      //controller for go to previous question 

      $scope.gotoprevious = function () {

         /*if($scope.sectionNumber>1 {
            $scope.sectionNumber--;
            $scope.currentSection="section"+$scope.sectionNumber;

          }*/

          console.log($scope.steps);


      }


      $scope.sectionchange = function (s) {

          //alert("about to change section")
       // console.log("about to change the section",s);
        // whent the sectiin changes 
          $scope.sectionNumber=s;
          $scope.currentSection="section"+$scope.sectionNumber;
          $scope.currentQuestion="Q1";
          $scope.questionmode = true;
          $scope.resultmode = false;


      }

    	 // loading data from JSONP
       	 

       	 questionService.getQuestions().success(function (response) {
       	
       	 		$scope.questions = response;
       	 		//$scope.currentSection=response.sections.section1


     
       
       })


  });


