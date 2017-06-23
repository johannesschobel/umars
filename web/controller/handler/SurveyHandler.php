<?php

class SurveyHandler {
	public function showIntro($app) {
		return function() use ($app) {
			$app->render("default/intro.php");
		};
	}
	
	public function showSurvey($app) {
		return function() use ($app) {
			$app->render("default/survey.php");
		};
	}
	
	public function showResult($app) {
		return function() use ($app) {
			$aFields = $app->request()->post();
			$nFields = count($aFields);
			
			$nSumB = $aFields["pds_b1"] + $aFields["pds_b2"] + $aFields["pds_b3"] + $aFields["pds_b4"] + $aFields["pds_b5"];
			$nSumC = $aFields["pds_c1"] + $aFields["pds_c2"] + $aFields["pds_c3"] + $aFields["pds_c4"] + $aFields["pds_c5"] + $aFields["pds_c6"] + $aFields["pds_c7"];
			$nSumD = $aFields["pds_d1"] + $aFields["pds_d2"] + $aFields["pds_d3"] + $aFields["pds_d4"] + $aFields["pds_d5"];
			
			$nSumPDS = $nSumB + $nSumC + $nSumD;
			
			// save the results to the database!
			$result = R::dispense("results");
			$result->ip = $app->request->getIP();
			
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
			
			$app->render("default/result.php",
							array(
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