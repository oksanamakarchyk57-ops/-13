const arr = [5, 2, 9, 1, 7];

const avg = arr.reduce((a, b) => a + b, 0) / arr.length;
const max = Math.max(...arr);
const min = Math.min(...arr);
const sorted = [...arr].sort((a, b) => a - b);

console.log(avg, max, min, sorted);

const users = [
  { name: "Іра", age: 20 },
  { name: "Олег", age: 16 },
  { name: "Анна", age: 25 }
];

const adults = users.filter(u => u.age > 18);
const names = users.map(u => u.name);
const avgAge = users.reduce((s, u) => s + u.age, 0) / users.length;

console.log(adults, names, avgAge);

const goods = [
  { name: "Хліб", category: "Їжа" },
  { name: "Молоко", category: "Їжа" },
  { name: "Футболка", category: "Одяг" }
];

const grouped = goods.reduce((acc, item) => {
  acc[item.category] = acc[item.category] || [];
  acc[item.category].push(item.name);
  return acc;
}, {});

console.log(grouped);

const students = {
  Іра: { math: 10, eng: 12 },
  Олег: { math: 8, eng: 9 }
};

for (let name in students) {
  const grades = Object.values(students[name]);
  const avg = grades.reduce((a, b) => a + b) / grades.length;
  console.log(name, avg);
}

const name = ["Іра", "Олег", "Анна"];

const obj = Object.fromEntries(
  names.map(n => [n, n.length])
);

console.log(obj);