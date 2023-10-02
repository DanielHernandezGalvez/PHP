// const {sumatory} = require("./functions");

// printName("Daniel")
// printName("Sonia")
// console.log(sumatory(3, 4))

const fs = require("fs");
// const axios = require("axios")

// the first forces a stop
// const text = fs.readFileSync("./text.txt", "utf-8")
// console.log(text)
// console.log("Important for the app")

fs.readFile("./text.txt", "utf-8", (err, data) => {
    console.log("data")
    console.log("Reading")
})

console.log("important process")

// const { get } = require("http");
// axios
//   .get("https://rickandmortyapi.com/api/character")
//   .then((res) => console.log(res.data));

// console.log("finished");

// setTimeout(() => {
//     console.log("this been late")
// }, 1500);

// console.log("first")