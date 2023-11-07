<?php
    include("./config.php");
    if(isset($_POST['login'])){
        $sql = "SELECT * FROM `users` WHERE `Type`='admin' AND `Username`='".$_POST['username']."' AND `Password`='".md5($_POST['password'])."'";
        $res = $conn->query($sql);
        $count = $res->fetchColumn();
        if($count>0){
            $sql2 = "SELECT * FROM `users` WHERE `Type`='admin' AND `Username`='".$_POST['username']."' AND `Password`='".md5($_POST['password'])."'";
            $res2 = $conn->query($sql2);
            $row = $res2->fetch();
            setcookie('UserID', $row['UserID'], time() + 3600, "/");
            header("location: ../index.php");
        }else{
            header("location: ../login.php?login=error");
        }
    }
    else{
        header("location: ../login.php");
    }
?>