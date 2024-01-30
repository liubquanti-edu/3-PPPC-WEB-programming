let operation = prompt("Введіть символ математичної операції (+, -, *, /):");
let num1 = parseFloat(prompt("Введіть перше число:"));
let num2 = parseFloat(prompt("Введіть друге число:"));

let result;

switch (operation) {
    case '+':
        result = num1 + num2;
        break;
    case '-':
        result = num1 - num2;
        break;
    case '*':
        result = num1 * num2;
        break;
    case '/':
        result = num2 !== 0 ? num1 / num2 : "Ділення на нуль!";
        break;
    default:
        result = "Помилкова операція!";
}

console.log(`Результат: ${result}`);



let answer = prompt("Продовжити роботу? (Y/N)").toUpperCase();

switch (answer) {
    case 'Y':
        console.log("Продовжуємо роботу.");
        break;
    case 'N':
        console.log("Завершуємо роботу.");
        break;
    default:
        console.log("Невірний ввід.");
}
