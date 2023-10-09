# Projeto Bikcraft

Este é um projeto base que utiliza o Symfony Framework para desenvolvimento web, com suporte a persistência de dados através do Doctrine ORM, estilização com Bootstrap e geração de páginas com Twig. Além disso, o Webpack é usado para compilar arquivos Sass em CSS.

| Tecnologia         | Descrição                                   |
| ------------------ | ------------------------------------------- |
| Symfony            | Framework PHP para desenvolvimento web     |
| Doctrine           | Biblioteca de mapeamento objeto-relacional |
| Bootstrap          | Framework de front-end para design responsivo |
| Twig               | Motor de template para o Symfony            |
| Webpack            | Empacotador de módulos JavaScript e ativos   |
| SASS/SCSS          | Pré-processador de CSS                      |
| Composer           | Gerenciador de dependências PHP              |
| npm        | Gerenciador de pacotes JavaScript           |

## Requisitos

Antes de começar, certifique-se de que o seu ambiente de desenvolvimento atenda aos seguintes requisitos:

- PHP >= 8.1
- Composer (https://getcomposer.org/)
- Node.js e npm (https://nodejs.org/)
- Symfony CLI (https://symfony.com/download) (opicional)

## Instalação

Siga os passos abaixo para configurar e executar o projeto:

1. Clone o repositório do projeto:

   ```
   git clone https://github.com/seu-usuario/seu-projeto.git
   ```
   
 3. Navegue até o diretório do projeto:
    
    ```
    cd bikcraft-PHP/
    ```

4. Instale as dependências PHP com o Composer:

    ```
   composer install
    ```

5. Instale as dependências JavaScript com o npm:
  
    ```
   npm install
    ```

6. Crie o arquivo .env.local na raiz do projeto adicione a seguinte linhe de configuração de banco:

    ```
    DATABASE_URL="mysql://<usuario>:<senha>@127.0.0.1:3306/<schema-banco-de-dados>"
    ```

7. Compile o projeto com encore:
   ```
    npm run dev
    ```
    
9. Inicie o servidor de desenvolvimento do PHP:

   ```
    php -S 0.0.0.0:8123 -t public
    ```
    
10. Agora você pode acessar o projeto em http://localhost:8123 no seu navegador.

# Uso
  - Estrutura de pastas:
    - As páginas estão localizadas no diretório ```templates/```.
    - Os arquivos de estilização estão no diretório ```assets/styles/```.
    - Os controladores Symfony estão no diretório ```src/Controller/```.
    - As entidades Doctrine estão no diretório ```src/Entity/```.

  - Paginas:
    - ```/bicicleta``` te leva a landing page de bicicletas.
    - ```/bicicleta/admin``` te leva a área de administração das bicicletas em estoque.
   
   - End-points:
      | Nome da Rota                  | Método  | Host  | Caminho                                   |
      |:-----------------------------:|:-------:|:-----:|:----------------------------------------:|
      | app_bicicleta_listar          |   GET   |  ANY  |           /bicicleta                     |
      | app_bicicleta_form            |   GET   |  ANY  |         /bicicleta/admin                 |
      | app_bicicleta_adicionar_form  |   GET   |  ANY  |          /bicicleta/main                 |
      | app_bicicleta_list            |   GET   |  ANY  |           /bicicleta                     |
      | app_bicicleta_adicionar       |   POST  |  ANY  |  /bicicleta/admin/adicionar             |
      | app_bicicleta_editar_form     |   GET   |  ANY  | /bicicleta/admin/{bicicleta}            |
      | app_bicicleta_editar          |   POST  |  ANY  | /bicicleta/admin/edit/{bicicleta}       |
      | app_delete_bicicleta         |   POST  |  ANY  | /bicicleta/admin/delete/{id}            |



# Comandos Úteis

  - Execute o Webpack para compilar os arquivos Sass em CSS:
  
    ```shell
    npm run dev
    ```
