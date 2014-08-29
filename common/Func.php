<?php
namespace common;
use yii\data\Pagination;
use yii\web\UploadedFile;
class Func {
	static $dir = 'uploads';
	static public function getList($query){
		$countQuery = clone $query;
		$pages = new Pagination(['totalCount' => $countQuery->count()]);
		$models = $query->offset($pages->offset)
		->limit($pages->limit)
		->all();
		return  ['models' => $models,'pages' => $pages];
	}
	static public function uploadImage(&$model, $item){
		$upload = UploadedFile::getInstance($model, $item);
		if(!$upload) return false;
		
		$baseDir = self::$dir.'/company_'.$model->company_id;
		$fileName = $baseDir.'/'.date('YmdHis',time()).rand(1000, 9999).'.'.$upload->getExtension();
		
		if(!is_dir($baseDir)) {
			mkdir($baseDir);
		}
		if($upload->saveAs($fileName)){
			$model->$item = $fileName;
		}
	}
}