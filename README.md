# WebSocket

## O que é um WebSocket?

Um WebSocket é um protocolo de comunicação bidirecional que permite a troca de dados em tempo real entre um cliente e um servidor por meio de uma conexão persistente. Ele facilita a transmissão contínua de informações entre aplicações web sem a necessidade de constantes solicitações de atualização.


## Como funciona um WebSocket?

A seguir, o esquema demonstra a sequência de execução iniciando com um cliente requisitando uma página do seu site:

![Linha do tempo da arquitetura de rede](https://github.com/vinelouzada/websocket-php/assets/56182156/f533ade5-2206-42c5-b641-0998dfb26d32)

Conforme observado, após o carregamento da página da web, estabelece-se uma conexão WebSocket de volta para o seu aplicativo, onde, se tudo ocorrer adequadamente, uma **conexão permanece aberta**, permitindo que o servidor ou o cliente **enviem dados um ao outro a qualquer momento**. 

## Bate-papo ao vivo


O bate-papo é um exemplo clássico de aplicação para WebSocket, permitindo a troca instantânea de mensagens entre usuários em tempo real. Com uma conexão persistente, os participantes podem enviar e receber mensagens sem a necessidade de atualizar a página constantemente, proporcionando uma experiência de comunicação ágil e interativa.

## Como executar esta aplicação?

1. Baixe este repositorio
2. Abra o terminal e execute `composer update` para baixar e atualizar as dependências do projeto
3. Abra um servidor PHP local através do seguinte comando: `php -S localhost:8000`
4. Abra o seguinte endereco em duas abas no navegador: `localhost:8000`
5. Pronto, agora é só digitar as mensagens através do campo de input
