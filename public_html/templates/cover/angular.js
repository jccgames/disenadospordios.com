(function(){
	var app= angular.module('blog',[]);


	app.directive('cover',function(){
		return {
			restric: 'E',
			templateUrl: '/templates/cover/cover.html'
		};
	});


})();
