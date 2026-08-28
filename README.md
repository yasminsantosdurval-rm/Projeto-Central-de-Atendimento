# Projeto-Central-de-Atendimento

## Aqui vou relatar os passos que form feito!!

Projeto PHP
Sobre o projeto

Este projeto foi desenvolvido utilizando PHP, HTML e o VsCode. O objetivo principal é praticar os conceitos básicos de programação e entender como funciona uma aplicação simples utilizando PHP.

Durante o desenvolvimento, foram utilizados conceitos como variáveis, condições, entrada de dados, formulários e exibição de informações na tela.

O projeto possui dois códigos principais em PHP, sendo que cada um possui uma função dentro da aplicação.

Tecnologias utilizadas
PHP
HTML
Visual Studio Code
Navegador para testar o projeto
Como abrir o projeto

Primeiro, é necessário ter o PHP instalado no computador.

Depois de instalar o PHP, abra a pasta do projeto no Visual Studio Code.

No VS Code, abra o terminal utilizando:

`Ctrl + Shift + ``

Depois, entre na pasta onde estão os arquivos do projeto.

Para iniciar o servidor local do PHP, utilize:

php -S localhost:8000

Depois disso, abra o navegador e acesse:

http://localhost:8000

Estrutura do projeto

O projeto possui dois arquivos PHP principais:

arquivo1.php — responsável pela primeira parte da aplicação.
arquivo2.php — responsável pela segunda parte da aplicação.

Os nomes podem ser alterados de acordo com os arquivos utilizados no projeto.

Primeiro código PHP

O primeiro arquivo contém a primeira parte da aplicação.

Inicialmente, o PHP é utilizado para permitir que o servidor processe as informações antes de apresentar o resultado no navegador.

As informações podem ser armazenadas em variáveis. Uma variável é utilizada para guardar algum valor que poderá ser usado posteriormente no programa.

Exemplo:

$nome = "João";

Nesse caso, a variável $nome recebe o texto "João".

Depois disso, o código pode utilizar esse valor para realizar alguma operação ou mostrar uma informação na tela.

Também podem ser utilizadas estruturas condicionais, como if e else.

O if verifica se uma determinada condição é verdadeira.

O else é executado quando a condição do if não é verdadeira.

Exemplo:

if ($idade >= 18) {
echo "Maior de idade";
} else {
echo "Menor de idade";
}

Nesse exemplo, o programa verifica a idade e apresenta uma mensagem diferente dependendo do resultado.

Outra parte importante do PHP é o echo, utilizado para mostrar informações na página.

Exemplo:

echo $nome;

Nesse caso, o conteúdo armazenado na variável será exibido no navegador.

Segundo código PHP

O segundo arquivo continua a lógica do projeto e trabalha com outras informações ou funcionalidades.

Assim como no primeiro código, são utilizadas variáveis para armazenar dados e comandos PHP para processar essas informações.

Quando existe um formulário, o usuário pode preencher os campos e enviar os dados para o PHP.

O PHP então recebe essas informações e pode realizar alguma ação com elas.

Um exemplo de recebimento de dados é:

$_POST["nome"]

O $_POST é utilizado quando os dados são enviados por um formulário utilizando o método POST.

Também é possível utilizar $_GET quando os dados são enviados pela URL.

Depois que os dados são recebidos, o programa pode verificar as informações utilizando condições.

Por exemplo, o código pode conferir se um campo foi preenchido antes de continuar.

Isso ajuda a evitar que o programa trabalhe com informações vazias ou incorretas.

Como os dois códigos funcionam juntos

Os dois arquivos fazem partes diferentes do projeto.

O primeiro código pode ser responsável por receber ou apresentar determinadas informações, enquanto o segundo pode continuar o processamento desses dados.

De forma simples...