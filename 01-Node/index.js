// const {sumatory} = require("./functions");

// printName("Daniel")
// printName("Sonia")
// console.log(sumatory(3, 4))

const fs = require("fs")

const text = fs.readFileSync("./text.txt", "utf-8")
console.log(text)