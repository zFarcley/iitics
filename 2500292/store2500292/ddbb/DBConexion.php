<?php

class DBConexion {
    // Create the data conexion.
    public static function connection() {
        // We create an instance of msqli with the params :'server','user','password','database';
        // $connection = new mysqli('localhost', 'root', 'root', 'dwes');
        $connection = new mysqli("127.0.0.1", "root", "", "store2500292", "3306");
        // Call the instance and do a query to set default enconding
        if ( $connection->errno ) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        } else {
            $connection->query("SET NAMES 'utf8'");
            return $connection;
        }

    }
}