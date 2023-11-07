<?php
    include("./config/config.php");
    if(!$_COOKIE['UserID']){
        header("location: ./login.php");
    }else{
        $A_UserID = $_COOKIE['UserID'];
        $Asql = "SELECT * FROM `users` WHERE `Type`='admin' AND `UserID`='".$A_UserID."'";
        $Ares = $conn->query($Asql);
        $Arow = $Ares->fetch();
        $A_FIO = $Arow['FIO'];
        $A_Username = $Arow['Username'];
    }
?>