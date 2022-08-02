var input = require('fs').readFileSync('stdin', 'utf8');
var lines = input.split('\n');

var raio = parseFloat(lines.shift())
var pi = 3.14159
var volumeEsfera = ((4.0/3) * pi * (raio * raio * raio))

console.log("VOLUME = " + volumeEsfera.toFixed(3))