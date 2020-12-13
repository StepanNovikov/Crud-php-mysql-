<?php
    function CreateDb(){
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "bookstore";

        //create connection
        $con = mysqli_connect($servername, $username, $password);


        //check Connection
        if(!$con){
            die("Connection failed: ".mysqli_connect_error());
        } 
        //Create db 
        $sql = "create database if not exists $dbname";

        if(mysqli_query($con, $sql)){
            $con = mysqli_connect($servername, $username, $password,$dbname);

            $sql = "create table if not exists books(
                    id int(11) not null auto_increment primary key,
                    book_name varchar(32) not null,
                    book_publisher varchar(20),
                    book_price float
                   );
            ";
            if(mysqli_query($con, $sql)){
                return $con;
            } else{
                "Cannot create table!";
            }
        } else {
            echo "Error while creating database ". mysqli_error($con);
        }
        
    } 