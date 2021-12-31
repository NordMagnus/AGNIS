const r = /((\d{3})(?:\.|-))?(\d{3})(?:\.|-)(\d{4})/g;
const m = r.exec("Call 1.800.555-1212 for info");

let myArray = /d(b+)d/g.exec('cdbbdbsbz');

var re = /\w+\s/g;
var str = 'fee fi fo fum';
let myArray2 = str.match(re);
console.log(myArray);


var re = /^(?:\d{3}|\(\d{3}\))([-\/\.])\d{3}\1\d{4}$/;

