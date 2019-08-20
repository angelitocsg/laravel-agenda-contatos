# README #

Esse código-fonte faz parte de uma sequência de vídeos onde explico passo-a-passo como criar uma Agenda de Contatos utilizando o framework PHP - Laravel 5.6 com autenticação nativa.

Playlist no Youtube: https://www.youtube.com/playlist?list=PLitmYOL92_BWyr6XAY54daLVgcRKk9Wq3

## Configuração ##

Efetuar configurações necessárias no arquivo .env na raiz do projeto.

### Docker

Se utilizar o `docker-compose`, após iniciar o container da aplicação, executar o comando `php artisan migrate`.

`docker exec -it agenda-contatos-app php artisan migrate`
