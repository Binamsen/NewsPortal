<?php

class AdminLogin extends Model{
    function __construct() {
        parent::__construct();
     
    }
    public function checkLogin($username,$password){
        $stmt = $this->db->prepare("SELECT username,password FROM adminuser WHERE username = :username AND password = :password");
        $stmt->bindParam(':username',$username);
        $stmt->bindParam(':password',$password);
        $stmt->execute();
        $rowCount = $stmt->rowCount();
        return $rowCount;
    }
    
    public function showadmin(){
        $stmt = $this->db->prepare("SELECT *FROM adminuser");
        $stmt->execute();
        $rs=$stmt->fetchAll();
         return $rs;
    }
    public function updateAdmin($uname, $pass,$date,$number,$email,$pic,$sn) {
        $stmt = $this->db->prepare("UPDATE adminuser SET username=:uname,password=:pass,Date_of_Birth=:date,Phone_number=:number,Email=:email,Picture=:pic WHERE S_N=:sn");
        $stmt->bindParam(':uname',$uname);
         $stmt->bindParam(':pass',$pass);
          $stmt->bindParam(':date',$date);
           $stmt->bindParam(':number',$number);
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':pic',$pic);
             $stmt->bindParam(':sn',$sn);
             $stmt->execute();
        
    }
    public function getadmin($adminID){
        $stmt = $this->db->prepare("SELECT * FROM adminuser WHERE S_N=:adminID");
        $stmt->bindParam('adminID',$adminID);
         $stmt->execute();
        $rs= $stmt->fetchAll();
        return $rs;
    }
    
}

