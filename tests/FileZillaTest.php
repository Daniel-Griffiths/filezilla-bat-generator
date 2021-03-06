<?php
use PHPUnit\Framework\TestCase;

class FileZillaTest extends TestCase
{   
    /**
     * @runInSeparateProcess
     */
    public function testGenerate()
    {
        $filezilla = new \DanielGriffiths\FileZilla;
        $filezilla->setUsername('username');
        $filezilla->setPassword('password');
        $filezilla->setHost('0.0.0.0');
        $filezilla->generate();
        $this->expectOutputString('start "" "C:\Program Files\FileZilla FTP Client\filezilla.exe" ftp://username:password@0.0.0.0:21');
    }

    /**
     * @runInSeparateProcess
     */
    public function testIsChainable()
    {
        $filezilla = (new \DanielGriffiths\FileZilla)
        ->setUsername('username')
        ->setPassword('password')
        ->setHost('0.0.0.0')
        ->generate();
        
        $this->expectOutputString('start "" "C:\Program Files\FileZilla FTP Client\filezilla.exe" ftp://username:password@0.0.0.0:21');
    }    
}