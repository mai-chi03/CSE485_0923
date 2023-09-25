<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
<div class="row p-3 w-100 fixed-top" style="height: 70px;">
    <div class="col-md-2"><img src="logo.png" class="img-fluid mb-4" alt="Lỗi"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-6"><i class="bi bi-list"></i> <span class="h1"><?php $tit= &$title; echo $tit; ?></span></div>
            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search here.." >
                </div>
            </div>
            
        </div>
    </div>    
    <div class="col-md-2">
        <div class="dropdown mb-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle"></i>
            </button>
            <ul class="dropdown-menu">
                <li ><a class="dropdown-item" href="#"><i class="bi bi-person"></i> Profile</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-envelope"></i> Inbox</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-key"></i> Change Paswword</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
            </ul>
        </div>
    </div>

</div>
    
</body>
</html>