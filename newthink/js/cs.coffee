### 
Comment
###

name = "Phil"

csoutput = document.getElementById("csoutput");

csoutput.innerHTML = "Hello #{name}<br>"

aString = "I'm a String"

csoutput.insertAdjacentHTML('beforeend', 'aString is a String<br>') if typeof aString is 'string'

largestNum = Number.MAX_VALUE
smallestNum = Number.MIN_VALUE

largeNumStr = "The largest numer is #{largestNum}<br>"

smallNumStr = "The smallest number is #{smallestNum}<br>"

csoutput.insertAdjacentHTML('beforeend', largeNumStr + '<br>')

csoutput.insertAdjacentHTML('beforeend', smallNumStr + '<br>')

areYouHappy = no

csoutput.insertAdjacentHTML('beforeend', 'areYouHappy is a boolean<br>') if typeof
    areYouHappy is 'boolean'

csoutput.insertAdjacentHTML('beforeend', "5 + 2 = #{5 + 2}<br>")

csoutput.insertAdjacentHTML('beforeend', '5 + 2 = #{5 + 2}<br>')

csoutput.insertAdjacentHTML('beforeend', "5 - 2 = #{5 - 2}<br>")

csoutput.insertAdjacentHTML('beforeend', "5 * 2 = #{5 * 2}<br>")

csoutput.insertAdjacentHTML('beforeend', "5 / 2 = #{5 / 2}<br>")

precisionTest = 0.1000000001;

csoutput.insertAdjacentHTML('beforeend', "Precision: #{precisionTest + 0.10000000011}<br>")

balance = 1563.87

csoutput.insertAdjacentHTML('beforeend', "#{(balance/12).toFixed(2)}<br>")

randNum = 5;

csoutput.insertAdjacentHTML('beforeend', 
"randNum++ = #{randNum++}<br>")

randNum = 5;

csoutput.insertAdjacentHTML('beforeend', 
"randNum+=5 : #{randNum+=5}<br>")

csoutput.insertAdjacentHTML('beforeend', 
"3+2*5 = #{3+2*5}<br>")

csoutput.insertAdjacentHTML('beforeend', 
"(3+2)*5 = #{(3+2)*5}<br>")

randNum = Math.floor(Math.random() * 100) + 1

csoutput.insertAdjacentHTML('beforeend', 
"randNum = #{randNum}<br>")

fName = "Kamil"
lName = "Abzalov"

csoutput.insertAdjacentHTML('beforeend', 
fName + " " + lName + "<br>")

longStr = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quas, error odit iusto officia amet hic magni aperiam. Ea sit iusto qui aperiam quisquam facere fugiat, sequi a laboriosam totam.";

csoutput.insertAdjacentHTML('beforeend',
"String length: #{longStr.length}<br>")

csoutput.insertAdjacentHTML('beforeend',
"Index of: #{longStr.indexOf("ipsum")}<br>")

csoutput.insertAdjacentHTML('beforeend',
"Index 8: #{longStr.charAt(8)}<br>")

csoutput.insertAdjacentHTML('beforeend',
"Substring: #{longStr.slice(27, 31)}<br>")

csoutput.insertAdjacentHTML('beforeend',
"After 27: #{longStr.slice(27)}<br>")

longStr = longStr.replace("Lorem", "hi")

csoutput.insertAdjacentHTML('beforeend',
"Replace : #{longStr}<br>")

strArray = longStr.split(" ")

for x in strArray
    csoutput.insertAdjacentHTML('beforeend',
    "#{x}<br>")

longStr = longStr.trim()

csoutput.insertAdjacentHTML('beforeend',
"#{longStr.toUpperCase()}<br>")

age = 3

if age >= 18
    csoutput.insertAdjacentHTML('beforeend',
    "You can vote<br>")

else if(age >= 16)
    csoutput.insertAdjacentHTML('beforeend',
    "You can drive<br>")

else
    csoutput.insertAdjacentHTML('beforeend',
    "You can't drive and vote<br>")

unless (age>=19)
    csoutput.insertAdjacentHTML('beforeend',
    "You are in scholl<br>")
else
    csoutput.insertAdjacentHTML('beforeend',
    "You are in college<br>")

if !(age>4) || (age > 65)
    csoutput.insertAdjacentHTML('beforeend',
    "You can't drive and vote<br>")
else if(age>=5) && (age<=6)
    csoutput.insertAdjacentHTML('beforeend',
    "Go to the garden<br>")
else if(age>6) && (age<=18)
    csoutput.insertAdjacentHTML('beforeend',
    "Go to the school<br>")
else
    csoutput.insertAdjacentHTML('beforeend',
    "Go to the work<br>")

votingAge = if age > 18 then true else false

csoutput.insertAdjacentHTML('beforeend',
    "#{votingAge}<br>")

childAge = 7

switch childAge
    when 5 then csoutput.insertAdjacentHTML('beforeend',
        "Go to the garden<br>")
    when 6,7,8,9,10 then csoutput.insertAdjacentHTML('beforeend',
        "Go to the school<br>")

if age?
    csoutput.insertAdjacentHTML('beforeend',
    "#{age} years old<br>")

chicken = null
chickenName = chicken ? "Fred"

csoutput.insertAdjacentHTML('beforeend',
    "#{chickenName}<br>")

hat = "Hat"
coat = "Coat"
gloves = null

if hat? and coat?
    csoutput.insertAdjacentHTML('beforeend',
    "#{hat} and #{coat} #{gloves ? 'Winter Floves'}<br>")

randArray = ["word", false, 1234, 1.234]
csoutput.insertAdjacentHTML('beforeend',
    "Last 2: #{randArray[2..3]}<br>")

oneTo10 = [1..10]

tenTo1 = [10..1]

combinedArray = oneTo10.concat tenTo1

oneTo10.push tenTo1...

for x in oneTo10
    csoutput.insertAdjacentHTML('beforeend',
    "#{x}<br>")

csoutput.insertAdjacentHTML('beforeend',
    "#{oneTo10.toString()}<br>")

eventsOnly = oneTo10.filter (x) -> x % 2 == 0
csoutput.insertAdjacentHTML('beforeend',
    "#{eventsOnly.toString()}<br>")

csoutput.insertAdjacentHTML('beforeend',
    "Max: #{Math.max oneTo10...}<br>")

csoutput.insertAdjacentHTML('beforeend',
    "Min: #{Math.min oneTo10...}<br>")

sumOfArray = oneTo10.reduce (x,y) -> x+y
csoutput.insertAdjacentHTML('beforeend',
    "Sum: #{sumOfArray}<br>")

csoutput.insertAdjacentHTML('beforeend',
    "Reverse: #{tenTo1.reverse()}<br>")

peopleArray = [
    {
        name: "Paul"
        age: 43
    },
    {
        name: "Sue"
        age: 39
    },
]

csoutput.insertAdjacentHTML('beforeend',
    "First Name: #{peopleArray[0].name}<br>")

oneTo10 = [1..10]

for x in oneTo10
    csoutput.insertAdjacentHTML('beforeend',
    "#{x}<br>")

for x in oneTo10 when x%2 isnt 0
    csoutput.insertAdjacentHTML('beforeend',
    "#{x}<br>")

for x in [50..100] when x%2 is 0
    csoutput.insertAdjacentHTML('beforeend',
    "#{x}<br>")

for x in [20..40] by 2
    csoutput.insertAdjacentHTML('beforeend',
    "#{x}<br>")

employees = [
    "Doug"
    "Sue"
    "Paul"
]
for employee, employeeIndex in employees
    csoutput.insertAdjacentHTML('beforeend',
    "Index:" + employeeIndex + " Employee: " + employee + "<br>")

if "Doug" in employees
    csoutput.insertAdjacentHTML('beforeend',
    "I found Doug<br>")

i = 100
while(i+=1) <= 110
    csoutput.insertAdjacentHTML('beforeend',
    "i = #{i}<br>")

monkeys = 10

while monkeys -=1
    csoutput.insertAdjacentHTML('beforeend',
    "#{monkeys} маленьких обезьян ели 100 бананов<br>")


x = 0

loop
    csoutput.insertAdjacentHTML('beforeend',
    "#{++x}<br>")
    break unless x !=5

helloFunc = (name) ->
    return "Hello #{name}"

csoutput.insertAdjacentHTML('beforeend',
    "#{helloFunc("Derek")}<br>")

getRandNum = ->
    return Math.floor(Math.random() * 100) + 1
csoutput.insertAdjacentHTML('beforeend',
    "Random Number: #{getRandNum()}<br>")

sumNums = (vars...) ->
    sum = 0
    for x in vars
        sum +=x
    return sum

csoutput.insertAdjacentHTML('beforeend',
    "Sum: #{sumNums(1,2,3,4,5)}<br>")


movieRank = (stars = 1) ->
    if stars <=2
        "Bad"
    else
        "Good"

csoutput.insertAdjacentHTML('beforeend',
    "Movie Rank: #{movieRank()}<br>")

factorial = (x) ->
    return 0 if x<0
    return 1 if x==0 or x==1
    return x * factorial(x-1)

csoutput.insertAdjacentHTML('beforeend',
    "Factorial 5: #{factorial(5)}<br>")

derek = {name: "Derek", age: 41, street: "123 Main"}

csoutput.insertAdjacentHTML('beforeend',
    "Name: #{derek.name}<br>")

derek.state = "Klyazma"

for x, y of derek
    csoutput.insertAdjacentHTML('beforeend',
    x + " is " + y + "<br>")

class Animal
    name: "No name"
    height: 0
    weight: 0
    sound: "No sound"

    @numOfAnimals: 0

    @getNumOfAnimals: () ->
        Animal.numOfAnimals

    constructor: (name = "No name", @height = 0, @weight = 0) ->    
        @name = name

        Animal.numOfAnimals++

        makeSound: ->
            "says #{@sound}"

    getInfo: ->
        "#{@name} is #{@weight} cm and wight #{@weight}"

    grover = new Animal()
    grover.name = "Grover"
    grover.height = 60
    grover.weight = 35

    csoutput.insertAdjacentHTML('beforeend', "#{grover.getInfo()}<br>")

    Animal::isItBig = ->
        if @height >= 45
          "Yes"
        else
          "No"

    csoutput.insertAdjacentHTML('beforeend', "Is grover Big #{grover.isItBig()}<br>")

csoutput.insertAdjacentHTML('beforeend', "Number of Animals #{Animal.getNumOfAnimals()}<br>")

class Dog extends Animal
    sound2: "No sound"

    constructor: (name = "No name", height = 0, weight = 0) ->
        super(name, height, weight)

    makeSound: ->
        super + " and #{@sound2}"

sparky = new Dog("Sparky")

sparky.sound = "Wooof"
sparky.sound = "Grrr"

csoutput.insertAdjacentHTML('beforeend',
    "#{sparky.getInfo()}<br>")