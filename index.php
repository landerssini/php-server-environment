<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Files Explorer</title>
</head>

<body>
    <div id="header">
        <a href="index.php"><img src="assets/logo.png" alt="logo" id="logo"></a>
        <img src="assets/profilePic.png" class="rounded" alt="profilePic" id="profilePic">
    </div>
    <nav class="navbar navbar-light bg-light" id="searchBar">
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </nav>
    <div id="directory">
        <?php
        $path = '/Applications/XAMPP/xamppfiles/htdocs/Assembler/Files PHP/filesystem-explorer/uploads';
        $files = array_values(array_diff(scandir($path), array('.', '..')));
        echo '<ul class="list-group">';
        foreach ($files as $file) {
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            switch ($extension) {
                case "txt":
                    $icono = "notes";
                    break;
                case "doc":
                case "docx":
                    $icono = "description";
                    break;
                case "pdf":
                    $icono = "picture_as_pdf";
                    break;
                case "csv":
                    $icono = "border_all";
                    break;
                case "jpg":
                case "png":
                    $icono = "image";
                    break;
                case "ppt":
                    $icono = "mdi mdi-file-powerpoint-box";
                    break;
                case "odt":
                    $icono = "mdi mdi-file-document-box";
                    break;
                case "zip":
                case "rar":
                    $icono = "mdi mdi-file-zip-box";
                    break;
                case "exe":
                    $icono = "mdi mdi-file-cog";
                    break;
                case "svg":
                    $icono = "mdi mdi-file-image";
                    break;
                case "mp3":
                    $icono = "mdi mdi-file-music-outline";
                    break;
                case "mp4":
                    $icono = "mdi mdi-file-video-outline";
                    break;
                default:
                    $icono = "mdi mdi-file-outline";
            };
            echo '<li class="list-group-item"
                      <span class="material-icons">'. $icono .'</span> 
                      <span>' . $file . '</span>
                  </li>';
        };
        echo '</ul>'
        ?>

    </div>
</body>

</html>