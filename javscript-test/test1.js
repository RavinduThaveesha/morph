function checkArr(arr, callback) {
  callback(arr);
}

let arr = [1, 2, 3, 4, 5];

checkArr(arr, function (arr) {
  arr.push(100);
});

console.log(arr);
