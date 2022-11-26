<?php
global $conn, $dbname;

class connectSQL{

    public function buildsqlconnect(){
        $servername = "localhost";
        $sqlusername = "webhook";
        $password = "Iu1lwfrGmyivSRyW";
        $dbname = 'bitnami_moodle'; 
        $conn = new mysqli($servername, $sqlusername, $password, $dbname);

        // check
        if ($conn->connect_error) {
            die("die: " . $conn->connect_error);
        }
        return $conn;
    }
    public function mysqlline($conn, $sql){
        if ($conn->query($sql) === TRUE) {
            return 1;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    public function select($conn, $tbname, $column, $searchcolumn,$content)
    {
        $sql = "SELECT id, ". $column . " FROM " . $tbname . " WHERE " . $searchcolumn . " = '" . $content."'";
        //get sql query
        $result = $conn->query($sql);
        // print_r($result);
        try{
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $record = array(
                        'id' => strval($row["id"]),
                        'username' => $row["username"],
                    );
                }
            } else {
                $record = 0;
            }
        }catch (Exception $e){
            echo 'error: '. $e->getMessage();
        }
//        $conn->close();
        return $record;
    }
    // $sql is an array
    public function insertmsg($conn, $tbname, $msgtext,$msgtype,$userid){
        $sql = "INSERT INTO " . $tbname . " (msgtext,msgtype,userid,timecreated) VALUES (" . "'". $msgtext . "'," . $msgtype . ",".  $userid .",". time() . ")";
//        echo $sql . '<br>';
//        $sql = "INSERT INTO mdl_local_messagedemo (msgtext,msgtype,userid) VALUES ('abc','1','7')";
        if ($conn->query($sql) === TRUE) {
            return 1;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
//        $conn->close();
    }
    public function insertsession($conn, $sessionid, $userid){
        $tbname = 'mdl_local_messagedemo_sessionid';
        $sql = "INSERT INTO " . $tbname . " (sessionid,userid) VALUES (" ."'". $sessionid . "',". $userid .")";
        if ($conn->query($sql) === TRUE) {
            return 1;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}