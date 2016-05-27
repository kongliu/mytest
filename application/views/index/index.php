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
  
 <div style="height: 305px">
    <uib-carousel active="active" interval="myInterval" no-wrap="noWrapSlides">
      <uib-slide ng-repeat="slide in slides track by slide.id" index="slide.id">
        <img ng-src="{{slide.image}}" style="height: 305px;width:100%;">
        <div class="carousel-caption">
          <h4>Slide {{slide.id}}</h4>
          <p>{{slide.text}}</p>
        </div>
      </uib-slide>
    </uib-carousel>
  </div>
  <!--
  <div class="row">
     <div class="col-md-6">
  <button type="button" class="btn btn-info" ng-click="addSlide()">Add Slide</button>
  <button type="button" class="btn btn-info" ng-click="randomize()">Randomize slides</button>
  <div class="checkbox">
    <label>
      <input type="checkbox" ng-model="noWrapSlides">
      Disable Slide Looping
    </label>
  </div>
</div> 
    <div class="col-md-6">
      Interval, in milliseconds: <input type="number" class="form-control" ng-model="myInterval">
      <br />Enter a negative number or 0 to stop the interval.
    </div>

  </div>
  -->
       <script type="text/ng-template" id="group-template.html">
    <div class="panel {{panelClass || 'panel-default'}}">
      <div class="panel-heading">
        <h4 class="panel-title" style="color:#fa39c3">
          <a href tabindex="0" class="accordion-toggle" ng-click="toggleOpen()" uib-accordion-transclude="heading">
            <span uib-accordion-header ng-class="{'text-muted': isDisabled}">
              {{heading}}
            </span>
          </a>
        </h4>
      </div>
      <div class="panel-collapse collapse" uib-collapse="!isOpen">
        <div class="panel-body" style="text-align: right" ng-transclude></div>
      </div>
    </div>
  </script>
</div>
	<div class="container">
	<div class="col-lg-3 ">


  <p>
    <button type="button" class="btn btn-default btn-sm" ng-click="status.open = !status.open">Toggle last panel</button>
    <button type="button" class="btn btn-default btn-sm" ng-click="status.isFirstDisabled = ! status.isFirstDisabled">Enable / Disable first panel</button>
  </p>

  <div class="checkbox">
    <label>
      <input type="checkbox" ng-model="oneAtATime">
      Open only one at a time
    </label>
  </div>
  <uib-accordion close-others="oneAtATime">
    <uib-accordion-group heading="Static Header, initially expanded" is-open="status.isFirstOpen" is-disabled="status.isFirstDisabled">
      This content is straight in the template.
    </uib-accordion-group>
    <uib-accordion-group heading="{{group.title}}" ng-repeat="group in groups">
      {{group.content}}
    </uib-accordion-group>
    <uib-accordion-group heading="Dynamic Body Content">
      <p>The body of the uib-accordion group grows to fit the contents</p>
      <button type="button" class="btn btn-default btn-sm" ng-click="addItem()">Add Item</button>
      <div ng-repeat="item in items">{{item}}</div>
    </uib-accordion-group>
    <uib-accordion-group heading="Custom template" template-url="group-template.html">
      Hello
    </uib-accordion-group>
    <uib-accordion-group is-open="status.isCustomHeaderOpen" template-url="group-template.html">
      <uib-accordion-heading>
        Custom template with custom header template <i class="pull-right glyphicon" ng-class="{'glyphicon-chevron-down': status.isCustomHeaderOpen, 'glyphicon-chevron-right': !status.isCustomHeaderOpen}"></i>
      </uib-accordion-heading>
      World
    </uib-accordion-group>
    <uib-accordion-group heading="Delete account" panel-class="panel-danger">
      <p>Please, to delete your account, click the button below</p>
      <button class="btn btn-danger">Delete</button>
    </uib-accordion-group>
    <uib-accordion-group is-open="status.open">
      <uib-accordion-heading>
        I can have markup, too! <i class="pull-right glyphicon" ng-class="{'glyphicon-chevron-down': status.open, 'glyphicon-chevron-right': !status.open}"></i>
      </uib-accordion-heading>
      This is just some content to illustrate fancy headings.
    </uib-accordion-group>
  </uib-accordion>
	</div>
	<div class = "col-lg-9 ">
	
	<div class = "text-center"><h3>用户反馈展示</h3></div>
	<table class = "table table-striped table-condensed" >
		<tr><th>id</th>
        <th>标题</th>
        <th>图片</th>
		<th>内容</th>
		<th>时间</th>
		</tr>
		<tr ng-repeat="newdata in newdatas">
        <td>{{newdata.id}}</td>
        <td><img style ="width:100px;height: 50px;" src="{{newdata.pic}}" alt="" /></td>
		<td>{{newdata.title}}</td>
		<td>{{newdata.content}}</td>
		<td>{{newdata.create_time}}</td></tr>
		
	</table>
	</div>
	</div>

</body>
<script>
	var myapp = angular.module('myapp', ['ngResource','ngAnimate', 'ui.bootstrap']);
	myapp.controller('mycontroller', ['$rootScope','$scope','$location','$timeout','$http','$resource', function($rootScope,$scope,$location,$timeout,$http,$resource){

		// $scope.mydata = $data;
		 // $http.post("./../index/index.php",)
    	// .success(function(response) {$scope.names = response.records;});
		// console.log();
		var User = $resource('./:action', {},{
            'getFeedbackList' : { method: 'POST', params: { action : 'getFeedbackList'} , isArray : false },
        });
		User.getFeedbackList({})
		    .$promise.then(function(user) {
		      $scope.newdatas= user.data;
		    });
//轮播图
       
        $scope.myInterval = 1000;
        $scope.active = 0;
        var slides = $scope.slides = [];
        var currIndex = 0;


        $scope.addSlide = function() {
        // var newWidth = 20 + slides.length ;
            slides.push({
            image:slides.path,
            text: ['Nice image','Awesome photograph','That is so cool','I love that'][slides.length % 4],
            id: currIndex++
            });
        };
        Datas.getCurrentHotsList({})
            .$promise.then(function(hot) {
              $scope.slides= hot.data;
              console.log($scope.slides);
            }); 
       /* $scope.randomize = function() {
            var indexes = generateIndexesArray();
            assignNewIndexesToSlides(indexes);
        };*/

        for (var i in $scope.slides) {
            slides.push({
            image:i.path,
            text: ['Nice image','Awesome photograph','That is so cool','I love that'][$scope.slides.length % 4],
            id: currIndex++
            });
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
        $scope.oneAtATime = true;

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