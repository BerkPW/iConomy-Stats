<?php require_once 'settings.php'; ?>
<!DOCTYPE html>
<html lang="tr">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $set["site_name"]; ?></title>
		<link rel='stylesheet' href='css/bootstrap.css'> 
	</head>
	<body>
		<div class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>

	      </button> <a class="navbar-brand" href="#"><?php echo $set["site_name"]; ?></a>

	    </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <!-- [Sağ Menü] -->
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="index.php">Home</a></li>
	      </ul>
	      <!-- [Sol Menü] -->
	  	<script type="text/javascript">
			document.write(unescape('%3C%75%6C%20%63%6C%61%73%73%3D%22%6E%61%76%20%6E%61%76%62%61%72%2D%6E%61%76%20%6E%61%76%62%61%72%2D%72%69%67%68%74%22%3E%0A%20%20%20%20%20%20%20%20%3C%6C%69%3E%3C%61%20%68%72%65%66%3D%22%68%74%74%70%3A%2F%2F%62%65%72%6B%2E%70%77%22%3E%40%42%65%72%6B%50%57%3C%2F%61%3E%3C%2F%6C%69%3E%0A%20%20%20%20%20%20%3C%2F%75%6C%3E'));
		</script>
	    </div>
	  </div>
	</div>


	<div class="container" style="margin-top: 80px">
	  <div class="panel panel-primary">
	    <div class="panel-heading">
	      <h3 class="panel-title">iConomy Top <?php echo $set["table_limit"]; ?></h3>
	    </div>
	    <table class="table table-striped table-hover ">
	      <thead>
	        <tr>
	          <th>#</th>
	          <th>Player</th>
	          <th>Balance</th>
	        </tr>
	      </thead>
	      <tbody>
			<?php 

				$query = $db->query("SELECT * FROM iConomy ORDER BY balance DESC LIMIT 0,".$set["table_limit"], PDO::FETCH_ASSOC);
				if ( $query->rowCount() ){
			     	foreach( $query as $row ){
						$head = ($set["head"] == "1") ? '<img src="https://minotar.net/avatar/'.$row["playername"].'/17" class="img-circle">' : null ;
						echo "<tr>";
						echo "<td>".$row["id"]."</td>";
						echo "<td>".$head." ".$row["playername"]."</td>";
						echo "<td>".$row["balance"]."</td>";
						echo "</tr>";
			     	}
				}

			?>
	      </tbody>
	    </table>
	  </div>
	</div>

	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	</body>
</html>