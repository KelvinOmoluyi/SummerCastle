<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileNType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    require_once "config_session.inc.php";


    if (in_array($fileActualExt, $allowed)){
        if ($fileError === 0){
            if ($fileSize < 1000000) {
                $fileNameNew = "Profile".$_SESSION["user_id"].".".$fileActualExt; // give a id based on current microsecond
                $fileDestination = '../uploads/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $fileinfo = $fileName;
                $fileext = explode(".", $fileinfo[0]);
                $fileactualext = $fileext[1];
                $_SESSION['fileActualExtension'] = $fileactualext;
                if (isset($_SESSION['admin'])){
                    header("Location: ../admin/account.php?success");  
                } else if ($_SESSION['user_id']) {
                    header("Location: ../entry/account.php?success");   
                }
            } else {
                echo "your file is too big";
            }
        } else {
            echo "there was an error uploading you file :(";
        }
    } else {
        echo "You cannot upload files of this type!";
    }
}