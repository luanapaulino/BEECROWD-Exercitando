var input = require('fs').readFileSync('stdin', 'utf8');
var lines = input.split('\n');

var notaA = parseFloat(lines.shift())
var notaB = parseFloat(lines.shift())
var notaC = parseFloat(lines.shift())
var media = ((notaA * 2) + (notaB * 3) + (notaC * 5)) / 10

console.log("MEDIA = " + media.toFixed(1))