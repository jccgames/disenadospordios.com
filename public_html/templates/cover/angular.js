var app = angular.module('blog',['ngAnimate']);


app.directive('cover',function(){
		return {
			restric: 'A',
			templateUrl: '/templates/cover/index.html',
		};
	});


app.controller('sliderController',function($scope, $timeout){
	$scope.slidePos=0;

	var countUp = function() {
		if ($scope.slidePos > 2) {
        	$scope.slidePos= 0;
		} else {
			$scope.slidePos+=1;
		}
        $timeout(countUp, 4000);
    }
    
    $timeout(countUp, 4000);
});