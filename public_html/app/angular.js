var app = angular.module('blog',['ngAnimate','ngSanitize']);


//Cover Tag

app.directive('cover',function(){
		return {
			restric: 'A',
			templateUrl: '/templates/cover/index.html',
	};
});


app.controller('sliderController',function($scope, $timeout, $http){
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


//Feed Tag

app.directive('feed',function(){
	return{
		restric: 'A',
		templateUrl: 'templates/feed/index.html'
	};
});

app.controller('cardController',function($scope, $http){
	$scope.sections=[];
	$http.get('/templates/feed/get.php').success(function(data){
		$scope.cards = data;
		var max=$scope.cards.length;

		var i=0;
		for (i = 0; i < max/3; i=i+1) {
			$scope.sections[i]= i*3;
		};
	});
});