function doubleChar(inputString, charToDouble) {
    // Перевірка чи введено рядок та символ для подвоєння
    if (typeof inputString !== 'string' || typeof charToDouble !== 'string' || charToDouble.length !== 1) {
        return "Будь ласка, введіть коректні дані: рядок і символ для подвоєння";
    }

    // Розділяємо рядок на масив символів, подвоюємо входження символу та з'єднуємо знову в рядок
    return inputString.split(charToDouble).join(charToDouble + charToDouble);
}

// Значення
let input = "Hello, world!";
let char = "l";

let result = doubleChar(input, char);
console.log(result); // Вивід результату