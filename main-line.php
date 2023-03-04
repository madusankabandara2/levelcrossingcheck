<!DOCTYPE html>
<?php  $user = 'root'; $password = ''; $database = 'db_project'; $servername='localhost'; $mysqli = new mysqli($servername, $user, $password, $database); if ($mysqli->connect_error) { die('Connect Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error); } $sql = " SELECT * FROM tbl_project "; $result = $mysqli->query($sql); $mysqli->close(); ?>
<?php  $con = mysqli_connect('localhost', 'root', '','db_project'); if(isset($_POST["Export"])){ header('Content-Type: text/csv; charset=utf-8'); header('Content-Disposition: attachment; filename=data.csv'); $output = fopen("php://output", "w"); fputcsv($output, array(`dbId`, `dbDate`, `dbName`, `dbTime`, `dbACPower`, `dbDCPower`, `dbLR`, `dbLight`, `dbStatus`)); $query = "SELECT * from tbl_project"; $result = mysqli_query($con, $query); while($row = mysqli_fetch_assoc($result)) { fputcsv($output, $row); } fclose($output); } ?>   
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Main Line</title>

    
<link rel="stylesheet" href="https://res.cloudinary.com/slrtest/raw/upload/v1655314248/slrtest/templatemo-stand-blog_uarkec.css">
<link rel="stylesheet" href="https://res.cloudinary.com/slrtest/raw/upload/v1655314397/slrtest/bootstrap.min_eaupcc.css">
<link rel="stylesheet" href="https://res.cloudinary.com/slrtest/raw/upload/v1655314521/slrtest/main_rojzpx.css">

<meta name="robots" content="noindex, follow">
<body>
	<div id="preloader">
	<div class="jumper">
	</div>
	</div>  

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>SLR Crossing Check<br> Main Line<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home
                  
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>



<section class="">
<div class="limiter">
<div class="container-table100">
<div class="wrap-table100">
<div class="table100">
<table>
<form class="form-horizontal" action="" method="post" name="upload_excel">
<input type="submit" name="Export" class="btn btn-success" value="export to excel"/>
</form>
<thead>
<tr class="table100-head">
<th class="column1">Date</th>
<th class="column2">Time</th>
<th class="column3">Name - Code</th>
<th class="column4">AC</th>
<th class="column5">DC</th>
<th class="column6">LR</th>
<th class="column7">Light</th>
<th class="column8">Status</th>
</tr>
<?php
                
while($rows=$result->fetch_assoc())
{
?>
</thead>
<tbody>
<tr>
<td class="column1"><?php echo $rows['dbDate'];?></td>
<td class="column2"><?php echo $rows['dbTime'];?></td>
<td class="column3"><?php echo $rows['dbName'];?></td>
<td class="column4"><?php echo $rows['dbACPower'];?></td>
<td class="column5"><?php echo $rows['dbDCPower'];?></td>
<td class="column6"><?php echo $rows['dbLR'];?></td>
<td class="column7"><?php echo $rows['dbLight'];?></td>
<td class="column8"><?php echo $rows['dbStatus'];?></td>
</tr>
<?php
}
?>
</tbody>

</table>
</div>
</div>
</div>
</div>
</section>
<footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Behance</a></li>
              <li><a href="#">Linkedin</a></li>
              <li><a href="#">Dribbble</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>Copyright 2022 Bandarage</p>
                    
            </div>
          </div>
        </div>
      </div>
    </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://res.cloudinary.com/slrtest/raw/upload/v1655310941/slrtest/custom_bfrqgy.js"></script>
<script src="https://res.cloudinary.com/slrtest/raw/upload/v1655310995/slrtest/owl_sv6sid.js"></script>
</body>
</html>
