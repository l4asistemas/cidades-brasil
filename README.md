# L4A Sistemas - Cidades Brasil

Pacote Laravel 5.4 de Migrações e Seeds para popular seu banco de dados com todas as Cidades e Estados Brasileiras.

### Instalação

* Baixe o pacote via composer

```sh
$ composer require l4asistemas/cidades-brasil
```

* Adicione o CidadesBrasilServiceProvider no arquivo config/app.php

```php
'providers' => [
  //...
  L4ASistemas\CidadesBrasil\CidadesBrasilServiceProvider::class,
  //...
],
```
* Publique o arquivo de configurações

```sh
$ php artisan vendor:publish
```

Feito isso será criado o arquivo cidades-brasil.php no diretório config/

```php
return [
  'routes_cidades' => 'cidades',
  'routes_estados' => 'estados',

  'estados_table' => 'estados',
  'cidades_table' => 'cidades',
];
```

Opcionalmente você poderá configurar, nesse arquivo, os nomes dos grupos de rotas e das tabelas que serão geradas.

* Gere a migração

```sh
$ php artisan cidades-brasil:generate
```

O arquivo será criado no diretório padrão de migrações do Laravel (database/migrations)

* Agora você poderá rodar a migração

```sh
$ php artisan migrate
```

* Por fim, rode as seeds através do próximo comando para popular seu banco com as cidades e estados

```sh
$ php artisan cidades-brasil:seed
```

### Licença

The MIT License (MIT)
