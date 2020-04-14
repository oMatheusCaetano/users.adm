# USERS.ADM
Este projeto foi desenvoldido para solucionar uma das provas disponibilizadas pela [Soluti](https://www.soluti.com.br).

## Stack utilizada
- [PHP](https://www.php.net/)
- [Laravel](https://laravel.com/)
- [Javascript](https://www.javascript.com/)
- [JQuery](https://jquery.com/)
- [Bootstrap](https://getbootstrap.com/)

## Sobre a aplicação
Esta aplicação tem como obetivo realizar a administração de usuários, permitindo a inclusão, vizualização e edição dos mesmos.

## Instalação e execução
#### Dependências
O primeiro passo após clonar o projeto, será baixar as dependências do projeto com o comando:

```sh
composer install
```

#### Banco de dados
Por padrão o projeto utilizará o **mysql** como banco de dados.
A alteração dos dados do banco pode ser realizada no arquivo **.env** existente na raiz do projeto. O projeto está configurado da seguinte forma:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=usersadm
DB_USERNAME=user
DB_PASSWORD=
```
Antes de rodar a aplicação é preciso que um banco de dados seja previamente criado com o mesmo nome da variável ***DB_DATABASE***.

Para realizar a criação das tabelas no banco:
```sh
php artisan migrate
```

Existem também algumas *seeds* previamente criadas que irão inserir dados automaticamente no banco de dados. Para popular o banco com estes dados basta rodar o comando:
```sh
php artisan db:seed
```

#### Rodando a aplicação
Por fim, para rodar a aplicação localmente basta executar o comando:
```sh
php artisan serve
```
Este comando irá por padrão disponibilizar a aplicação no endereço
http://localhost:8000/users


Outra opção é utilizar o servidor integrado do PHP com o comando abaixo.

```sh
php -S localhost:8080 -t public
```

É possível alterar a porta '8080' para outra desejada.
