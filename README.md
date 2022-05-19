# Teste CRUD

- Trata-se de o desenvolvimento de um CRUD de usuários para fins de teste.

# Instruções para rodar o projeto <a name="instrucoes"></a>

### Será necessário ter instalado na sua máquina:

```
Git
PHP
Bootstrap
Node v6.0.0^
```

- Clone o repositório com o comando **git clone**:

```
git clone https://github.com/TaianeM/testeelaravel.git
```

- Entre no diretório que acabou de ser criado:

```
cd testelaravel
```

- Para o projeto funcionar na sua máquina, será necessário instalar suas dependências, para isso, utilize os seguintes comandos:

```
npm install
npm up
npm run dev
composer install
composer up
```

- Será necessário criar o arquivo "env", para especificar as credencias do banco de dados e gerar a chave da aplicação, utilize os seguintes comandos:

```
copy .env.example .env 
php artisan key:generate
```

- Para enviar as tabelas do banco de dados, é necessário, exportar as migrations, para isso, utilize o seguinte comando:

```
php artisan migrate 
```

- Pronto, agora o projeto está pronto para ser rodado localmente, utilizando o comando **php artisan serve**:

```
php artisan serve
```

## Estilização

Para realizar a estilização, foi utilizado o framework [**Bootstrap**](https://getbootstrap.com/).

# Resultado <a name="resultado"></a>

<h3>  * Tela Inicial (Read) </h3>

 ![Usuarios](https://user-images.githubusercontent.com/66003232/169416747-91dc9be5-60c5-48fc-a00a-746fb7bec237.png)
 
<h3> * Tela de inserção (Create) </h3>
 
![Screenshot 2022-05-19 at 18-56-58 Criar Usuario](https://user-images.githubusercontent.com/66003232/169417600-22db0908-de3a-43e1-b99e-f5860a8faf8a.png)

<h3> * Tela de inserção (Validações) </h3>

![Validação - Criar Usuario](https://user-images.githubusercontent.com/66003232/169417703-ef7186cc-de96-4c1d-a63a-a86d34863460.png)

<h3> * Tela de inserção (Create sucess)

![Screenshot 2022-05-19 at 19-08-39 Usuarios](https://user-images.githubusercontent.com/66003232/169418734-b81fabba-c55c-4f1a-9d7d-22dcc3a49bcc.png)

<h3> * Tela de edição (Edit) </h3>

![Screenshot 2022-05-19 at 18-59-12 Editando](https://user-images.githubusercontent.com/66003232/169417880-317dbe99-33d0-4f2a-ac53-508c829dae16.png)

<h3> * Modal de exclusão (Delete) </h3>

![Screenshot 2022-05-19 at 19-01-03 Usuarios](https://user-images.githubusercontent.com/66003232/169418010-d2525245-8104-48c0-ba18-4ba5d4613899.png)

<h3> * Mensagem de exclusão concluida </h3>

![Screenshot 2022-05-19 at 19-04-21 Usuarios](https://user-images.githubusercontent.com/66003232/169418368-4a80848a-0529-4fbd-8778-1ffa2f8af374.png)

