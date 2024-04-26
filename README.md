API de Restaurante - Sistema de Mesas
Visão Geral
Esta API é desenvolvida em PHP utilizando o framework Laravel. O objetivo é fornecer um sistema de gestão de mesas para restaurantes, permitindo o gerenciamento eficiente das reservas, ocupação e disponibilidade de mesas.

Funcionalidades Principais
CRUD de Mesas: Crie, leia, atualize e delete informações sobre as mesas disponíveis no restaurante.
Reservas: Permita que os clientes façam reservas de mesas, especificando a data, horário e número de pessoas.
Gerenciamento de Disponibilidade: Mantenha o controle da ocupação das mesas e evite conflitos de reservas.
Autenticação e Autorização: Implemente autenticação para proteger as rotas da API e garantir que apenas usuários autorizados possam realizar operações.
Configuração do Ambiente
Requisitos
PHP >= 7.3
Composer
Banco de dados MySQL
Instalação
Clone este repositório: git clone https://github.com/seu-usuario/nome-do-repositorio.git
Acesse o diretório do projeto: cd nome-do-repositorio
Instale as dependências do Composer: composer install
Copie o arquivo .env.example para .env e configure as variáveis de ambiente, especialmente as relacionadas ao banco de dados.
Gere uma nova chave de aplicativo Laravel: php artisan key:generate
Execute as migrações do banco de dados: php artisan migrate
Inicie o servidor de desenvolvimento: php artisan serve
