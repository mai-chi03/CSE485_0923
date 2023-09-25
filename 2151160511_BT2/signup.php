<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-around">
        <form action="" class="col-md-6 p-3 my-3 bg-light">
        <img src="cms.png" class="mx-auto d-block p-3">
        <h1 class="text-center text-uppercase"> Sign up your account</h1>
        <div class="row">
            <div class="col">
            <div class="form-group">
					<label>First Name</label>
					<div>
						<input type="text" placeholder="First Name" class="form-control" value="">
					</div>
            </div>
            </div>
            <div class="col">
                <div class="form-group">
                <label>Last Name</label>
					<div>
						<input type="text" placeholder="Last Name" class="form-control" value="">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
        			<label for="" class="col-md-2">Email</label>
        			<div class="col-sm-8">
        			<input type="text" placeholder="Email" name="email" class="form-control" value="">
        			</div>
    </div>
    <div class="form-group">
        			<label for="" class="col-md-2">UserName</label>
        			<div class="col-sm-8">
        			<input type="text" placeholder="UserName" name="name" class="form-control" value="">
        			</div>
    </div>
    <div class="row">
            <div class="col">
            <div class="form-group">
					<label>Password</label>
					<div>
						<input type="text" placeholder="Password" class="form-control" value="">
					</div>
            </div>
            </div>
            <div class="col">
                <div class="form-group">
                <label>Confirm Password</label>
					<div>
						<input type="text" placeholder="Password" class="form-control" value="">
                    </div>
                </div>
            </div>
        </div>
  <div class="row justify-content-center">
    <div class="col-4 p-3">
      <button type="button" class="btn btn-danger btn-block">Sign me up</button>
    </div>
  </div>
  <br>
  Already have an account? <a href="index.php" class="text-danger">Sign in
</div>
</div>
    </div>
</body>
