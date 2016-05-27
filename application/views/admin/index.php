<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link href="./../../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="./../../assets/css/datepicker3.css" rel="stylesheet">
	<link href="./../../assets/css/styles.css" rel="stylesheet">
	<script src="./../../assets/js/jquery-1.11.1.min.js"></script>
    <script src="./../../assets/js/angular.min.js"></script>
    <script src="./../../assets/js/angular-animate.min.js"></script>
    <script src="./../../assets/js/angular-ui-router.js"></script>
    <script src="./../../assets/js/bootstrap.min.js"></script>
    <script src="./../../assets/js/ui-bootstrap.min.js"></script>
    <script src="./../../assets/js/ui-bootstrap-tpls-1.3.3.min.js"></script>
    <script src="./../../assets/js/lib/angular-resource.min.js"></script>



	<!--[if lt IE 9]>
	<script src="/assets/js/html5shiv.js"></script>
	<script src="/assets/js/respond.min.js"></script>
	<![endif]-->
	<title>ok my first test project</title>
</head>
<body ng-app="myapp" ng-controller="mycontroller" style="margin:0;padding: 0;">
  
 
	<div class="container">
    <div class="" ng-include="'./../../application/views/admin/menu.php'"></div>
	<div class = "col-lg-9 " ui-view>
	
	</div>
	</div>

</body>
<script>
	var myapp = angular.module('myapp', ['ngResource','ngAnimate', 'ui.bootstrap','ui.router']);
     myapp.config(function($stateProvider, $urlRouterProvider){
      
      // For any unmatched url, send to /hots
      // $urlRouterProvider.otherwise("/hots");
      
      $stateProvider
        .state('hots', {
            url: "/hots",
            templateUrl: "./../../application/views/admin/hots.php"
        })
    
          
        .state('news', {
            url: "/news",
            templateUrl: "./../../application/views/admin/news.php"
        })
       
    });

	myapp.controller('mycontroller', ['$rootScope','$scope','$location','$timeout','$http','$resource', function($rootScope,$scope,$location,$timeout,$http,$resource){

		// $scope.mydata = $data;
		 // $http.post("./../index/index.php",)
    	// .success(function(response) {$scope.names = response.records;});
		// console.log();
		var News = $resource('./:action', {},{
            'getFeedbackList' : { method: 'POST', params: { action : 'getFeedbackList'} , isArray : false },
        });
		News.getFeedbackList({})
		    .$promise.then(function(newdata) {
		      $scope.newdatas= newdata.data;
		    });
//轮播图
        $scope.myInterval = 1000;
        $scope.active = 0;
        var slides = $scope.slides = [];
        var currIndex = 0;

        $scope.addSlide = function() {
        var newWidth = 20 + slides.length ;
            slides.push({
            image: './../../img/Journey Screenshot ' + newWidth + '.jpg',
            text: ['Nice image','Awesome photograph','That is so cool','I love that'][slides.length % 4],
            id: currIndex++
            });
        };

       /* $scope.randomize = function() {
            var indexes = generateIndexesArray();
            assignNewIndexesToSlides(indexes);
        };*/

        for (var i = 0; i < 4; i++) {
            $scope.addSlide();
        }

        // Randomize logic below

   /*     function assignNewIndexesToSlides(indexes) {
            for (var i = 0, l = slides.length; i < l; i++) {
                slides[i].id = indexes.pop();
        }
        }

        function generateIndexesArray() {
            var indexes = [];
            for (var i = 0; i < currIndex; ++i) {
              indexes[i] = i;
            }
            return shuffle(indexes);
        }

        // http://stackoverflow.com/questions/962802#962890
        function shuffle(array) {
            var tmp, current, top = array.length;

        if (top) {
            while (--top) {
            current = Math.floor(Math.random() * (top + 1));
            tmp = array[current];
            array[current] = array[top];
            array[top] = tmp;
        }
        }

        return array;
        }*/
    //accordion
        $scope.oneAtATime = false;

        $scope.groups = [
        {
          title: 'Dynamic Group Header - 1',
          content: 'Dynamic Group Body - 1'
        },
        {
          title: 'Dynamic Group Header - 2',
          content: 'Dynamic Group Body - 2'
        }
      ];

      $scope.items = ['Item 1', 'Item 2', 'Item 3'];

      $scope.addItem = function() {
        var newItemNo = $scope.items.length + 1;
        $scope.items.push('Item ' + newItemNo);
      };

      $scope.status = {
        isCustomHeaderOpen: false,
        isFirstOpen: true,
        isFirstDisabled: false
      };

    //
    		
	}]);
</script>
</html>