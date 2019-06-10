<p align="center"><img src="https://user-images.githubusercontent.com/33224319/57905337-95f1a500-784c-11e9-83c2-34c96465f5fd.jpg"></p>

<p align="center">
    <a href="https://github.com/saaiph/saaiph/releases">
        <img src="https://img.shields.io/badge/Release-v1.5-green.svg">
    </a>
    <a href="http://php.net">
        <img src="https://img.shields.io/badge/PHP-7.1.2-purple.svg">
    </a>
        <a href="https://github.com/saaiph/saaiph/releases">
        <img src="https://img.shields.io/badge/Build-Success-Green.svg">
    </a>
    <a href="https://lbesson.mit-license.org/">
        <img src="https://img.shields.io/badge/License-MIT-blue.svg">
    </a>

</p>

>Star Solutions, é o mini framework criado em PHP, buscando facilitar o desenvolvimento e agilizar o processo de criação de Aplicações Web. Star é solução simples e de fácil entendimento, construido utilizando o padrão MVC.


## Instalação
> Necessário o composer instalado. https://getcomposer.org

```shell
No seu terminal usem o comandos a seguir . . . 

$ git clone https://github.com/danieljuniorce/StarSolution.git saaiph

Acessando a pasta do projeto . . .

$ cd saaiph

Instalando a depedências, usando o gerenciado de pacote Composer . . .

$ composer update
ou
$ composer install

```

### Comandos em Shell
```shell
//Ver listas de comando php
$ php moon list

//Iniciar o servidor local
$ php moon serve

//Criar um novo controller
$ php moon make:controller nameController

//Criar um novo model
$ php moon make:model Model
```

### Criando Router
```php
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
## Saaiph utiliza o Blade Template Engine
Documentação no site do Laravel https://laravel.com/docs/5.8/blade

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
