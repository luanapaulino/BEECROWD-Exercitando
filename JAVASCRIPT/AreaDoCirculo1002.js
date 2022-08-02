var input = require('fs').readFileSync('stdin', 'utf8');
var lines = input.split('\n');

var raio = parseFloat(lines)
var r = 3.14159
var area = r * (raio * raio)

console.log("A="+area.toFixed(4))