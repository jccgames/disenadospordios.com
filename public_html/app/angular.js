var app = angular.module('blog',['ngAnimate']);


app.directive('cover',function(){
		return {
			restric: 'A',
			templateUrl: '/templates/cover/index.html',
	};
});


app.controller('sliderController',function($scope, $timeout){
	$scope.slidePos=0;
	$scope.slides=[
		{
			pos: 0,
			image: "/images/cover.jpg",
			title: 'Titulo 0',
			description: 'Descripcion 0'
		},
		{
			pos: 1,
			image: "/images/id1.jpg",
			title: 'Titulo 1',
			description: 'Descripcion 1'
		},
		{
			pos: 2,
			image: "/images/id2.jpg",
			title: 'Titulo 2',
			description: 'Descripcion 2'
		},
		{
			pos: 3,
			image: "/images/id3.jpg",
			title: 'Titulo 3',
			description: 'Descripcion 3'
		}
	]

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