//Create a variable via a ternary operator that assigns a string based on an expression.
const temperature = 25;
const weather = temperature > 20 ? "warm" : "cold";
console.log("weather:", weather);

//Create an object and loop through its properties, console logging each properties’ value
const myObject = {
  name: "Samantha",
  age: 22,
  city: "Manila"
};

for (let prop in myObject) {
  console.log(`${prop}: ${myObject[prop]}`);
}

//Create an array of numbers. Using the map function, create a second array of those numbers squared.
const numbers = [2, 4, 6, 8, 10];
const squaredNumbers = numbers.map(num => num * num);
console.log("Squared Numbers:", squaredNumbers);