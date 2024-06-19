<?php
    require_once __DIR__ .  '/../model/PlayerModel.php';
    require_once __DIR__ . '/../common/Player.php';
    class PlayerController {
        private $playerModel;
        private $player;
        public function __construct($con){
            $this->playerModel = new PlayerModel($con);
        }
        public function index(){
            return $this->playerModel->getAllPlayers();
        }
        public function create(){
            if(isset($_POST['create'])){
                $tencauthu = $_POST['tencauthu'];
                $tuoi = $_POST['tuoi'];
                $quoctich = $_POST['quoctich'];
                $vitri = $_POST['vitri'];
                $luong = $_POST['luong'];
                // Call the model's method to create a new player
                if($this->playerModel->createPlayer($tencauthu, $tuoi, $quoctich, $vitri, $luong)){
                    echo "thêm thành công <a style='color: red' href='index.php'>Danh sách cầu thủ</a>";
                }
            }else {
                // Hiển thị form thêm mới cầu thủ
                require_once 'view/create.php';
            }
        }
        public function update(){
            // kiểm tra xem id có được gửi lên từ request không
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $dataID = $this->playerModel->getPlayerById($id);
                if(isset($_POST['update'])){
                    $tencauthu = $_POST['tencauthu'];
                    $tuoi = $_POST['tuoi'];
                    $quoctich = $_POST['quoctich'];
                    $vitri = $_POST['vitri'];
                    $luong = $_POST['luong'];
                    // truyền dữ liệu sang model
                    if($this->playerModel->updatePlayer($id , $tencauthu , $tuoi , $quoctich , $vitri , $luong)){
                        echo "Update thành công <a style='color: red' href='index.php'>Danh sách cầu thủ</a>";
                    }else{
                        echo "Update thât bại";
                    }     
                } else{
                    require 'view/update.php';
                }
            }
        }
        public function delete(){
            // check id
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                if($this->playerModel->deletePlayer($id)){
                    echo "xoas thanh cong";
                    header("Location: index.php");
                    exit;
                }else{
                    echo "error";
                }
            }
        }
        public function search(){
            
        }
    }