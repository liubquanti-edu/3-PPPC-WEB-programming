function визначитиОцінку(бали) {
    // Перевірка, чи введено число
    if (isNaN(бали)) {
        return "Помилка: введено не число";
    }

    // Перевірка відповідно до діапазонів балів
    if (бали >= 0 && бали <= 59) {
        return "Незадовільно";
    } else if (бали >= 60 && бали <= 74) {
        return "Задовільно";
    } else if (бали >= 75 && бали <= 89) {
        return "Добре";
    } else if (бали >= 90 && бали <= 100) {
        return "Відмінно";
    } else {
        return "Помилка: введено недопустиме число";
    }
}

// Приклад виклику функції з введеними балами
var балиСтудента = 85; // Тут можна змінити на будь-яке число для тестування
var оцінка = визначитиОцінку(балиСтудента);
console.log(оцінка); // Результат буде виведений в консоль