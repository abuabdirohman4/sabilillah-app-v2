// const fs = require('fs')
// fs.rename('public/build/aseets/')

// let file = "first.docx";

// file = file.substr(0, file.lastIndexOf(".")) + ".htm";

// console.log(file)

// rename
// file

// const testFolder = "./public/build/aseets/";
const fs = require("fs");

// // fs.readdir(testFolder, (err, files) => {
// //     // files.forEach((file) => {
// //         console.log(files);
// //     // });
// // });
// fs.readdirSync(testFolder).forEach((file) => {
//     console.log(file);
// });

// const file = fs.readFileSync("public/build/aseets/app-129de89d");

// console.log(fs.lstatSync("/").isDirectory());
// console.log(require("path").dirname(require.main.filename));
// console.log(__dirname);

const path = require('path')
const notes = '/users/joe/notes.txt';

console.log(path.dirname(notes)); // /users/joe
console.log(path.basename(notes)); // notes.txt
console.log(path.extname(notes)); // .txt