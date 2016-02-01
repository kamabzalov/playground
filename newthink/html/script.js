function init () {
	
	var h1tags = document.getElementsByTagName("h1");

	h1tags[0].onclick = changeColor;

}

function changeColor() {
	this.inerHTML = "Click Again";

	var randomcolor = 'yellow';

	this.style.color = randomcolor;
}

onload = init;