/*var app1 = angular.module('app1', []);

app1.controller('ctrl1', function($scope) {
	$scope.first = 1;
	$scope.second = 1;

	$scope.updateValue = function() {
		$scope.calculation = $scope.first + ' + ' + $scope.second +
		" = " + (+$scope.first + +$scope.second);
	};
});*/

var app2 = angular.module('app2', []);

app2.controller('ctrl1', function($scope){
	$scope.randomNum1 = Math.floor((Math.random() * 10) + 1);
	$scope.randomNum2 = Math.floor((Math.random() * 10) + 1);
}); 

app2.controller('badCtrl', function($scope){
	var badFeelings = ["Грусть", "Печаль", "Гнев", "Страх"];

	$scope.bad = badFeelings[Math.floor((Math.random() * 4))];
});

app2.controller('goodCtrl', function($scope){
	var goodFeelings = ["Радость", "Улыбка", "Ответсвенность", "Надежность"];

	$scope.good = goodFeelings[Math.floor((Math.random() * 4))];
});

app2.controller('gListCtrl', function($scope) {
	$scope.groceries = [
		{item: "Tomatoes", purchased: false},
		{item: "Potatoes", purchased: false},
		{item: "Cucucmbers", purchased: false},
		{item: "Apples", purchased: false}
	]
});

app2.controller('eventCtrl', function($scope){
	$scope.blur = 0;
	$scope.disableButton = true;
});

app2.controller('gList', function($scope) {
	$scope.groceries = [
		{item: "Tomatoes", purchased: false},
		{item: "Potatoes", purchased: false},
		{item: "Cucucmbers", purchased: false},
		{item: "Apples", purchased: false}	
	];

	$scope.addItem = function(newItem) {
		if(!(newItem === undefined || newItem === "")) {
			$scope.groceries.push({
				item: newItem, purchased: false
			});
			$scope.missingNewItemError = "";
		} else {
			$scope.missingNewItemError = "Please enter an item";
		}
	};
});

app2.controller('userCtrl', function($scope){
	$scope.user = [{
		fName: "Kamil",
		lName: "Abzalov",
		street: "Griboedovskaya 6",
		subscribe: "Subscribe",
		delivery: "Email"
	}];

	$scope.saveUser = function(userInfo) {
		if($scope.userForm.$valid) {
			$scope.user.push({
				fName: userInfo.fName,
				lName: userInfo.lName,
				street: userInfo.street,
				subscribe: userInfo.subscribe,
				delivery: userInfo.delivery
			});
			console.log("User Saved");
		} else {
			console.log("Couldn't save user");
		}
	};
});

app2.controller('heroCtrl', function($scope, $rootScope) {
	$scope.hero = [
		{realName: "Брюс Уэйн", heroName: "Batman"},
		{realName: "Питер Паркер", heroName: "Spiderman"},
	];

	$scope.getHeroData = function() {
		heroSearch($scope.heroName);
	};

	function heroSearch(name) {
		$scope.heroData = "Not Found";

		for(var i=0; i< $scope.hero.length; i++) {
			if($scope.hero[i].heroName === name) {
				$scope.heroData = $scope.hero[i].realName + " is " + $scope.hero[i].heroName;	
			}	
		}
	}

	$scope.$on("heroUpdated", function(event, args) {
		$scope.hero.push({
			realName: args.realName,
			heroName: args.heroName,
		})
	})

	$scope.addHeroData = function(realName, heroName) {
		$rootScope.$broadcast("heroUpdated", {
			realName: realName,
			heroName: heroName 
		});
		console.log("Real: " + realName + " Hero: " + heroName);
	};
});

app2.controller('mainCtrl', function() {
	this.name = "Animal";
	this.sound = "Grrr";

	this.animalClick = function() {
		alert(this.name + " says " + this.sound);
	};
});

app2.controller('dogCtrl', function($controller) {
	var childCtrl = this;

	childCtrl.child = $controller('mainCtrl', {});

	childCtrl.child.name = "Dog";
	childCtrl.child.bark = "Woof";

	childCtrl.child.dogData = function() {
		alert(this.name + " says " + this.sound + " and " + this.bark);
	}
});

app2.service('HelloSevice', function(){
	this.helloService = function() {
		console.log('Hello service');
	};
});

app2.factory('HelloFactory', function(){
	var factory = {};

	factory.helloFactory = function() {
		console.log('Hello Factory');
	};
	return factory;
});

app2.controller('newCtrl', function(helloService, HelloFactory) {
	HelloService.helloService();
	HelFactory.HelloFactory();
});

app2.controller('newCtrl', function($scope, $window,
	$location, $interval, $log, $exceptionHandler, $sanitize){


	$scope.greetUser = function(userName) {
		$window.alert("Hello" + userName);
	}

	$scope.currURL = $location.absUrl();
	$scope.theProtocol = $location.protocol();
	$scope.currHost = $location.host();
	$scope.currPort = $location.post();
	$location.path("#/the/path");
	$scope.currPath = $location.path();

	$interval(function() {
		var hour = new Date().getHours();

		var minutes = ('0' + new Date().getMinutes()).slice(-2);

		var minutes = ('0' + new Date().getSeconds()).slice(-2);

		$scope.time = hour + " : " + minutes + " : " + seconds;
	}, 2000);

	$scope.$log = $log;

	$scope.throwException = function() {
		try {
			throw new Error("Exception thrown");
		} catch(e) {
			$exceptionHandler(e.message, "Caught Exception");
		}
	};

	$scope.badStuff = "";

	$scope.$watch("badStuff", function(value) {
		$scope.htmlData = $sanitize(value);
	});

	$scope.players = [
		{name: "Leo Messi", team: "Barcelona"},
		{name: "Andreas Iniesta", team: "Barcelona"},
	];

});

app2.directive("getPlayerInfo", function($compile){
	return function(scope, element, attrs) {
		var playerList = "<ul><li ng-repeat='player in players'>
		{{player.name}}</li></ul>";

		var listElem = angular.element(playerList);

		var compileFunc = $compile(listElem);

		compileFunc(scope);

		element.append(listElem);
	}
})

app2.controller('mainCtrl', function($scope, $http){

	$scope.getData = function() {
		$http.get("playerData.json").success(
				function(data) {
					$scope.players = data;
				}
			);
	}



})