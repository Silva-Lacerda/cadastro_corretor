---

# Cadastro de Corretores

Este projeto é uma aplicação web simples para cadastro e gerenciamento de corretores. A aplicação permite exibir, adicionar, e deletar registros de corretores em um banco de dados MySQL (função de editar pendente) .

## Funcionalidades

- Adicionar novos corretores.
- (Pendente) Editar informações de corretores existentes.
- Deletar corretores.
- Listar todos os corretores cadastrados.

## Tecnologias Utilizadas

- PHP
- MySQL
- HTML/CSS
- JavaScript

## Pré-requisitos

- [XAMPP](https://www.apachefriends.org/index.html) (ou qualquer outro ambiente de desenvolvimento PHP/MySQL)
- Navegador Web

## Instalação

1. Clone este repositório para o seu servidor local:
   ```bash
   git clone https://github.com/Silva-Lacerda/cadastro_corretor.git
   ```

2. Inicie o servidor Apache e o MySQL no XAMPP.

3. Crie o banco de dados e a tabela necessárias:
   - Abra o phpMyAdmin e crie um banco de dados chamado `corretores_db`.
   - Execute o seguinte script SQL para criar a tabela:
     ```sql
     CREATE TABLE corretores (
       id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(50) NOT NULL,
       cpf VARCHAR(11) NOT NULL,
       creci VARCHAR(20) NOT NULL
     );
     ```

4. Configure o arquivo `save_corretor.php` e `display_data.php` para se conectar ao banco de dados:
   ```php
   $servername = "localhost";
   $username = "root"; // Usuário padrão do XAMPP
   $password = ""; // Senha padrão do XAMPP
   $dbname = "corretores_db";
   ```

5. Abra o navegador e acesse o projeto:
   ```url
   http://localhost/cadastro_corretor/index.php
   ```

## Estrutura do Projeto

- `index.php`: Página principal com o formulário de cadastro e a tabela de listagem de corretores.
- `save_corretor.php`: Script para salvar corretores no banco de dados.
- `delete_corretor.php`: Script para deletar corretores do banco de dados.
- `display_data.php`: Script para buscar e exibir corretores na tabela.
- `form_validation.js`: Script JavaScript para validação do formulário.

## Como Usar

1. **Adicionar um novo corretor:**
   - Preencha os campos do formulário e clique no botão "Enviar". O corretor será adicionado à tabela.

2. **Deletar um corretor:**
   - Clique no botão "Delete" ao lado do corretor que deseja remover. Confirme a ação na janela de confirmação.


## Licença

Este projeto está licenciado sob a MIT License.

---

Desenvolvido com curiosidade e esforço 