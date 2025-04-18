
# Gerador de texto 

### Descrição do Projeto:

A aplicação utiliza PHP, Doctrine, MySQL, Bootstrap, HTML, CSS e JavaScript para gerar textos automaticamente com a API do ChatGPT. Os dados são lidos de uma planilha onde a coluna "conteúdo" começa vazia e os textos gerados são inseridos nela. A coluna "prompt" pode conter um prompt personalizado, enquanto um prompt geral pode ser definido na interface. As palavras-chave são processadas em fila no front-end e enviadas uma por vez ao backend, que gera os textos com base na palavra-chave e no prompt correspondente.

### Instalaçao

## 🚀 Passo a Passo para Instalação do Projeto
1. Importar o banco de dados:

Faça o upload do arquivo .sql para o seu banco de dados MySQL utilizando uma ferramenta como phpMyAdmin ou via linha de comando.

2. Configurar a conexão com o banco de dados:

Abra o arquivo src/Database/Conection.php e edite as seguintes variáveis com as suas credenciais do banco:

- $dbHost = 'localhost';
- $dbName = 'db_gerador';
- $dbUser = 'root';
- $dbPass = '';

3. Subir os arquivos no servidor:

Dentro do seu domínio ou subdomínio, crie uma pasta chamada chatgpt e faça o upload de todos os arquivos do projeto dentro dessa pasta.

## 🧭 Passo a Passo para Uso da Interface
1. Envio do arquivo CSV:

Após acessar a aplicação, você verá um campo para upload de arquivo (.csv).

Abaixo do input, há um exemplo visual demonstrando como o arquivo deve estar estruturado antes do envio.

2. Acessando as configurações:

Clique no ícone de engrenagem ⚙️, localizado na interface.

No painel de configurações, você poderá:

Definir um Prompt Geral (usado quando a linha da planilha não possui prompt personalizado).

Inserir o token da API do ChatGPT, necessário para gerar os textos corretamente.



