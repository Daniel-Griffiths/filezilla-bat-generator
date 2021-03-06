<?php

namespace DanielGriffiths;

/**
 * FileZilla - A class for generating bat files for FileZilla
 * 
 * @package FileZilla
 * @author Daniel Griffiths (daniel-griffiths)
 */
class FileZilla 
{
	/**
	 * Filename of the generated .bat file
	 * 
	 * @var string
	 */
	protected $filename = 'filezilla.bat';

	/**
	 * Path to the FileZilla .exe file
	 * 
	 * @var string
	 */
	protected $path = 'C:\Program Files\FileZilla FTP Client\filezilla.exe';

	/**
	 * FTP Host
	 * 
	 * @var string
	 */
	protected $host = '';

	/**
	 * FTP Username
	 * 
	 * @var string
	 */
	protected $username = '';

	/**
	 * FTP Password
	 * 
	 * @var string
	 */
	protected $password = '';

	/**
	 * FTP Port
	 * 
	 * @var integer
	 */
	protected $port = 21;

	/**
	 * Sets the FTP Path
	 * 
	 * @param string $path 
	 */
	public function setPath($path)
	{
		$this->path = $path;

		return $this;
	}

	/**
	 * Sets the filename for the .bat file
	 * 
	 * @param string $filename 
	 */
	public function setFilename($filename)
	{
		$this->filename = $filename;

		return $this;
	}

	/**
	 * Sets the FTP Host
	 * 
	 * @param string $host 
	 */
	public function setHost($host)
	{
		$this->host = $host;

		return $this;
	}

	/**
	 * Sets the FTP Username
	 * 
	 * @param string $username 
	 */
	public function setUsername($username)
	{
		$this->username = $username;

		return $this;
	}

	/**
	 * Sets the FTP Password
	 * 
	 * @param string $password 
	 */
	public function setPassword($password)
	{
		$this->password = $password;

		return $this;
	}

	/*
	 * Sets the FTP Port
	 * 
	 * @param string $port 
	 */
	public function setPort($port)
	{
		$this->port = $port;

		return $this;
	}

	/**
	 * Generates the BAT file
	 * 
	 * @return boolean
	 */
	public function generate()
	{
		$bat = 'start "" "' . 
		$this->path . '" ftp://' . 
		$this->username . ':' . 
		$this->password . '@' . 
		$this->host . ':' . 
		$this->port;

		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-disposition: attachment; filename=' . $this->filename);
		header('Content-Length: '.strlen($bat));
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Expires: 0');
		header('Pragma: public');
	    
		echo $bat;
	}
}
