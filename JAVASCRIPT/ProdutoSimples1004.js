var input = require('fs').readFileSync('stdin', 'utf8');
var lines = input.split('\n');

var n1 = parseInt(lines.shift())
var n2 = parseInt(lines.shift())
var PROD = n1 * n2

console.log("PROD = " + PROD)
