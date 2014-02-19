<?php

class YubiController extends Controller
{
	public function actionSakusei()
	{
		$model2=new SakuseiForm;
		
		// if it is ajax validation request
// 		if(isset($_POST['ajax']) && $_POST['ajax']==='sakusei-form')
// 		{
// 			echo CActiveForm::validate($model);
// 			Yii::app()->end();
// 		}
		
		// collect user input data
		if(isset($_POST['SakuseiForm']))
		{
			$model2->attributes=$_POST['SakuseiForm'];
			// validate user input and redirect to the previous page if valid
			//if($model->validate() && $model->login())
			//	$this->redirect(Yii::app()->user->returnUrl);
			
			$zipcode = '103-0027';
//  			$csvfile = 'KEN_ALL.CSV';
			$csvfile =  '47OKINAW1.csv';
			
			$zipcode = mb_convert_kana($zipcode, 'a', 'utf-8');
 			$zipcode = str_replace(array('-','ー'),'', $zipcode);
			
			$tmp = file_get_contents($csvfile);
			$tmp = mb_convert_encoding($tmp, 'utf-8', 'sjis-win');
			$fp  = tmpfile();
			fwrite($fp, $tmp);
			rewind($fp);
			setlocale(LC_ALL, 'ja_JP.UTF-8');
			$cnt = 0;
			$csv  = array();
			$dump  = array();
 			while ( (($data = fgetcsv($fp, 0, ";")) !== FALSE) and  ($cnt < $model2->csvFileName) ) {
// 			while ( (($data = fgetcsv($fp, 0, ",")) !== FALSE) and  ($cnt < $model2->csvFileName) ) {
				$csv = $data;
// 				$model=new WbPost;
				$cnt =+ 1;
// 				$model->jiscode = $csv[0];
// 				$model->oldcode = $csv[1];
// 				$model->newcode= $csv[2];
// 				$model->pref_kana = $csv[3];
// 				$model->city_kana = $csv[4];
// 				$model->street_kana = $csv[5];
// 				$model->pref_kanji = $csv[6];
// 				$model->city_kanji = $csv[7];
// 				$model->street_kanji = $csv[8];
// 				$model->flg1 = $csv[9];
// 				$model->flg2 = $csv[10];
// 				$model->flg3 = $csv[11];
// 				$model->flg4 = $csv[12];
// 				$model->flg5 = $csv[13];
// 				$model->flg6 = $csv[14];
//  				$model->flg7 = '1';
//   				$model->flg8 = '1';
//   				$model->flg9 = '1';
//  				$model->flg10 = '1';
//  				if($model->save() == FALSE){
//  					$model2->csvFileName = 'fail';
//  					break;
//  				} else {
//  					$model2->csvFileName = 'success';
//  				}
 				
 				//廃止したでーた
 				if (($csv[13] == '2') || ($csv[2] = '0660005') ) {
 					continue;
 				}
 				//一つの郵便番号で二以上の町域を表す場合の表示　(注5)　(「1」は該当、「0」は該当せず)
 				if ($csv[12] == '1') {
 					if (in_array($csv[2], $dump) ) {
 						continue;
 					} else  {
 						array_push($dump, $csv[2]);
 					}
 				}
 				$model3 = new WbPost2();
 				$model3->postcode = $csv[2];
 				$model3->akana     = $csv[3] .$csv[4] .$csv[5];
 				
 				if ($csv[8] == '以下に掲載がない場合') {
 					$model3->akanji     = $csv[6] .$csv[7];
 				} else {
 					$model3->akanji     = $csv[6] .$csv[7] .$csv[8];
 				}
 				
 				
				if($model3->save() == FALSE){
					$model2->csvFileName = 'fail';
					break;
				} else {
					$model2->csvFileName = $cnt.'success';
				}
			}
			fclose($fp);			
		}
		// display the login form
		
		$this->render('sakusei',array('model'=>$model2));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}