# FileZilla .bat generator

A simple class for generating .bat files for connecting to FTP accounts via FileZilla.

## Usage

```PHP
$filezilla = new \DanielGriffiths\FileZilla\FileZilla();
$filezilla->setUsername('username');
$filezilla->setPassword('password');
$filezilla->setHost('0.0.0.0');
$filezilla->generate();
```