var app = angular.module('blog',['ngAnimate','ngSanitize']);


app.directive('cover',function(){
		return {
			restric: 'A',
			templateUrl: '/templates/cover/index.html',
	};
});


app.controller('sliderController',function($scope, $timeout, $sce, $http){
	$scope.slidePos=0;
	$http.get('/templates/cover/get.php').success(function(data){
		$scope.slides =  data;
	});
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