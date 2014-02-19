<?php
/* @var $this WbPostController */
/* @var $model WbPost */

$this->breadcrumbs=array(
	'Wb Posts'=>array('index'),
	$model->oldcode,
);

$this->menu=array(
	array('label'=>'List WbPost', 'url'=>array('index')),
	array('label'=>'Create WbPost', 'url'=>array('create')),
	array('label'=>'Update WbPost', 'url'=>array('update', 'id'=>$model->oldcode)),
	array('label'=>'Delete WbPost', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->oldcode),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WbPost', 'url'=>array('admin')),
);
?>

<h1>View WbPost #<?php echo $model->oldcode; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'jiscode',
		'oldcode',
		'newcode',
		'pref_kana',
		'city_kana',
		'street_kana',
		'pref_kanji',
		'city_kanji',
		'street_kanji',
		'flg1',
		'flg2',
		'flg3',
		'flg4',
		'flg5',
		'flg6',
		'flg7',
		'flg8',
		'flg9',
		'flg10',
	),
)); ?>
