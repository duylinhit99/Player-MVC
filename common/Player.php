<?php

class Player {
    private $id;
    private $tencauthu;
    private $tuoi;
    private $quoctich;
    private $vitri;
    private $luong;

    public function __construct($id,$tencauthu,$tuoi,$quoctich,$vitri,$luong){
        $this->id = $id;
        $this->tencauthu = $tencauthu;
        $this->tuoi = $tuoi;
        $this->quoctich = $quoctich;
        $this->vitri = $vitri;
        $this->luong = $luong;
    }
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of tencauthu
     */ 
    public function getTencauthu()
    {
        return $this->tencauthu;
    }

    /**
     * Set the value of tencauthu
     *
     * @return  self
     */ 
    public function setTencauthu($tencauthu)
    {
        $this->tencauthu = $tencauthu;

        return $this;
    }

    /**
     * Get the value of tuoi
     */ 
    public function getTuoi()
    {
        return $this->tuoi;
    }

    /**
     * Set the value of tuoi
     *
     * @return  self
     */ 
    public function setTuoi($tuoi)
    {
        $this->tuoi = $tuoi;

        return $this;
    }

    /**
     * Get the value of quoctich
     */ 
    public function getQuoctich()
    {
        return $this->quoctich;
    }

    /**
     * Set the value of quoctich
     *
     * @return  self
     */ 
    public function setQuoctich($quoctich)
    {
        $this->quoctich = $quoctich;

        return $this;
    }

    /**
     * Get the value of vitri
     */ 
    public function getVitri()
    {
        return $this->vitri;
    }

    /**
     * Set the value of vitri
     *
     * @return  self
     */ 
    public function setVitri($vitri)
    {
        $this->vitri = $vitri;

        return $this;
    }

    /**
     * Get the value of luong
     */ 
    public function getLuong()
    {
        return $this->luong;
    }

    /**
     * Set the value of luong
     *
     * @return  self
     */ 
    public function setLuong($luong)
    {
        $this->luong = $luong;

        return $this;
    }
}