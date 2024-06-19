<?php
require_once __DIR__ . '/../database/Database.php';
require_once __DIR__  . '/../common/Player.php';
class PlayerModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }
    public function getAllPlayers() {
        $sql = "SELECT * FROM `cauthu` ORDER BY `id` DESC";
        $result = $this->conn->query($sql);
        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $datas = new Player($row['id'],$row['tencauthu'],$row['tuoi'],$row['quoctich'],$row['vitri'],$row['luong']);
                $data[] = $datas;
            }
        }
        return $data;
    }
    public function createPlayer($tencauthu , $tuoi , $quoctich , $vitri , $luong) {
        $sql = "INSERT INTO `cauthu`(`tencauthu`,`tuoi`,`quoctich`,`vitri`,`luong`)
                VALUES(
                '".$tencauthu."',
                '".$tuoi."',
                '".$quoctich."',
                '".$vitri."',
                '".$luong."'
                )
         ";
         if($result = $this->conn->query($sql)){
            return true;
         }else{
            return false;
         }
    }
    public function getPlayerById($id) {
        $sql = "SELECT * FROM `cauthu` WHERE `id` = '".$id."' ";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $data = new Player($row['id'], $row['tencauthu'], $row['tuoi'], $row['quoctich'], $row['vitri'], $row['luong']);
        } else {
            $data = null; // or handle it differently, e.g., throw an exception
        }
        return $data;
    }
    public function updatePlayer($id , $tencauthu , $tuoi , $quoctich , $vitri , $luong){
        $sql = "UPDATE `cauthu` SET
                `tencauthu` = '".$tencauthu."',
                `tuoi` = '".$tuoi."',
                `quoctich` = '".$quoctich."',
                `vitri` = '".$vitri."',
                `luong` = '".$luong."'
                WHERE `id` = '".$id."'
        ";
        if($result = $this->conn->query($sql)){
            return true; // Cập nhật thành công
        }else{
            return false;  // Cập nhật thất bại
        }
    }   
    public function deletePlayer($id){
        $sql = "DELETE FROM `cauthu` WHERE `id` = '".$id."'";
        return $result = $this->conn->query($sql);  
    } 
    public function searchPlayer($key){
        $sql = "SELECT * FROM `cauthu` WHERE `tencauthu` LIKE '%".$key."%' 
                OR `tuoi` LIKE '%".$key."%' 
                OR `quoctich` LIKE '%".$key."%' 
                OR `vitri` LIKE '%".$key."%'
                OR `luong` LIKE '%".$key."%' 
                ORDER BY `id` DESC 
            ";
        if($result = $this->conn->query($sql)){
            $data = [];
            if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $datas = new Player($row['id'],$row['tencauthu'],$row['tuoi'],$row['quoctich'],$row['vitri'],$row['luong']);
                $data[] = $datas;
            }
        }
            return $data;
        }
    }
}