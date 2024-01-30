let sum = 0;
let count = 0;
let number;

do {
    number = parseFloat(prompt("Введіть число (введіть 0, щоб завершити):"));
    
    if (number > 0) {
        sum += number;
        count++;
    }
} while (number !== 0);

if (count === 0) {
    console.log("Не введено жодного додатнього числа.");
} else {
    let average = sum / count;
    console.log(`Середнє арифметичне введених чисел: ${average}`);
}



let costPerKg = parseFloat(prompt("Введіть вартість яблук за кілограм:"));
console.log("Вага (г) \t Вартість");

for (let weight = 100; weight <= 1000; weight += 100) {
    let cost = (costPerKg / 1000) * weight;
    console.log(`${weight} \t\t ${cost.toFixed(2)}`);
}
