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
	
	<br /><br />
	  
	  <form class="form-horizontal" role="form" action="/survey/result" method="POST">
	  
		<div class="row">
			<div class="col-md-12">
				<div class="bs-callout bs-callout-info">
					<h4>Einleitung</h4>
					<p>Im Folgenden finden Sie eine Reihe von Problemen, die Menschen manchmal nach traumatischen Erlebnissen haben. Bitte lesen Sie sich jedes Problem sorgfältig durch. Wählen Sie diejenige Antwortmöglichkeit (0-3) aus, die am besten beschreibt, wie häufig Sie IM LETZTEN MONAT (d.h. in den letzten vier Wochen einschließlich heute) von diesem Problem betroffen waren. Die Fragen sollten Sie dabei auf Ihr Erlebnis auf der Intensivstation beziehen. Wenn Sie "überhaupt nicht" ankreuzen bedeutet das "überhaupt nicht oder nur einmal im letzten Monat war ich von diesem Problem betroffen", "manchmal" bedeutet "einmal oder seltener pro Woche/manchmal war ich von diesem Problem betroffen", "oft" bedeutet "2 bis 4 mal pro Woche/die Hälfte der Zeit war ich von diesem Problem betroffen" und "fast immer" bedeutet "5 mal oder öfter pro Woche/fast immer war ich von diesem Problem betroffen.</p>
				</div>
			  
				<hr />
				<!-- This is PDS Part B -->
			  
				<div class="form-group">
					<label class="col-md-6 control-label">Hatten Sie belastende Gedanken oder Erinnerungen an das Erlebnis, die ungewollt auftraten und Ihnen durch den Kopf gingen, obwohl Sie nicht daran denken wollten?</label>
					<div class="col-md-6">
						<div class="btn-group col-md-12" data-toggle="buttons">
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_b1" value="0">überhaupt nicht
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_b1" value="1">manchmal
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_b1" value="2">oft
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_b1" value="3">fast immer
							</label>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-6 control-label">Hatten Sie schlechte Träume oder Alpträume über das Erlebnis?</label>
					<div class="col-md-6">
						<div class="btn-group col-md-12" data-toggle="buttons">
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_b2" value="0">überhaupt nicht
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_b2" value="1">manchmal
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_b2" value="2">oft
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_b2" value="3">fast immer
							</label>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-6 control-label">War es, als würden Sie das Ereignis plötzlich noch einmal durchleben, oder handelten oder fühlten Sie so, als würde es wieder passieren?</label>
					<div class="col-md-6">
						<div class="btn-group col-md-12" data-toggle="buttons">
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_b3" value="0">überhaupt nicht
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_b3" value="1">manchmal
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_b3" value="2">oft
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_b3" value="3">fast immer
							</label>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-6 control-label">Belastete es Sie, wenn Sie an das Ereignis erinnert wurden (fühlten Sie sich z.B. ärgerlich, ängstlich, traurig, schuldig usw.)?</label>
					<div class="col-md-6">
						<div class="btn-group col-md-12" data-toggle="buttons">
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_b4" value="0">überhaupt nicht
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_b4" value="1">manchmal
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_b4" value="2">oft
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_b4" value="3">fast immer
							</label>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-6 control-label">Hatten Sie deutliche körperliche Reaktionen (z.B. Schweißausbruch oder Herzklopfen), wenn Sie an das Ereignis erinnert wurden?</label>
					<div class="col-md-6">
						<div class="btn-group col-md-12" data-toggle="buttons">
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_b5" value="0">überhaupt nicht
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_b5" value="1">manchmal
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_b5" value="2">oft
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_b5" value="3">fast immer
							</label>
						</div>
					</div>
				</div>
				
				<hr />
				<!-- This is PDS Part C -->
				
				<div class="form-group">
					<label class="col-md-6 control-label">Haben Sie sich bemüht, nicht an das Erlebnis zu denken, nicht darüber zu reden oder damit verbundene Gefühle zu unterdrücken?</label>
					<div class="col-md-6">
						<div class="btn-group col-md-12" data-toggle="buttons">
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c1" value="0">überhaupt nicht
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c1" value="1">manchmal
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c1" value="2">oft
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c1" value="3">fast immer
							</label>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-6 control-label">Haben Sie sich bemüht Aktivitäten, Menschen oder Orte zu vermeiden, die Sie an das Erlebnis erinnern?</label>
					<div class="col-md-6">
						<div class="btn-group col-md-12" data-toggle="buttons">
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c2" value="0">überhaupt nicht
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c2" value="1">manchmal
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c2" value="2">oft
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c2" value="3">fast immer
							</label>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-6 control-label">Konnten/Können Sie sich an einen wichtigen Bestandteil des Erlebnisses nicht erinnern? <i>Hinweis: Bitte hier nur angeben, wenn die Amnesie (Die Unfähigkeit, sich erinnern zu können) nicht medikamentös, medizinisch bzw. körperlich bedingt ist.</i></label>
					<div class="col-md-6">
						<div class="btn-group col-md-12" data-toggle="buttons">
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c3" value="0">überhaupt nicht
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c3" value="1">manchmal
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c3" value="2">oft
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c3" value="3">fast immer
							</label>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-6 control-label">Hatten Sie deutlich weniger Interesse an Aktivitäten, die vor dem Erlebnis für Sie wichtig waren, oder haben Sie diese deutlich seltener unternommen?</label>
					<div class="col-md-6">
						<div class="btn-group col-md-12" data-toggle="buttons">
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c4" value="0">überhaupt nicht
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c4" value="1">manchmal
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c4" value="2">oft
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c4" value="3">fast immer
							</label>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-6 control-label">Fühlten Sie sich Menschen Ihrer Umgebung gegenüber entfremdet oder isoliert?</label>
					<div class="col-md-6">
						<div class="btn-group col-md-12" data-toggle="buttons">
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c5" value="0">überhaupt nicht
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c5" value="1">manchmal
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c5" value="2">oft
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c5" value="3">fast immer
							</label>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-6 control-label">Fühlten Sie sich emotional abgestumpft oder taub (z.B. nicht weinen können oder sich unfähig fühlen, liebevolle Gefühle zu erleben)?</label>
					<div class="col-md-6">
						<div class="btn-group col-md-12" data-toggle="buttons">
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c6" value="0">überhaupt nicht
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c6" value="1">manchmal
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c6" value="2">oft
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c6" value="3">fast immer
							</label>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-6 control-label">Hatten Sie das Gefühl, dass sich Ihre Zukunftspläne und Hoffnungen nicht erfüllen werden (z.B. dass Sie im Beruf keinen Erfolg haben, nie heiraten, keine Kinder haben oder kein langes Leben haben werden)?</label>
					<div class="col-md-6">
						<div class="btn-group col-md-12" data-toggle="buttons">
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c7" value="0">überhaupt nicht
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c7" value="1">manchmal
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c7" value="2">oft
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_c7" value="3">fast immer
							</label>
						</div>
					</div>
				</div>
				
				<hr />
				<!-- This is PDS Part D -->
				
				<div class="form-group">
					<label class="col-md-6 control-label">Hatten Sie Schwierigkeiten, ein- oder durchzuschlafen?</label>
					<div class="col-md-6">
						<div class="btn-group col-md-12" data-toggle="buttons">
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_d1" value="0">überhaupt nicht
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_d1" value="1">manchmal
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_d1" value="2">oft
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_d1" value="3">fast immer
							</label>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-6 control-label">Zeigten Sie leicht reizbares Verhalten und Wutausbrüche (bei nur geringer oder ohne jede Provokation)?</label>
					<div class="col-md-6">
						<div class="btn-group col-md-12" data-toggle="buttons">
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_d2" value="0">überhaupt nicht
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_d2" value="1">manchmal
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_d2" value="2">oft
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_d2" value="3">fast immer
							</label>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-6 control-label">Hatten Sie Schwierigkeiten, sich zu konzentrieren (z.B. während eines Gespräches in Gedanken abschweifen; beim Ansehen einer Fernsehsendung den Faden verlieren; vergessen, was Sie gerade gelesen haben)?</label>
					<div class="col-md-6">
						<div class="btn-group col-md-12" data-toggle="buttons">
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_d3" value="0">überhaupt nicht
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_d3" value="1">manchmal
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_d3" value="2">oft
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_d3" value="3">fast immer
							</label>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-6 control-label">Waren Sie übermäßig wachsam (z.B. nachprüfen wer in Ihrer Nähe ist; sich unwohl fühlen, wenn Sie mit dem Rücken zur Türe sitzen; usw.)?</label>
					<div class="col-md-6">
						<div class="btn-group col-md-12" data-toggle="buttons">
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_d4" value="0">überhaupt nicht
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_d4" value="1">manchmal
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_d4" value="2">oft
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_d4" value="3">fast immer
							</label>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-6 control-label">Zeigten Sie eine übersteigerte Schreckreaktion? Waren Sie besonders schreckhaft (z.B. wenn jemand hinter Ihnen geht)?</label>
					<div class="col-md-6">
						<div class="btn-group col-md-12" data-toggle="buttons">
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_d5" value="0">überhaupt nicht
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_d5" value="1">manchmal
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_d5" value="2">oft
							</label>
							<label class="col-md-3 btn btn-default">
								<input type="radio" name="pds_d5" value="3">fast immer
							</label>
						</div>
					</div>
				</div>
				
				<hr />
				
				
				
				</hr />
				
				<div class="form-group">
					<div class="col-md-offset-4 col-md-4">
						<button type="submit" id="btn_submit" class="col-md-12 btn btn-success"><span class="glyphicon glyphicon-ok"></span> Zur Auswertung</button>
					</div>
				</div>
  
  
			</div>
		</div>
	  
	  </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/assets/javascript/bootstrap.min.js"></script>
	<script src="/assets/javascript/pds.js"></script>
  </body>
</html>
