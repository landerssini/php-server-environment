<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Files Explorer</title>
</head>

<body>
    <div id="header">
        <a href="index.php"><img src="assets/logo.png" alt="logo" id="logo"></a>
        <img src="assets/profilePic.png" class="rounded" alt="profilePic" id="profilePic">
    </div>
    <nav class="navbar navbar-light bg-light" id="searchBar">
       
        <form class="d-flex" action='upload.php' method='POST' enctype='multipart/form-data'>
            <input class="form-control me-2" type="file" name="file">
            <button class="btn btn-outline-success mr-4" type="submit" name='submit'>Upload</button>
        </form>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        
        
    </nav>
</body>

</html>