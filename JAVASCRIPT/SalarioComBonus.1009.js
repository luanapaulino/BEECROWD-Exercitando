var input = require('fs').readFileSync('stdin', 'utf8');
var lines = input.split('\n');

var vendedor = lines.shift()
var salarioFixo = parseFloat(lines.shift())
var valorVendas = parseFloat(lines.shift())

var novoSalario = (valorVendas * (15/100)) + salarioFixo

console.log("TOTAL = R$ " + novoSalario.toFixed(2))