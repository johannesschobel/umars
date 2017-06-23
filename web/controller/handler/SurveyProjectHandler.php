<?php

class SurveyProjectHandler {
	public function showIntro($app) {
		return function($project = null) use ($app) {
			$app->render("project/intro.php", 
							array(
								"sProject" => $project
							)
						);
		};
	}
	
	public function showSurvey($app) {
		return function($project = null) use ($app) {
			$app->render("project/survey.php", 
							array(
								"sProject" => $project
							)
						);
		};
	}
	
	public function showResult($app) {
		return function($project = null) use ($app) {
			$aFields = $app->request()->post();
			$nFields = count($aFields);
			
			$nSumB = $aFields["pds_b1"] + $aFields["pds_b2"] + $aFields["pds_b3"] + $aFields["pds_b4"] + $aFields["pds_b5"];
			$nSumC = $aFields["pds_c1"] + $aFields["pds_c2"] + $aFields["pds_c3"] + $aFields["pds_c4"] + $aFields["pds_c5"] + $aFields["pds_c6"] + $aFields["pds_c7"];
			$nSumD = $aFields["pds_d1"] + $aFields["pds_d2"] + $aFields["pds_d3"] + $aFields["pds_d4"] + $aFields["pds_d5"];
			
			$nSumPDS = $nSumB + $nSumC + $nSumD;
			
			// save the results to the database!
			$result = R::dispense("results");
			$result->project = $project;
			$result->ip = $app->request->getIP();
			
			// note, that the timestamp is set by the database itself
			
			$result->pds_b1 = $aFields["pds_b1"];
			$result->pds_b2 = $aFields["pds_b2"];
			$result->pds_b3 = $aFields["pds_b3"];
			$result->pds_b4 = $aFields["pds_b4"];
			$result->pds_b5 = $aFields["pds_b5"];
			
			$result->pds_c1 = $aFields["pds_c1"];
			$result->pds_c2 = $aFields["pds_c2"];
			$result->pds_c3 = $aFields["pds_c3"];
			$result->pds_c4 = $aFields["pds_c4"];
			$result->pds_c5 = $aFields["pds_c5"];
			$result->pds_c6 = $aFields["pds_c6"];
			$result->pds_c7 = $aFields["pds_c7"];
			
			$result->pds_d1 = $aFields["pds_d1"];
			$result->pds_d2 = $aFields["pds_d2"];
			$result->pds_d3 = $aFields["pds_d3"];
			$result->pds_d4 = $aFields["pds_d4"];
			$result->pds_d5 = $aFields["pds_d5"];
			
			R::store($result);
			
			$aAnswers = array("überhaupt nicht", "manchmal", "oft", "fast immer");
			$aCategory = array("b" => "Wiedererleben", "c" => "Vermeidung", "d" => "Übererregung");
			
			$app->render("project/result.php",
							array(
								"sProject" => $project,
								"aFields" => $aFields,
								"aAnswers" => $aAnswers,
								"aCategory" => $aCategory,
								"nSumPDS" => $nSumPDS
							) 
						);
		};
	}
}

?>