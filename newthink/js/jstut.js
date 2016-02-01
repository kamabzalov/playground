function inArray (check, value) {
	for(i=0; i<check.length; i++) {
		if(check[i] === value) {
			return true;
		}
	}

	return false;
}

function times2(number) {
	var var2 = 2;

	return number * var2;
}

function times3 (number) {
	return num * 3;
}

function multiply(func, num) {
	return func(num);
}

function getSum() {
	var sum = 0;

	for(i=0; i<arguments.length; i++) {
		sum += arguments[i];
	}

	return sum;
}

function times2 (theArray) {
	var newArray = [];
	for(i=0; i<theArray.length; i++) {
		newArray.push(theArray[i]*2);
	} 

	return newArray;
}

function factorial(num) {
	if(num<=1) {
		return 1;
	} else {
		return num * factorial(num -1);
	}
}

function openAlert (mess) {
	alert(mess);
}


function getCharacter (event) {
	if(event.which == null) {
		return String.fromCharCode(event.keyCode);
	} else if(event.which != 0 && event.charCode !=0) {
		return String.fromCharCode(event.which);
	} else {
		return null;
	}
}
