<p align="center"><img src="https://user-images.githubusercontent.com/33224319/55686835-8c674a00-593c-11e9-8302-85e8ecc33aea.png"></p>

> 

# STAR SOLUTIONS

>Star Solutions, é o mini framework criado em PHP, buscando facilitar o desenvolvimento e agilizar o processo de criação de Aplicações Web. Star é solução simples e de fácil entendimento, construido utilizando o padrão MVC.


## Instalação
> Necessário o composer instalado. https://getcomposer.org
```
No seu terminal usem o comandos a seguir . . . 

$ git clone https://github.com/danieljuniorce/StarSolution.git starsolution

Acessando a pasta do projeto . . .

$ cd starsolution

Instalando a depedências, usando o gerenciado de pacote Composer . . .

$ composer update
ou
$ composer install

```

###Comandos em Shell
```
Ver listas de comando php
-> php lua list

Iniciar o servidor local
-> php lua serve

Criar um novo controller
-> php lua make:controller nameController

Criar um novo model
-> php lua make:model Model
```

### Criando Router
```
//Router instanciando controller com uma action
Router::get("url/{param}", "Controller@Action");
Router::post("url/{param}", "Controller@Action");

//Router usando function
Router::get("url/{param}", function($arg) {
    echo "param: {$arg['param']}";
});
Router::post("url/{param}", function($arg) {
    echo "param: {$arg['param']}";
});
```

## Bibliotecas de terceiros
1. EloquentORM - Laravel
2. Console - Symphony
3. TestUnit - PHPUnit
4. Dotenv - vlucas

## Framework é baseado na lincensa MIT
> para mais informações sobre a lincensa, acess o arquivo LICENSE no projeto.

## Contribuir
1. Fork it
2. Create your feature branch (git checkout -b my-new-feature)
3. Make your changes
5. Commit your changes (git commit -am 'Added some feature')
6. Push to the branch (git push origin my-new-feature)
7. Create new Pull Request
