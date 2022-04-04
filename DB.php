<?php

	class DB
	{
		// Variable preparation.
		var $db_host = '';      // Host
		var $db_user = '';      // User.
		var $db_password = '';  // Password.
		var $db_name = '';      // Database name.
		var $db_link = '';      // Database link.
		var $result = 0;

		// Default constructor.
		function __construct($db_host='', $db_user='', $db_password='', $db_name='')
		{
			$this->db_host = $db_host;
			$this->db_user = $db_user;
			$this->db_password = $db_password;
			$this->db_name = $db_name;
		}

		// Open database connection.
		function open()
		{
			$this->db_link = mysqli_connect($this->db_host, $this->db_user, $this->db_password, $this->db_name);
		}

		// Execute query to MySQL.
		function execute($query="")
		{
			$this->result = mysqli_query($this->db_link, $query);
			return $this->result;
		}

		// Get result from executed query.
		function getResult()
		{
			return mysqli_fetch_array($this->result);
		}

		// Close database connection.
		function close()
		{
			mysqli_close($this->db_link);
		}
	}