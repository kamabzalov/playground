var myName = "Kamil";
var myAge = 27;
var canVote = true;
var anything = "dog";
anything = 2;
document.getElementById("txt").innerHTML = myName;
document.write("myname is a" + typeof (myName) + "<br>");
document.write("myname is a" + typeof (myAge) + "<br>");
document.write("myname is a" + typeof (canVote) + "<br>");
document.write("myname is a" + typeof (anything) + "<br>");
var strToNum = parseInt("5");
var numToStr = 5;
document.write("strToNum is a" + typeof (strToNum) + "<br>");
document.write("numToStr is a" + typeof (numToStr.toString()) + "<br>");
var PI = 3.14159;
var superman = {
    realName: "Clark Kent",
    superName: "Super man"
};
document.write(superman.realName + " " + superman.superName);
var employees = ["Kamil", "Emilia"];
document.write(employees.toString() + "<br>");
