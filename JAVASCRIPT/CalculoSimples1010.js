var input = require('fs').readFileSync('stdin', 'utf8');
var lines = input.split('\n');

var peca1 = lines.shift().split(" ")
var peca2 = lines.shift().split(" ")

var cod1 = peca1.shift()
var qtd1 = peca1.shift()
var valor1 = peca1.shift()

var cod2 = peca2.shift()
var qtd2 = peca2.shift()
var valor2 = peca2.shift()

var total = parseFloat((qtd1 * valor1) + (qtd2 * valor2))

console.log("VALOR A PAGAR: R$ " + total.toFixed(2))