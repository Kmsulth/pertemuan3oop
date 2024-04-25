<?php
class Database{
    var $server ="localhost";
    var $user = "root";
    var $pwd = "";
    var $db = "db_mhs";

    function connect(){
        $mysqli = new mysqli($this->server, $this->user, $this->pwd, $this->db);
        if($mysqli->connect_error){
            echo "Gagal Terkoneksi ke databases :(".$mysqli->connect_error.")";
        }
        return $mysqli;
    }
}
?>