//Question 1

let greet = name => "Hi " + name  + "!";

console.log(greet("John"))
console.log(greet("James"))

// Queston 2

let isEven = num => num % 2 === 0;

console.log(isEven(3))
console.log(isEven(2))

// Question 3

/*function counterFunc(counter) {
    if (counter > 100) {
      counter = 0;
    } else {
      counter++;
    }
    
    return counter;
  }

  console.log(counterFunc(101))
  console.log(counterFunc(50)) */

let counterFunc = counter => (counter > 100) ? 0 : counter + 1;

  console.log(counterFunc(101))
  console.log(counterFunc(50))

let counterFunc1 = counter => {
  (counter > 100) ? 0 : counter++
  return counter
}

  console.log(counterFunc1(101))
  console.log(counterFunc1(50))


//Question 4

/*function nameAge(name, age) {
    console.log("Hello " + name);
    console.log("You are " + age + " years old");
  }
*/

let nameAge = (name,age) => {
  return "Hello " + name + ". " + "You are "  + age + " years old";
}

console.log(nameAge("Yasemin Hasip", 29))

/* Question 8
function printOnly() {
    console.log("printing");
  }
*/

let printOnly = () => ("printing");

console.log(printOnly())
/* Question 6

function sum(num1, num2) {
    return num1 + num2
} 
*/

let sum = (num1, num2) => num1 + num2;

console.log(sum(3,5))