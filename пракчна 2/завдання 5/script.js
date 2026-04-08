let num = Math.floor(Math.random() * 100) + 1;
let guess;

do {
    guess = prompt("Вгадай число від 1 до 100");

    if (guess < num) {
        alert("Більше");
    } else if (guess > num) {
        alert("Менше");
    } else {
        alert("Ти вгадав!");
    }

} while (guess != num);