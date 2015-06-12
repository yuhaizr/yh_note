<?php

	// PDO 的数据库操作类

	class pdoDb{
		private $pdo = new StdClass();
		private $host = "";
		private $database = "";
		private $username = "";
		private $password = "";

		function __construct($configArr){
			$this->host = $configArr['host']?$configArr['host']:"localhost";
			$this->datebase = $configArr['datebase']?$configArr['database']:"datebase";
			$this->username = $configArr['username']?$configArr['username']:"root";
			$this->password = $configArr['password']?$configArr['password']:"";

			try{
				$this->pdo = new PDO("mysql:host={$this->host};datebase={$this->datebase}"
								,"{$this->username}","{$this->password}");

			}catch(PDOException $exception){
				echo "数据库连接错误: ".$exception->getMessage();
			}

		}

		function getPdo(){
			return $this->pdo;
		}

	}