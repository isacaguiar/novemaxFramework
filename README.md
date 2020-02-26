# Novemax Framework
Novemax Framework é um software de fonte aberta desenvolvido pela Novemax Soluções em TI que ajuda os desenvolvedores a construirem aplicações web de maneira rápida e fácil. Projetado em linguagem OO e implementada na linguagem de programação PHP, adotando uma abordagem baseada em padrões para o desenvolv
imento de software.

Sobre o Novemax Framework: 
O Novemax Framework é um framework, baseado em open-source pelo projeto Novemax, para auxiliar a criação de aplicações para a Web. Criado na linguagem PHP para implementação de aplicações em PHP. Possui a arquitetura para prover o desenvolvimento de aplicações utilizando o padrão de arquitetura de software MVC (Model-View-Controller).
O Novemax Framework possui um componente denominado Controller que se integra a tecnologias que fornecem suporte aos componentes Model e View.
O Novemax Framework foi desenvolvido no ano de 2014 para auxiliar no desenvolvimento de aplicações Web da Novemax Soluções em Informática e em julho de 2018 foi criada esta página no intuito de torná-la disponível para interessados.

O que são Frameworks? 
Framework é um conjunto de classes que colaboram para realizar uma responsabilidade para um domínio de um subsistema da aplicação. (Fayad e Schmidt)
Um framework para aplicações web é um framework de software designado para suportar o desenvolvimento de sites web dinâmicos, aplicações Web e serviços Web. O framework destina-se a aliviar a sobrecarga associada a atividades comuns realizadas em desenvolvimento Web.

Arquitetura: 
O Novemax Framework segue o padrão arquitetura MVC para separar em camadas o modelo de dados, as regras de negócio e a interface do usuário. Desta forma utilizando uma boa prática que promove a reutilização de código e permite que várias interfaces sejam aplicadas.
O framework fornece estrutura primária inicial, implementando o controlador para a aplicação, sendo responsável pela parte de comunicação e pela integração entre as camadas de visualização.

Principais classes do framework:
1) Action é uma classe, que estende a classe AbstractNovemaxAction, responsável pela validação de entrada, acessando as informações e determinando as informações da página que irão para o controlador.
2) Business Object é uma classe, que estende a classe NovemaxBasicBO, realiza o papel de negócio da aplicação, recebe as informações transmitidas pela Action e repassam para a Data Access Object.
3) Data Acess Object é uma classe, que estende a classe NovemaxBasicDAO, realiza as operações com os bancos de dados.

Arquivos de configuração:
1) novemax-config: arquivo de configuração onde são incluídas as classes do projeto, do framework, como outras informações de configurações gerais que podem ser utilizadas no projeto.
2) novemax-actions: arquivo que identifica uma operação requisitada pelo usuário e encaminha para a classe Action correspondente executar as operações.
