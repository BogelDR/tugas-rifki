$(document).ready(function() {  
	


	$("html").niceScroll();


	var app = angular.module('tugas', []);
	app.controller('teamController', function($scope, $http) {
	  $http.get("../../api/team.json")
	  .success(function (response) {
	  	$scope.datas = response.records;
	  });
	});
});