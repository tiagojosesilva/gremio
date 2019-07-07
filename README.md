# Grêmio Estudantil
É uma forma de alcançar um maior número de alunos, conscientizar os demais sobre a importância do grêmio estudantil e também oferecer uma plataforma que todos tenham acesso.

## Funcionalidades:
### Notícias sobre o grêmio 
São notícias atualizadas do grêmio estudantil e do IFPE Campus Igarassu, ao todo conta com palestras, avisos, eventos, entre outros.
### Galeria de Fotos
É uma área voltada para os alunos, contendo fotos dos eventos e das atividades que acontecem no campus.
### Calendário
O usuário pode adicionar um novo evento escolhendo data, hora e local, tendo como opção de altera-lo.
## Instalação:
1- Entrar no github, através do link https://github.com/tiagojosesilva/gremio.git, clique no botão esverdeado Clone or Download. Logo depois copie o link.

2- Em seguida entre no terminal, escolha uma pasta para abrigar o projeto, como por exemplo: Área de Trabalho, logo após dê o comado cd e efetive o comando git clone somado o link que foi adquirido no botão com tom verde. Desta forma: $ git clone https://github.com/tiagojosesilva/gremio.git. Pronto! Você já tem o projeto na sua máquina.

3- Já dentro da pasta do projeto, utilize o comando $ cd database e execute o comando mysql -u root -p para ter acesso ao banco de dados. Crie uma base de dados com o nome gremio, para isso faça (CREATE DATABASE gremio;). Em seguida execute (exit) para sair do mysql.

4- No terminal, ainda na pasta database execute $ mysql -u root -p gremio < bd.sql

5- Entre na pasta do projeto (gremio) e execute o comando: php -S localhost:8000, em seguida aperte enter.

6- No navegador (internet) digite localhost:8000.

7- Agora é só utilizar nosso sistema.
## Autores
Alunos: Alex, Ana Beatriz, Guilherme Gomes, Lucas Felinto, Tiago José, Vinícius Augusto.

Professor: Alexandre Strapação.

Turma/Turno: IPI 2 Período/Manhã.
