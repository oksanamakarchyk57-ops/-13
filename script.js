let a = 10;
let b = 5.5;
let text = "Hello";
let check = true;

console.log(typeof a, typeof b, typeof text, typeof check);

a = "20";
console.log(typeof a);

let obj = {
  name: "Ivan",
  age: 20,
  student: true
};

console.log(JSON.stringify(obj));

let x = Number(prompt("Число 1"));
let y = Number(prompt("Число 2"));
let z = Number(prompt("Число 3"));

let avg = (x + y + z) / 3;
console.log("Середнє:", avg);

console.log(Math.abs(x));
console.log(Math.ceil(y));
console.log(Math.pow(z, 2));

if (x + y > z && x + z > y && y + z > x) {
  console.log("Трикутник існує");
}

let max = Math.max(x, y, z);
let min = Math.min(x, y, z);

console.log("Макс:", max);
console.log("Мін:", min);

console.log(x % 2 === 0 || y % 2 === 0 || z % 2 === 0);

console.log(x > y && y < z);

let name = prompt("Ім'я");
let year = Number(prompt("Рік народження"));
let city = prompt("Місто");

let age = 2026 - year;

if (age < 18) console.log("Підліток");
else console.log("Дорослий");

if (city.toLowerCase() === "київ") {
  console.log("Столиця України");
}