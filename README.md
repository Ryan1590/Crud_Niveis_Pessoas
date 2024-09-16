# Clone o projeto
## git clone https://github.com/rickjshow/Painel-Adm-Casa-da-Paz.git


# Acesse o projeto
## cd seuprojeto


# Instale as dependências e o framework
## composer install --no-scripts
## npm install


# Copie o arquivo .env.example
## cp .env.example .env


# Crie uma nova chave para a aplicação
## php artisan key:generate


# Configurar o .env 

## exemplo:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=casadapaz
DB_USERNAME=root
DB_PASSWORD=

# Em seguida você deve configurar o arquivo .env e rodar as migrations com:
## php artisan migrate --seed

# Para instalar a node modules
## npm install

# Para statar o servidor
## php artisan serve