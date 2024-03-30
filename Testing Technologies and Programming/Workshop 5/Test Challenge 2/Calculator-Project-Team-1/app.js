const calculator = () => {
    //fetching the DOMs
    let clearEntry = document.getElementById("delete");
    let clear = document.getElementById("clear");
    let percent = document.getElementById("percent");
    let decimal = document.getElementById("decimal");
    let zero = document.getElementById("zero");
    let one = document.getElementById("one");
    let two = document.getElementById("two");
    let three = document.getElementById("three");
    let four = document.getElementById("four");
    let five = document.getElementById("five");
    let six = document.getElementById("six");
    let seven = document.getElementById("seven");
    let eight = document.getElementById("eight");
    let nine = document.getElementById("nine");
    let plus = document.getElementById("add");
    let minus = document.getElementById("subtract");
    let multiply = document.getElementById("multiply");
    let divide = document.getElementById("divide");
    let equals = document.getElementById("equals");
    let display = document.getElementById("output");
    //Creating a display 
    let listDisplay = [];

    //Clear the display
    clear.addEventListener("click", () => {
        listDisplay = [];
        display.value = listDisplay.join("");
    });
    //CE function
    clearEntry.addEventListener("click", () => {
        listDisplay.pop();
        display.value = listDisplay.join("");
    });

    percent.addEventListener('click', () => {
        if (listDisplay.length > 0) {
            let value = parseFloat(listDisplay.join(''));
            value = value / 100;
            listDisplay = [value.toString()];
            display.value = listDisplay.join("");
        }
    });

    decimal.addEventListener('click', () => {
        if (listDisplay.length === 0 || ['+', '-', '*', '/'].includes(listDisplay[listDisplay.length - 1])) {
            listDisplay.push("0.");
        } else {
            let lastNumber = listDisplay.pop();
            if (!lastNumber.toString().includes(".")) {
                listDisplay.push(lastNumber + ".");
            } else {
                listDisplay.push(lastNumber);
            }
        }
        display.value = listDisplay.join("");
    });


    const addNumber = (number) => {
            listDisplay.push(number);
            display.value = listDisplay.join("");
        };

        zero.addEventListener('click', () => addNumber(0));
        one.addEventListener('click', () => addNumber(1));
        two.addEventListener('click', () => addNumber(2));
        three.addEventListener('click', () => addNumber(3));
        four.addEventListener('click', () => addNumber(4));
        five.addEventListener('click', () => addNumber(5));
        six.addEventListener('click', () => addNumber(6));
        seven.addEventListener('click', () => addNumber(7));
        eight.addEventListener('click', () => addNumber(8));
        nine.addEventListener('click', () => addNumber(9));

        const addOperator = (operator) => {
            listDisplay.push(operator);
            display.value = listDisplay.join("");
        };

        plus.addEventListener('click', () => addOperator('+'));
        minus.addEventListener('click', () => addOperator('-'));
        multiply.addEventListener('click', () => addOperator('*'));
        divide.addEventListener('click', () => addOperator('/'));

        equals.addEventListener('click', () => {
            let result = eval(listDisplay.join(""));
            display.value = result;
            listDisplay = [result];
        });
    };

    document.addEventListener('DOMContentLoaded', (event) => {
        calculator();
    });

