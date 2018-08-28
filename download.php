<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Website Upload dan Download</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">

  <style type="text/css">
    body {
      padding-top: 70px;
      background: #eeeeee;
    }

    .container-body {
      background: #ffffff;
      box-shadow: 1px 1px 1px #999;
      padding: 20px;
    }
  </style>

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" target="_blank">PERPUSTAKAAN KEMENTERIAN HUKUM DAN HAM</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="upload.php">Upload</a></li>
          <li class="active"><a href="download.php">Download</a></li>
          <li><a href="edit.php">Delete</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        
          <?php
          if($_SESSION['user']){
            echo '<li><a href="profile.php">Profile</a></li>';
            echo '<li><a href="logout.php" onclick="return confirm(\'Yakin?\')">Logout</a></li>';
          }else{
            echo '<li><a href="login.php">Login</a></li>';
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container container-body">
    
       
    

  <h1>DATA PERDA</h1>
	<table id="dataTables" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>NO. INDUK</th>
                <th>JUDUL</th>
                <th>DAERAH</th>
                <th>TAHUN</th>
                <th>DOWNLOAD</th>
                
            </tr>
        </thead>
		
		<tbody>
			<?php
			
			
			$no = 1;
			$res = $conn->query("SELECT * FROM perda");
			while($row = $res->fetch_assoc()){
				echo '
				<tr>
					<td>'.$row['noinduk'].'</td>
            <td>'.$row['file_name'].'</td>
            <td>'.$row['daerah'].'</td>
            <td>'.$row['tahun'].'</td>
            <td><a href="uploads/'.$row['file_name'].'" class="btn btn-primary btn-sm">Download</a></td>
				</tr>
				';
				$no++;
			}
			?>
		</tbody>
		
	</table>
	
	<script src="jquery-1.12.0.min.js"></script>
	<script src="jquery.dataTables.min.js"></script>
    
	<script>
	$(document).ready(function() {
		$('#dataTables').DataTable();
	} );
	</script>
  
</body>
</html>