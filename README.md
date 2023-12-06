Projeto de conclusão de curso BlendCafé

# Informações:
- Projeto utiliza docker para sua execução.
- Laravel 9
- PHP 8.2
- npm 8.5.1
- node v17.6.0
- Craftable free

# Iniciando o projeto:

Crie uma pasta para armazenar o projeto.

Baixe os arquivos.

## Comandos para rodar setup ##

# Criando projeto laravel:
- composer create-project --prefer-dist laravel/laravel blend-cafe "9.*" 

# Criando docker:
- docker-compose up -d

# Configurando craftable:
- composer require psr/simple-cache:^2.0 maatwebsite/excel
- composer require brackets/craftable
- composer require --dev brackets/admin-generator
- npm install
- npm run craftable-dev


# Comando para poder salvar normalmente arquivos criados dentro do docker
- sudo chown -R $(whoami):$(whoami) /home/lucas/TCC/blend-cafe