/* Coding Task 1

Write a function expression called reverseString(). It should accept a single argument representing a person's name. It should return a reverse string as shown below:

reverseString("John");
reverseString("James"); */

function reverseString(string) {
    // split method to return an array
    let splitString = string.split("");
    // use the reverse method to reverse the array
    let revArray = splitString.reverse();
    // use the join method to join the array into a new string
    let newString = revArray.join("");

    return newString;
}

console.log(reverseString("John"))
console.log(reverseString("James"))

/* Coding Task 2

Write a function expression called reverseArray(). It should accept an array as a single argument. It should return a reversed array and it should work for any data type.

reverseArray([1, 2, 3, 4, 5]);
reverseArray(["I", "like", "JavaScript"]); */

//const array = [1,2,3,4,5,6,"taco"];

function reverseArray(array){
    return array.reverse();

}

console.log(reverseArray([1,2,3,4,5]))
console.log(reverseArray(["I", "like", "JavaScript"]))



/* Coding Task 3

Write a function expression called mostExpensiveItem(). It should accept an array of items as a single argument. It should return the item that has the most cost tied up, calculated by the amount in stock * price.

Test Data


*/



function mostExpensiveItem(array) {

let rows = array.length;
let totalPrice = 0;
let maxPrice = 0;
//let indexRow = 0;
let mostExpensive =0;


    for (let i = 0; i < rows; i++) {
    totalPrice = array[i]["price"]*array[i]["stock"];
        if (totalPrice > maxPrice) {
            maxPrice = totalPrice;
            mostExpensive = array[i]
        }   
        else {
            maxPrice = maxPrice;
            mostExpensive = mostExpensive;
        }

    }
    return mostExpensive
}

let items = [{ item: "irn bru", price: 3.25, stock: 50 },
    { item: "fanta", price: 3.98, stock: 45 },
    { item: "diet coke", price: 4.40, stock: 38 }, 
    { item: "7up", price: 3.99, stock: 42 }, 
    ];

console.log(mostExpensiveItem(items))