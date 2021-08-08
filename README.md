### Project E-commerce
**Informações gerais sobre o projeto**


### Pre-requisitos

- Docker
- Docker-compose

### Tecnologias utilizadas

- Docker `20.10.5`
- Docker-compose `1.28.5`
- PHP `8.0`
- Mysql `10`
- Gulp `4.0.2`
- NPM `7.9.0`
- Node `14.16.1`


### PORTAS

|Container| Porta |
|---------|-------|
|  `PHP`  |  `80` |
| `Mysql` |`3306` |
|`Adminer`|`8080` |

#### Configurações de ambiente

No **env.ini** estão as configurações de ambiente do projeto

#### Routes do produto

|Métodos| Parâmetros | Descrição |
|---|---|---|
|`GET`| `products` | Lita todos os produtos. |
|`GET`| `product/{id}` | Retorna o produto baseado no `ID` informado. |
|`GET`| `addproduct` | Retornar a view do cadastro do produto. |
|`POST`| `addproduct` | Efetua o cadastro de um produto. |
|`POST`| `updateproduct` | Atualiza o produto baseado no `ID` informado. |
|`GET`| `deleteproduct/{id}` | Deleta o produto baseado no `ID` informado. |

#### Routes da categoria

|Métodos| Parâmetros | Descrição |
|---|---|---|
|`GET`| `categories` | Lita todas as categorias. |
|`GET`| `category/{id}` | Retorna a categoria baseada no `ID` informado. |
|`GET`| `addcategory` | Retornar a view de para criar um produto. |
|`POST`| `addcategory` | Efetua o cadastro de uma categoria. |
|`POST`| `updatecategory` | Atualiza a categoria baseada no `ID` informado. |
|`GET`| `deletecategory/{id}` | Deleta o categoria baseado no `ID` informado. |

### Iniciar projeto

```bash

### Criar e executar containers

docker-compose up -d

### instalar dependências
docker exec -it ecommerce composer install

```

### Acessar banco

Use as credenciais abaixo para acesso no Adminer.
Se for fazer o acesso por um gerenciador local usar `localhost` com a porta `3306` no lugar de `db`.

**Server**: db
**User**: root
**Senha**: 12345678
**Database**: ecommerce

### Acessar projeto

- **HOST**

**Projeto** http://localhost

> Joandysson Gama