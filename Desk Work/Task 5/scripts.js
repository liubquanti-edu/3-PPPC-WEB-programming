function averageOfElementsLessThanX(array, X) {
    // Фільтруємо елементи, які менше X
    const filteredArray = array.filter(element => element < X);
  
    // Обчислюємо суму елементів
    const sum = filteredArray.reduce((acc, currentValue) => acc + currentValue, 0);
  
    // Обчислюємо середнє арифметичне
    const average = sum / filteredArray.length;
  
    return average;
  }
  
  // Приклад використання функції з масивом [3, 7, 2, 9, 5] та числом X, введеним з клавіатури
  const array = [3, 7, 2, 9, 5];
  const X = parseInt(prompt('Введіть число X:')); // Зчитуємо число X з клавіатури
  
  const result = averageOfElementsLessThanX(array, X);
  console.log(`Середнє арифметичне елементів менших за ${X} у заданому масиві: ${result}`);
  