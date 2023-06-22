## Detalhes sobre a API
A API foi desenvolvida para gerenciar a agenda do usuário. Com essa API, você pode realizar diversas operações, como cadastrar novos usuários, autenticar-se, atualizar informações, excluir registros e listar todos os usuários cadastrados.

Além disso, ao autenticar-se como usuário, você tem a capacidade de criar novos contatos na sua agenda, editar informações de contatos existentes, listar todos os contatos disponíveis e também excluir contatos, se necessário.

Um recurso importante implementado na API é a fila de e-mails. Sempre que um novo usuário é cadastrado no banco de dados, a fila de e-mails é acionada. Isso permite o envio de e-mails de forma assíncrona, garantindo que o usuário receba uma mensagem de boas-vindas ou qualquer outra comunicação relevante após o cadastro.

Com essa API, você pode ter um sistema de gerenciamento completo da agenda do usuário, com suporte para autenticação, manipulação de contatos e envio assíncrono de e-mails.
## Requisitos para rodar a API

- Tenha o docker instalado na sua máquina


## Começando 

- Clone o projeto do Github


**Dentro do projeto**

- Configure o .env 


**No terminal**


```docker 
docker compose up -d
```


```docker 
docker compose up
```


**Deixe rodando e abra outro terminal**

```docker 
docker compose exec app composer install
```

```docker
docker compose exec app php artisan key:generate
```

```docker
docker compose exec app php artisan migrate
```

**Para executar a fila de emails**

```docker
docker compose exec app php artisan queue:work
```

Feito com ❤️ por **Jéssica Melo**
