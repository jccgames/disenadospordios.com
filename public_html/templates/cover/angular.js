var app = angular.module('blog',['ngAnimate']);


app.directive('cover',function(){
		return {
			restric: 'A',
			templateUrl: '/templates/cover/index.html',
		};
	});


app.controller('sliderController',function($scope){
	$scope.slidePos=0;
});