<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PDS Fragebogen</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/stylesheets/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets/stylesheets/bootstrap-theme.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
	
	  <div class="row">
		<div class="col-md-12">
			<img class="center-block img-responsive" src="/assets/images/smooth.jpg" width="500px" border="0" />
		</div>
	  </div>
	
	  <br />
	  
	  <div class="row hidden-print">
	    <div class="col-md-6">
			<a class="btn btn-lg btn-primary center-block" href="javascript:window.print()" role="button"><span class="glyphicon glyphicon-print"></span> Ergebnisse drucken</a>
		</div>
		<div class="col-md-6">
		  <a class="btn btn-lg btn-success center-block" href="/" role="button"><span class="glyphicon glyphicon-refresh"></span> Fragebogen erneut starten</a>
		</div>
      </div>
		  
	  <br />
	  
	  <div class="row">
		<div class="col-md-12">
			<?php if($nSumPDS < 36 ) { ?>
				<div class="bs-callout bs-callout-success">
					<h4>Ergebnis</h4>
					<p>Der Summenwert beträgt <?php echo($nSumPDS); ?>!</p>
				</div>
			<?php } else { ?>
				<div class="bs-callout bs-callout-danger">
					<h4>Ergebnis</h4>
					<p>Der Summenwert beträgt <?php echo($nSumPDS); ?>!</p>
				</div>
			<?php } ?>
		</div>
	  </div>
	  
	  <div class="row">
		<table class="table table-striped table-condensed">
			<thead>
				<th>ID</th>
				<th>Kategorie</th>
				<th>Antwort</th>
				<th>Wert</th>
			</thead>
			<tbody>
			<?php
				foreach($aFields as $key => $value) { ?>
					<?php 
						$tmp = explode("_", $key);
						$sCategory = substr($tmp[1],0,1);
					?>
				
					<tr>
					  <td><?php echo($key); ?></td>
					  <td><?php echo($aCategory[$sCategory]); ?></td>
					  <td><?php echo($aAnswers[$value]); ?></td>
					  <td><?php echo($value); ?></td>
					</tr>
				<?php }
			?>
			</tbody>
		</table>
	  </div>
	  
	  
	  

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/assets/javascript/bootstrap.min.js"></script>
  </body>
</html>
