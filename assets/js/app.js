var app = angular.module('tugas', []);
app.controller('teamController', function($scope, $http) {
  $http.get("api/team.json")
  .success(function (response) {
  	$scope.datas = response.records;
  });
});

$(document).ready(function() {  
	

	$(this).SmoothScrollWheel({
		defaultSpeed: 250
	});
	$("html").niceScroll();
	$("#light-slider").lightSlider({
		item: 6
	});

	
});