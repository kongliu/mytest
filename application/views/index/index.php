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
    <script src="./../../assets/js/ui-bootstrap.min.js"></script>
    <script src="./../../assets/js/ui-bootstrap-tpls.min.js"></script>

	<!--[if lt IE 9]>
	<script src="/assets/js/html5shiv.js"></script>
	<script src="/assets/js/respond.min.js"></script>
	<![endif]-->
	<title>ok my first test project</title>
</head>
<body ng-app="myapp" ng-controller="mycontroller">
	<div> my first page</div>
	<?php var_dump($data); ?>
	<table clase = "table table-bordered">
		<tr><th>id</th>
		<th>内容</th>
		<th>时间</th>
		</tr>
		<tr ng-repeat="subdata in mydata">
		<td>{{subdata.id}}</td>
		<td>{{subdata.content}}</td>
		<td>{{subdata.time}}</td></tr>
		
	</table>

</body>
<script>
	var myapp = angular.module('myapp', []);
	myapp.controller('mycontroller', ['$rootScope','$scope','$location','$timeout','$http','$resource', function($rootScope,$scope,$location,$timeout,$htt,$resource){

		// $scope.mydata = $data;
		 // $http.post("./../index/index.php",)
    	// .success(function(response) {$scope.names = response.records;});
		console.log();
		var User = $resource('./../index/index.php', {});
		User.get({})
		    .$promise.then(function(user) {
		      $scope.mydata= user.data;
		    });


		
	}]);
</script>
</html>