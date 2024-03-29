<?php 
class dbConfig {
 public $host;
 public $username;
 public $password;
 public $dab;
 public $conn;

 public function dbConnect() {
    $this->conn = mysqli_connect($this->host,$this->username,$this->password);

    if (!$this->conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
        /*echo "Connected successfully to server";*/
    }

    $db_selected = mysqli_select_db($this->conn, $this->dab);

    if (!$db_selected) {
        // if the given database doesn't exists
        // creates new database with that name
        $db_sql = 'CREATE DATABASE harsh';

        // verify the database is created
        if (mysqli_query($this->conn, $db_sql)){
            echo "Database harsh already exists or created successfully\n";
        } else {
            echo 'Error creating database: ' . mysqli_error() . "\n";
        }
    }

    // creating tables
    $table_sql = "CREATE TABLE IF NOT EXISTS users (".
    "uid INT PRIMARY KEY AUTO_INCREMENT,".
    "name VARCHAR(100),".
    "password VARCHAR(50),".
    "email VARCHAR(70) UNIQUE)";

    // verify the table is created
    if (mysqli_query($this->conn, $table_sql)) {
        /*echo "Table: users already exists or created successfully\n";*/
    } else {
        echo 'Error creating table: ' . mysqli_error() . "\n";
    }
}
}

$obj = new dbConfig();

$obj->host = 'localhost';
$obj->username = 'root';
$obj->password = '';
$obj->dab = 'harsh';
$obj->dbConnect();