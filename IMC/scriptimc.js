function somar() {
    var numero1 = parseFloat(document.getElementById("num1").value);
    var numero2 = parseFloat(document.getElementById("num2").value);
    var imagem = document.getElementById("foto-imc");

    var soma = numero1 / (numero2 * numero2);
    var imcresultado = "";
    var grau = "";
    var nomeArquivo = ""; // Variável para o nome da imagem

    // Organizando com else if para evitar que múltiplos blocos rodem sem necessidade
    if (soma <= 18.5) {
        imcresultado = "Magreza";
        grau = "Grau 0";
        nomeArquivo = "img/sil.magra.png";
    } else if (soma < 25) {
        imcresultado = "Normal";
        grau = "Grau 0";
        nomeArquivo = "img/sil.normal.png";
    } else if (soma < 30) {
        imcresultado = "Sobrepeso";
        grau = "Grau I";
        nomeArquivo = "img/sil.obsgrau1.png";
    } else if (soma < 40) {
        imcresultado = "Obesidade";
        grau = "Grau II";
        nomeArquivo = "img/sil.obsgrau2.png";
    } else {
        imcresultado = "Obesidade grave";
        grau = "Grau III";
        nomeArquivo = "img/sil.obsgrau3.png";
    }

    // Atualiza o texto
    document.getElementById("resultado").innerText = 
        "Seu IMC é: " + soma.toFixed(2) + 
        "\nClassificação: " + imcresultado + " " + grau;

    // Atualiza e mostra a imagem
    imagem.src = nomeArquivo;
    imagem.style.display = "block";
}