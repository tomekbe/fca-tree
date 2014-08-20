angular.module('fcaTreeApp.questionService',[]).factory('questionService', function($http){ 

	 var factory = {};
	 factory.getQuestions = function() {
      return $http({
        method: 'JSONP', 
		//url: 'http://pizg.net/tests/decision.php?callback=JSON_CALLBACK'
		url: 'http://view-it.co.uk/services/fca/decision_2.php?callback=JSON_CALLBACK'
      });
    }

    return factory;

}) 


angular.module('fcaTreeApp.directives',[]).
	directive("quizquestion", function() {
		return {
			restrict:"E",
	
			

		
			link: function (scope,element,attrs) {


			





			},
			template:'<div class="question">dhdhi</div>',

		



		
		}
})