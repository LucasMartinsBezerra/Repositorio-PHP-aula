?php
//inicio (Coletando dados do formulario)
$nome = isset($_POST['nome'])? $_POST['nome']: 'Anonimo';
$email = $_POST['email'] ?? 'Não Informado'; //Null coalescing operator
$idade = $_POST['idade'] ?? 'Não Informado'; 

//Armazenando dados em um array
$usuario = [
    'nome' => $nome,
    'email' => $email,
    'idade' => $idade
];

//Funcao para dar boas vindas
function saudacao($nome) {
    return "Ola $nome, seja bem-vindo ao nosso sistema";
}

//Exibindo uma mensagem de boas vindas
echo saudacao($usuario ['nome']) . "<br>";
echo "Aqui estão os detalhes do seu cadastro: <br>";
echo "Nome: " . $usuario['nome'] . "<br>";
echo "Email: " . $usuario['email'] . "<br>";
echo "Idade: " . $usuario['idade'] . "<br>";
//fim
?>
