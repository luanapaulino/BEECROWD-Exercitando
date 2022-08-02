var input = require('fs').readFileSync('stdin', 'utf8');
var lines = input.split('\n');

var valores = lines.shift().split(" ")
var A = parseFloat(valores.shift())
var B = parseFloat(valores.shift())
var C = parseFloat(valores.shift())
var pi = 3.14159

var AreaTrianRetan = parseFloat(A * C)/2
var AreaCirculo = parseFloat(pi * (C * C))
var AreaTrapezio = parseFloat(((A + B)/ 2) * C)
var AreaQuadrado = parseFloat(B * B)
var AreaRetangulo = parseFloat(A * B)

console.log("TRIANGULO: " + AreaTrianRetan.toFixed(3))
console.log("CIRCULO: " + AreaCirculo.toFixed(3))
console.log("TRAPEZIO: " + AreaTrapezio.toFixed(3))
console.log("QUADRADO: " + AreaQuadrado.toFixed(3))
console.log("RETANGULO: " + AreaRetangulo.toFixed(3))