<?php
    if($_COOKIE['UserID']){
        include("../config.php");
        $FIO = strtoupper($_POST['FIO']);
        $Phone = $_POST['Phone'];
        $Tanish1 = $_POST['Tanish'];
        $TanishPhone = $_POST['TanishPhone'];
        $Manzil = $_POST['Manzil'];
        $TKun = $_POST['TKun'];
        $Haqimizda = $_POST['Haqimizda'];
        $TashrifHaqida = $_POST['TashrifHaqida'];
        $UserIDs = time();// UserID
        $Type = 'student';
        $Meneger = $_COOKIE['UserID'];
echo $Tanish1;
        $sql = "INSERT INTO `users`(`id`, `UserID`, `FIO`, `Phone`, `Manzil`, `Tkun`, `Type`, `Username`, `Password`, `Tanish`, `TanishPhone`, `About`, `Haqimizda`, `Tech_Musahasis`, `Tech_About`, `InsertData`, `UpdateData`, `MenegerID`)
        VALUES (NULL,?,?,?,?,?,?,'-','-',?,?,?,?,'-','-',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,?)";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$UserIDs,$FIO,$Phone,$Manzil,$TKun,$Type,$Tanish1,$TanishPhone,$Haqimizda,$TashrifHaqida,$Meneger]);
    }else{
        header("location: ../../login.php");
    }

?>