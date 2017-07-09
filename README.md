# FileZilla .bat generator

A simple class that generates .bat files for connecting to FTP accounts via FileZilla.

## Installation

Via Composer

```
composer require daniel-griffiths/filezilla-bat-generator
```


## Usage

```PHP
$filezilla = new DanielGriffiths\FileZilla;

//required settings
$filezilla->setUsername('username');
$filezilla->setPassword('password');
$filezilla->setHost('0.0.0.0');

//optional settings
$filezilla->setPath('D:\MyCustomDirectory\FileZilla.exe');
$filezilla->setPort('25');

$filezilla->generate();
```

All methods are also chainable.

```PHP
$filezilla = (new DanielGriffiths\FileZilla)
->setUsername('username')
->setPassword('password')
->setHost('0.0.0.0')
->generate();

```
