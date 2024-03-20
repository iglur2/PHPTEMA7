<?php
// Função para verificar aceitação do desafio 1
function verificarAceitacao($nome, $sexo, $idade) {
   if ($idade < 25 && $sexo === "feminino") {
       return "Usuario $nome aceito";
   } else {
       return "Usuario $nome não aceito";
   }
}

// Função para ordenar números do desafio 2
function ordenarNumeros($num1, $num2, $num3) {
   $numeros = [$num1, $num2, $num3];
   sort($numeros);
   return implode(", ",$numeros);
}

// Função para calcular média do desafio 3
function calcularMediaAluno($nota1, $nota2, $nota3) {
   $media = ($nota1 + $nota2 + $nota3) / 3;
   $media = number_format($media, 2);

   if ($media >= 7) {
      return "media = $media <br> Aluno APROVADO.";
   } else {
      return "media = $media <br> Aluno REPROVADO.";
   }
}
?>