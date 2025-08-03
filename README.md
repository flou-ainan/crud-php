#### 🚧🚧🚧🚧🚧🚧🚧🚧🚧🚧🚧🚧🚧🚧🚧 $\color{yELLOW}{AINDA\ EM\ DESENVOLVIMENTO}$
# CRUD Básico com PHP e MySQL

Este é um projeto de estudo para a criação de um CRUD (Create, Read, Update, Delete) básico, utilizando PHP puro e um banco de dados MySQL. O objetivo é praticar os conceitos fundamentais do desenvolvimento web back-end com PHP.

## Funcionalidades

O projeto implementa as seguintes funcionalidades para o gerenciamento de usuários:

*   **Listar usuários:** Exibe todos os usuários cadastrados em uma tabela.
*   **Adicionar usuário:** Permite o cadastro de um novo usuário.
*   **Remover usuário:** Permite a exclusão de um usuário existente.


## Tecnologias Utilizadas

*   **Back-end:** PHP
*   **Banco de Dados:** MySQL
*   **Front-end:** HTML5, Bootstrap 5

## Como Executar o Projeto

1.  **Clone o repositório:**
    ```bash
    git clone https://github.com/flou-ainan/crud-php.git
    cd crud-php
    ```

2.  **Banco de Dados:**
    *   Crie um banco de dados no seu servidor MySQL com o nome `php_crud`.
    *   Crie a tabela `usuarios` dentro do banco de dados. Você pode usar o seguinte comando SQL:
      ```sql
      CREATE TABLE usuarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        data_de_nascimento DATE NOT NULL,
        senha VARCHAR(255) NOT NULL
      );
      ```

3.  **Configuração da Conexão:**
    *   Abra o arquivo `conexao.php` e atualize as constantes com as suas credenciais do banco de dados.

4.  **Execute o Servidor:**
    *   Utilize um ambiente de servidor local como XAMPP, WAMP, ou o servidor embutido do PHP.
    *   Navegue até a pasta do projeto no terminal e execute: `php -S localhost:8000`
    *   Acesse `http://localhost:8000` no seu navegador.
