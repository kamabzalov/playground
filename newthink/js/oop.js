var customer = {
	name: "Tom",
	speak: function() {
		return "My name is " + this.name;
	},
	address: {
		street: "123 main",
		city: "London",
		state: "GB"
	}
};

document.write(customer.speak() + "<br /> ");

document.write(customer.name + " lives at " + customer.address.street + "<br /> ");

customer.address.country = "Great Britain";

document.write(customer.name + " lives in " + customer.address.country + "<br /> ");

function Person(name, street) {
	this.name = name;
	this.street = street;

	this.info = function() {
		return "My name is " + this.name + " and I lives on " + this.street;
	}
}

var bobSmith = new Person("Bob Smith", "234 main");

document.write(bobSmith.info() + "<br /> ");

document.write("Bob is a person? - " + (bobSmith instanceof Person) + "<br /> ");

function changeName(person) {
	person.name = "Sue Smith";
}

changeName(bobSmith);

document.write("Bob became " + bobSmith.name + "<br />");

var person1 = new Person("Paul", "123 main");
var person2 = new Person("Paul", "123 main");

document.write(" Are they equal " + (person1 == person2) + "<br /> ");

function getSum(num1, num2) {
	return num1 + num2;
}

document.write("Num of arguments " + getSum.length + "<br /> ");

function Mammal(name) {
	this.name = name;
	this.getInfo = function() {
		return "The mammals name is " + this.name;
	}
}


Mammal.prototype.sound = "Grrr";

Mammal.prototype.makeSound = function() {
	return this.name + " says " + this.sound;
}

var grover = new Mammal("Groover");

document.write(grover.makeSound() + "<br /> ");

for(var prop in grover) {
	document.write(prop + ": " + grover[prop] + "<br /> ");
}

document.write("name Property of grover - " + grover.hasOwnProperty("name") + " <br /> " );

document.write("sound Property of grover - " + grover.hasOwnProperty("sound") + " <br /> " );

Array.prototype.inArray = function inArray(value) {
	for(i=0;i<this.length;i++) {
		if(this[i]===value) {
			return true;
		}
	}

	return false;
}

var sampArray = [1,2,3,4,5];

document.write("3 in array " + sampArray.inArray(3) + "<br /> ");

function SecretCode() {
	var secretNumber = 78;

	this.guessNum = function(num) {
		if(num > 78) {
			return "Lower";
		} else if (num < 78) {
			return "Higher";
		} else {
			return "You guessed it";
		}
	}
}

var secret = new SecretCode();

document.write("value of secret number: " + secret.secretNum + "<br /> ");

document.write("is 70 the number: " + secret.guessNum(78) + "<br /> ");

SecretCode.prototype.getSecret = function() {
	return this.secretNum;
}

document.write("The secret is " + secret.getSecret() + "<br /> ");

var address = {
	street: "No street",
	city: "No city",
	state: "No state",

	get getAddress() {
		return this.street + ", " + this.city + ", " + this.state;	
	},

	set setAddress(theAddress) {
		var parts = theAddress.toString().split(", ");
		this.street = parts[0] || "";
		this.city = parts[1] || "";	
		this.state  = parts[2] || "";
	}
}


address.setAddress = "123 main st, Pushkino, MO";

document.write("Address: " + address.getAddress + "<br /> ");

document.write("city: " + address.city + "<br /> ");

function Coordinates() {
	this.latitude = 0;
	this.longitude = 0;
}

Object.__defineGetter__.call(Coordinates.prototype,
	"getCoords", function() {
		return "Lat: " + this.latitude + "Long: " + this.longitude;
	});

Object.__defineSetter__.call(Coordinates.prototype, 
	"setCoords", function(coords){
		var parts = coords.toString().split(", ");
		this.latitude = parts[0] || "";
		this.longitude = parts[1] || "";
	});

var testCoords = new Coordinates();

testCoords.setCoords = "40.71, 74.00";

document.write("Coordinates: " + testCoords.getCoords + "<br /> ");

function Point() {
	this.xPos = 0;
	this.yPos = 0;
}

Object.defineProperty(Point.prototype, "pointPos", {
	get: function() {
		return "X: " + this.xPos + " Y: " + this.yPos;
	},
	set: function(thePoint) {
		var parts = thePoint.toString().split(", ");
		this.xPos = parts[0] || '';
		this.yPos = parts[1] || '';
	}
});

var aPoint = new Point();

aPoint.pointPos = "100, 200";
document.write("Point position " + aPoint.pointPos + "<br /> ");

var Circle = function(radius) {
	this._radius = radius;
}

Circle.prototype =  {
	set radius(radius) {this._radius = radius;},
	get radius() {return this._radius;},
	get area() {return Math.PI * (this._radius * this._radius);}
}

var circ = new Circle(10);

circ.radius = 15;

document.write("A circle has area " + circ.area.toFixed(2) + "<br />	");

function Animal() {
	this.name = "Animal";

	this.toString = function() {
		return "My name is " + this.name;
	};
}

function Canine() {
	this.name = "Canine";
}

function Wolf() {
	this.name = "Wolf";
}

Canine.prototype = new Animal();
Wolf.prototype = new Canine();

Canine.prototype.constructor = Canine;
Wolf.prototype.constructor = Wolf;

var artcticWolf = new Wolf();

document.write(artcticWolf.toString() + "<br /> ");

document.write("Wolf instance of Animal: " + (
	artcticWolf instanceof Animal) + "<br /> ");

Animal.prototype.sound = "Grrr";
Animal.prototype.getSound = function() {
	return this.name + " says " + this.sound;	
}

Canine.prototype.sound = "Woof";

Wolf.prototype.sound = "Grr Woof";

document.write(artcticWolf.getSound() + "<br /> ");


function Rodent() {
	this.name = "Rodent";
}

function Rat() {
	this.name = "Rat";
}

Rodent.prototype = new Animal();

Rat.prototype = new Animal();

Rat.prototype = Rodent.prototype;
Rodent.prototype.constructor = Rodent;
Rat.prototype.constructor = Rat;

var caneRat = new Rat();

document.write(caneRat.toString() + "<br /> ");

function extend(Child, Parent) {
	var Temp = function() {};

	Temp.prototype = Parent.prototype;

	Child.prototype = new Temp();

	Child.prototype.constructor = Child;
}

function Deer() {
	this.animal = "Deer";
	this.sound = "Snort";
}

extend(Deer, Animal);

var elk = new Deer();

document.write(elk.getSound() + "<br /> ");


function Vehicle(name) {
	this.name = "Vehicle";
}

Vehicle.prototype = {
	drive: function() {
		return this.name + " drives forward";
	},
	stop: function() {
		return this.name + " stops";
	}
}

function Truck(name) {
	this.name = name;
}

Truck.prototype = new Vehicle();
Truck.prototype.constructor = Truck;

Truck.prototype.drive = function() {
	var driveMsg = Vehicle.prototype.drive.apply(this);
	return driveMsg += " through a field";
}

var jeep = new Truck("Jeep");


document.write(jeep.drive() + "<br /> ");
document.write(jeep.stop() + "<br /> ");


var addStuff = {
	sum: function(num1, num2) {
		return num1 + num2;
	}
};


document.write("1+2= ", addStuff.sum(1,2) + "<br /> ");


var addStuff = {
	sum(num1, num2) {
		return num1 + num2;
	}
}

document.write("1+2= ", addStuff.sum(1,2) + "<br /> ");

function Hero(name) {
	if(typeof Hero.instance === 'object') {
		return Hero.instance;
	}

	this.name = name;
	Hero.instance = this;
	return this;
}

var derekHero = Hero("Derek");
document.write("Our hero is " + derekHero.name + "<br />");

var kamilHero = Hero("Kamil");
document.write("Our hero is " + kamilHero.name + "<br />");

function Sword(desc) {
	this.weaponType = "Sword";
	this.metal = desc.metal || "Steel";
	this.style = desc.style || "Longsword";
	this.hasMagic = desc.hasMagic || false;
}


function Bow(desc) {
	this.weaponType = "Bow";
	this.material = desc.material || "Wood";
	this.style = desc.style || "Longsword";
	this.hasMagic = desc.hasMagic || false;
}

function WeaponFactory() {

};

WeaponFactory.prototype.makeWeapon = function(desc) {
	var weaponClass = null;

	if(desc.weaponType === "Sword") {
		weaponClass = Sword;
	} else if(desc.weaponType === "Bow") {
		weaponClass = Bow;
	} else {
		return false;
	}
	return new weaponClass(desc);
}

var myWeaponFact =  new WeaponFactory();

var bladeFist = myWeaponFact.makeWeapon({
	weaponType: "Sword",
	metal: "Dark Iron",
	style: "Scytche",
	hasMagic: true
});

document.write(bladeFist.weaponType + " of type " + 
	bladeFist.style + " craffed from " + bladeFist.metal + "<br /> ");


function Pizza(price) {
	this.price = price || 10;
}

Pizza.prototype.getPrice = function() {
	return this.price;
}

function ExtraCheese(pizza) {
	var prevPrice = pizza.price;

	pizza.price = prevPrice + 1;
}

var myPizza = new Pizza(10);

ExtraCheese(myPizza);

document.write("Cost of pizza : $" + myPizza.price + "<br /> ");


var Observable = function() {
	this.subscribers = [];
}

Observable.prototype = {
	subscribe: function(subscriber) {
		this.subscribers.push(subscriber);
	},

	unsubscribe: function(unsubscriber) {
		for (var i = 0; i < this.subscribers.length; i++) {
			if(this.subscribers[i] === unsubscriber) {
				this.subscribers.splice(i,1);
				return unsubscriber.name;
			}
		};
	},

	publish: function(data) {
		for(i=0; i<this.subscribers.length; i++) {
			this.subscribers[i].reciveData(data);
		}
	}
};

var OrganFanny = {
	name: "Organ Fanny",
	reciveData: function(data) {
		document.write(this.name + " received your info " + data + "<br /> ");
	}
}

var BoldmanYaks = {
	name: "Boldman Yaks",
	reciveData: function(data) {
		document.write(this.name + " received your info " + data + "<br /> ");
	}
}

observable = new Observable();

observable.subscribe(OrganFanny);
observable.subscribe(BoldmanYaks);

observable.publish('IBM at $145.40');

document.write(observable.unsubscribe(OrganFanny) + " unsubscribed  <br /> ");