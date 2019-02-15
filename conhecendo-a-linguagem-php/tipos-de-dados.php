<?php

$nome = "fabio"; //string
$site = "www.fsweb.com.br"; //string
$idade = 26; //int
$salario = 2500.00; //float
$bloqueado = false; //boolean
$nulo = NULL; //nulo é diferente de VAZIO. Vazio já alocou espaço na memória, nulo não.

$frutas = array("abacaxi", "laranja", "manga");

//unset é usado para destruir uma ou várias váriaveis. Para várias variáveis basta separá-las por vírgula.
unset($nome);

echo "apresentando conteúdo do array = " . $frutas[2];

//o comando isset é usado para efetuar uma verificação se uma determinada variável existe.
//neste caso não será apresentado nada pois a variável $nome foi destruida anteriormente.
//se ao invés de utilizar o isset para verificar se a variável existe, fosse usado o echo direto, iria apresentar
//uma mensagem "Notice" informando que a variável não existe. Como foi feita a verificação não será exibida.

if (isset($nome)){

	echo $nome;
}

echo "</br>";

$nascimento = new DateTime();
echo "apresentando conteudo de um objeto com var_dump: </br>";
var_dump($nascimento);

?>