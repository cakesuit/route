# Cakesuit/Route plugin for CakePHP

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require cakesuit/route

```

Load Helper on your config/bootstrap.php file:
```php
<?php
...

Plugin::load('Cakesuit/Route');
```

Load Helper on your AppView.php file:
```php
<?php

public function initialize()
{
    $this->loadHelper('Cakesuit/Route.Route');
}
```

Define routes:
```php
<?php

Route::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/users', ['controller' => 'Users', 'action' => 'index'], ['_name' => 'users:index']);
    $routes->connect('/users/:id', ['controller' => 'Users', 'action' => 'view'], ['_name' => 'users:view']);
    // OR simple with method get if you use version >= 3.5.0
    $routes->get('/users', ['controller' => 'Users', 'action' => 'index'], 'users:index');
    $routes->get('/users/view/:id', ['controller' => 'Users', 'action' => 'view'], 'users:view');
});

```


Use helper on your template:
```php
<?php 
// Génarate tag A with url
// link($routename, $title, array $params = [], array $options = [])
echo $this->Route->link('user:index', 'Users');
// return <a href="/users">Users</a>
echo $this->Route->link('user:view', 'View User', ['id' => $user->id], ['title' => 'username ' . $user->username]);
// return <a href="/users/view/1" title="username Fred">View User</a>

// Generate url
// url($routename, array $params = [], $fullbase = false)
echo $this->Route->url('user:index');
// return /users
echo $this->Route->url('user:view', ['id' => $user->id], true);
// return http://localhost:8765/users/view/1
```
