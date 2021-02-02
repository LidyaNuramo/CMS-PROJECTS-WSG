<!doctype html>

<html lang="en">

  <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="CSS/index.css">
		<title>Lidya Nuramo - CMS Project </title>
  </head>

  <body background="images/pattern 2.jpg">  
    <section style="font-size: 15pt;color:black;">
      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <a class="nav-link active" aria-current="page" href="#">Lidya Nuramo CMS project</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Exercies
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="add.php">Exercise 1</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="view.php">Exercise 2</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Account
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="profile.php">Change password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="process.php?action=logout">Log Out</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
            <font color="black" size="3">Keyword: </font>
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id='search' name="Keyword" required>
            <font color="black" size="3">Type: </font>
            <select class="form-control" id="exampleFormControlSelect1" name="type" required>
              <option value="Name" >Name</option>
              <option value="CityName" >City</option>
            </select>
            <input type="submit" class="btn btn-outline-primary" name="submit" value="Search">
          </form>
        </div>
      </nav>
    </section> 
		<div class="all">
			<div class="container" style="margin-top: 80px;margin-left:-100px;font-size: 200%;">
				<h1>Exercises</h1>
				<p><h2>Student Name: Lidya Nuramo</h2></p>
				<p><h2>Student ID: 030794</h2></p>
				<h3>
					<p><a href="Exercise1">Exercies 1.</a></p>
					<p><a href="Exercise2">Exercies 2.</a></p>
					<p><a href="Exercise3">Exercies 3.</a></p>
				</h3>
			</div>
		</div>
		<div class="Footer" id="Footer">
			<p align="right" style="margin-right: 10px;margin-top: 50px;color: white;"> © 2021, Lidya Nuramo </p>
		</div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
		<script src="JS/scripts.js" type="text/javascript"></script>
	</body>
</html>
