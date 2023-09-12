```js
// Create a new array with a certain length
// and fill it with the content of the given array
// fill the rest with the given value
// @param {Array} arr
// @param {Number} length
// @param {Any} value

function fillArray(arr, length, value) {
  return arr.concat(Array(length).fill(value)).slice(0, length);
}

const arr = [1, 2, 3];
console.log(fillArray(arr, 5, 0)); // [1, 2, 3, 0, 0]
console.log(arr); // [1, 2, 3]
```
