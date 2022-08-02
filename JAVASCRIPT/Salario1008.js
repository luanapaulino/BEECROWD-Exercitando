var input = require('fs').readFileSync('stdin', 'utf8');
var lines = input.split('\n');

var num = parseInt(lines.shift())
var horasTrabalhadas = parseInt(lines.shift())
var valorHora = parseFloat(lines.shift())

var salario = parseFloat(valorHora * horasTrabalhadas)

console.log("NUMBER = " + num)
console.log("SALARY = U$ " + salario.toFixed(2))