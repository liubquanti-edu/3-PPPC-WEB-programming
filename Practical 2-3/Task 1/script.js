let a = 1;
let b = 2;
let c = 3;

let smallest = Math.min(a, b, c);

let largerNumbers = [a, b, c].filter(num => num !== smallest);
let product = largerNumbers[0] * largerNumbers[1];

if (smallest === a) {
    a = product;
} else if (smallest === b) {
    b = product;
} else {
    c = product;
}

console.log(`a = ${a}, b = ${b}, c = ${c}`);



let a = 1;
let b = 6;
let c = 5;

let discriminant = b * b - 4 * a * c;

if (discriminant > 0) {
    let root1 = (-b + Math.sqrt(discriminant)) / (2 * a);
    let root2 = (-b - Math.sqrt(discriminant)) / (2 * a);
    console.log(`Корінь 1: ${root1}, Корінь 2: ${root2}`);
} else if (discriminant === 0) {
    let root = -b / (2 * a);
    console.log(`Єдиний корінь: ${root}`);
} else {
    console.log("Рівняння не має дійсних коренів");
}
