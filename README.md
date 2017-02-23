# FileZilla .bat generator

A simple class for generating .bat files for connecting to FTP accounts via FileZilla.

## Installation

Via Composer

```
composer require daniel-griffiths/filezilla-bat-generator dev-master
```


## Usage

```PHP
$filezilla = new \DanielGriffiths\FileZilla\FileZilla();

//required settings
$filezilla->setUsername('username');
$filezilla->setPassword('password');
$filezilla->setHost('0.0.0.0');

//optional settings
$filezilla->setPath('D:\MyCustomDirectory\FileZilla.exe');
$filezilla->setPort('25');

$filezilla->generate();
```
