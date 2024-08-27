let numeroAtual = '';
let operacao = '';
let primeiroNumero = '';

function adicionarNumero(numero) {
    numeroAtual += numero;
    document.getElementById('resultado').value = numeroAtual;
}

function definirOperacao(op) {
    if (numeroAtual === '') return;
    if (primeiroNumero !== '') {
        calcular();
    }
    primeiroNumero = numeroAtual;
    numeroAtual = '';
    operacao = op;
}

function calcular() {
    if (primeiroNumero === '' || numeroAtual === '' || operacao === '') return;
    let resultado;
    const num1 = parseFloat(primeiroNumero);
    const num2 = parseFloat(numeroAtual);
    switch (operacao) {
        case '+':
            resultado = num1 + num2;
            break;
        case '-':
            resultado = num1 - num2;
            break;
        case '*':
            resultado = num1 * num2;
            break;
        case '/':
            if (num2 === 0) {
                alert('Não é possível dividir por zero');
                return;
            }
            resultado = num1 / num2;
            break;
        default:
            return;
    }
    atualizarResultado(resultado);
    primeiroNumero = '';
    numeroAtual = '';
    operacao = '';
}

function atualizarResultado(resultado) {
    const campoResultado = document.getElementById('resultado');
    campoResultado.value = resultado;
    if (resultado > 0) {
        campoResultado.style.backgroundColor = 'lightgreen';
    } else if (resultado < 0) {
        campoResultado.style.backgroundColor = 'lightcoral';
    } else {
        campoResultado.style.backgroundColor = 'lightgray';
    }
}

function limparResultado() {
    numeroAtual = '';
    primeiroNumero = '';
    operacao = '';
    document.getElementById('resultado').value = '';
    document.getElementById('resultado').style.backgroundColor = 'white';
}
