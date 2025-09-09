window.onload = function() {
  document.getElementById("somar").addEventListener("click", soma);
  document.getElementById("subtrair").addEventListener("click", subtrair);
  document.getElementById("multiplicar").addEventListener("click", multiplicar);
  document.getElementById("dividir").addEventListener("click", dividir);
}

function getValor1(){ 
    try {
         return parseFloat(document.getElementById("valor1").value);
    } catch (error) {
        alert("valor invalido");
        return NaN; 
    }
}
   
function getValor2(){
    try {
         return parseFloat(document.getElementById("valor2").value);
    } catch (error) {
        alert("valor invalido");
        return NaN; 
    }
}

function soma() {
  var valor1 = getValor1();
  var valor2 = getValor2();
  if (!isNaN(valor1) && !isNaN(valor2)) {
    var resultado = valor1 + valor2;
    document.getElementById("resultado").value = resultado;
    setColor(resultado);
  } else {
    document.getElementById("resultado").value = "Erro: valor invalido";
  }
}

function subtrair() {
  var valor1 = getValor1();
  var valor2 = getValor2();
  if (!isNaN(valor1) && !isNaN(valor2)) {
    var resultado = valor1 - valor2;
    document.getElementById("resultado").value = resultado;
    setColor(resultado);
  } else {
    document.getElementById("resultado").value = "Erro: valor invalido";
  }
}

function multiplicar() {
  var valor1 = getValor1();
  var valor2 = getValor2();
  if (!isNaN(valor1) && !isNaN(valor2)) {
    var resultado = valor1 * valor2;
    document.getElementById("resultado").value = resultado;
    setColor(resultado);
  } else {
    document.getElementById("resultado").value = "Erro: valor invalido";
  }
}

function dividir() {
  var valor1 = getValor1();
  var valor2 = getValor2();
  if (!isNaN(valor1) && !isNaN(valor2)) {
    if (valor2 != 0) {
      var resultado = valor1 / valor2;
      document.getElementById("resultado").value = resultado;
      setColor(resultado);
    } else {
      document.getElementById("resultado").value = "Erro: divisão por zero";
    }
  } else {
    document.getElementById("resultado").value = "Erro: valor invalido";
  }
}

function setColor(resultado) {
  var resultadoField = document.getElementById("resultado");
  if (resultado < 0) {
    resultadoField.style.backgroundColor = "#ff7676ff";
  } else if (resultado > 0) {
    resultadoField.style.backgroundColor = "#a3ffa3ff";
  } else {
    resultadoField.style.backgroundColor = "#808080ff";
  }
}