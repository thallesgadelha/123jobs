### 123 Jobs - Aplicação Web de Busca de Empregos
![Screenshot_1](https://github.com/thallesgadelha/123jobs/assets/63134583/06ff2773-502c-4581-87ec-75e0b7a096db)
<br>
Versão do PHP 8.3.1 <br> 
Versão do Composer: 2.6.6
### Como usar o projeto?
É necessário que você tenha o Laragon (caso esteja no Windows) ou o XAMPP instalado e configurado na sua máquina. Nesse projeto usei o Laragon.

Clone/Baixe o arquivo em ZIP e coloque ele na pasta raiz do seu servidor (Laragon ou XAMPP). No caso do Laragon fica em <em>C:\laragon\www</em>

Se você estiver usando o Laragon, você pode clicar com o botão direito na interface principal do Laragon, ir para Apache > sites-enabled > auto."nome-do-projeto".test.conf.

Adicione /public ao final do DocumentRoot
<br>
![Screenshot_2](https://github.com/thallesgadelha/123jobs/assets/63134583/04262d0f-2176-4240-821d-9795a8b90123)

No arquivo <em>db.php</em>, localizado na pasta <em>config</em> na raiz do projeto, mude os parâmetros abaixos para a sua conexão com o banco de dados. Nesse casso, usei o MySQL.
<br>
![Screenshot_2](https://github.com/thallesgadelha/123jobs/assets/63134583/52154a02-52d0-407c-ab1c-016c985cacaf)

No VSCode, instale a extensão PHP Server
![Screenshot_1](https://github.com/thallesgadelha/123jobs/assets/63134583/b7979f5f-5c9b-4795-abcc-b4b32f8e15e4)

<br>

Execute o comando:
```console
composer install
```
O Composer é o gerenciador de dependências do PHP

<br>

Agora inicialize a aplicação digitando no terminal, na raiz do projeto:
```console
php -S localhost:8000 -t public
```
Nesse caso, servi a aplicação na porta 8000. Mas fica a seu critério.
