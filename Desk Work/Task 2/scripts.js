// Припустимо, що масив зарплат працівників - такий:
let зарплати = [500, 600, 750, 400, 900, 650];

// Збільшення зарплат менше 700 грн на 300 грн
for (let i = 0; i < зарплати.length; i++) {
    if (зарплати[i] < 700) {
        зарплати[i] += 300;
    }
}

// Вивід оновленого масиву зарплат
console.log(зарплати);