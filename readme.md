----------------------
  FCA Decision Tree
----------------------

The structure

index.html
		/bower_components/
						/angular/
						/angular-cookies/
						/angular-mocks/
						/angular-resource/
						/angular-route/
						/angular-sanitize/
						/angular-scenario/
						/es5-shim/
						/jquery/
						/json3/
		/images/arrow-expanded.gif
				arrow-unexpanded.gif
		/scripts/
				/controllers/main.js
				app.js
				services.js
		/styles/mains.css
				animate.css
		/views/main.html






Implementation.

1. The dependencies that need to be loaded 

-------------------------------------------------
CSS
-------------------------------------------------
Jargon buster is using already existing FCA stylesheets.

   http://fca.org.uk/static/fca-static/css/bootstrap.css
   http://fca.org.uk/static/fca-static/css/layout.css
   http://fca.org.uk/static/fca-static/css/skeleton.css
   href="http://fca.org.uk/static/fca-static/css/global.css
   href="http://fca.org.uk/static/fca-static/css/hoverover.css
   href="http://fca.org.uk/static/fca-static/css/forms.css

Additionally following custom CSS needs to be loaded 


   /styles/mains.css 
   /styles/animate.css


------------------------------------------------
Scripts
------------------------------------------------

the app is already using 
	http://fca.org.uk/static/fca-static/js/jquery-latest.js
	
Additionally these need to be loaded in the following order;

	bower_components/angular/angular.js
	bower_components/angular-resource/angular-resource.js
    bower_components/angular-cookies/angular-cookies.js
	bower_components/angular-sanitize/angular-sanitize.js
    bower_components/angular-route/angular-route.js
   
   	scripts/app.js
    scripts/services.js
    scripts/controllers/main.js


----------------------------------------
HTML
----------------------------------------
The code below needs to be dropped wherever the app is going to be 
on the page.

 <div id="fca-app-wrap">
               <!--[if lte IE 8]>
                <script>
                  document.createElement('ng-include');
                  document.createElement('ng-pluralize');
                  document.createElement('ng-view');
                  

                  document.createElement('ng:include');
                  document.createElement('ng:pluralize');
                  document.createElement('ng:view');
                </script>
              <![endif]-->

            <div id="fca-app">This message shows until this div has not been bootstraped </div>
</div>


------------------------------
CONTENT JSONP
------------------------------

All the content is in the decisions_2.php file. 

At the moment the file is hosted at: 

http://view-it.co.uk/services/fca/decision_2.php?callback=JSON_CALLBACK

and accessed in the app as a service in 
	
	/scripts/controllers/main.js

http://view-it.co.uk/services/fca/decision_2.php?callback=JSON_CALLBACK
