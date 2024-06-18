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
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $tencauthu = $_POST['tencauthu'];
                $tuoi = $_POST['tuoi'];
                $quoctich = $_POST['quoctich'];
                $vitri = $_POST['vitri'];
                $luong = $_POST['luong'];
                // Call the model's method to create a new player
                $this->playerModel->createPlayer($tencauthu, $tuoi, $quoctich, $vitri, $luong);
                header("Location: view/home.php");
                exit();
            }else{
                echo "Error";
            }
            
        }
        public function update(){
            // kiểm tra xem id có được gửi lên từ request không
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $dataID = $this->playerModel->getPlayerById($id);
            }
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $tencauthu = $_POST['tencauthu'];
                $tuoi = $_POST['tuoi'];
            }
            require 'view/update.php';
        }
        // public function delete($id){
        //     if($_SERVER['REQUEST_METHOD'] === 'POST'){
        //         return $this->playerModel->deleteById($id);
        //     }  
        // }
    }