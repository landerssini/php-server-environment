<?php
// if (isset($_POST['submit'])) {
//     $file = $_FILES['file'];

//     $fileName = $_FILES['file']['name'];
//     $fileTmpName = $_FILES['file']['tmp_name'];
//     $fileSize = $_FILES['file']['size'];
//     $fileError = $_FILES['file']['error'];
//     $fileType = $_FILES['file']['type'];
    
//     $fileExt = explode('.', $fileName);
//     $fileActualExt = strtolower(end($fileExt));

//     $allowed = array('jpg', 'png', 'doc','csv', 'jpeg', 'pdf','txt', 'jpeg', 'ppt','zip', 'rar', 'svg','csv', 'mp3', 'mp4');

//     if(in_array($fileActualExt, $allowed)) {
//         if ($fileError === 0) {
//             if ($fileSize < 5000) {
//                 $fileNameNew = uniqid('', true).".".$fileActualExt;
//                 $fileDestination = 'uploads/'.$fileNameNew;
//                 move_uploaded_file($fileTmpName, $fileDestination);
//                 header('Location: index.php')
//             } else {
//                 echo 'File is too big.';
//             }
//         } else { 
//             echo 'This type of file is not allowed.';
//         }
//         } else { 
//             echo 'There was an error with you file.';
//     }

// }

//Check if the form has been submitted
if(isset($_POST['submit'])) {
    //Retrieve the file from the form
    $file = $_FILES['file'];

    //Get file properties
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    //Extract file extension
    $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);

    //Allowed extensions
    $allowedExt = array("jpg", "jpeg", "png", "pdf", "txt", "doc", "csv", "zip", "rar", "svg", "mp3", "mp4");

    //Check if extension is allowed
    if(in_array($fileExt, $allowedExt)) {
        //Check for errors
        if($fileError === 0) {
            //Check for file size
            if($fileSize < 5000000) {
                //Create unique file name
                $fileNewName = uniqid("", true).".".$fileExt;
                //Define file destination
                $fileDestination = "/Applications/XAMPP/xamppfiles/htdocs/Assembler/Files PHP/filesystem-explorer/uploads/".$fileNewName;
                move_uploaded_file($fileNewName, $fileDestination);
                header("Location: index.php?Success?".$fileNewName);
            } else {
                echo "File size too large. Maximum allowed size is 5MB.";
            }
        } else {
            echo "Error uploading the file. Error code: ".$fileError;
        }
    } else {
        echo "File type not allowed.";
    }
}
?>