<?php
    function connect(){
        // $dbHost= "localhost";
        // here mysql port is 3306
        $dbHost = "localhost";
        $user= "root";
        $pass= "";
        $dbname="online_dsr";

        $conn= new mysqli($dbHost, $user, $pass, $dbname);
        //echo "connected";
        return $conn;
    }

    function closeConnect($cn){
        $cn->close();
    }
?>