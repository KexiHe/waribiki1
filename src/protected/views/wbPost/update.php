<?php
/* @var $this WbPostController */
/* @var $model WbPost */

$this->breadcrumbs=array(
	'Wb Posts'=>array('index'),
	$model->oldcode=>array('view','id'=>$model->oldcode),
	'Update',
);

$this->menu=array(
	array('label'=>'List WbPost', 'url'=>array('index')),
	array('label'=>'Create WbPost', 'url'=>array('create')),
	array('label'=>'View WbPost', 'url'=>array('view', 'id'=>$model->oldcode)),
	array('label'=>'Manage WbPost', 'url'=>array('admin')),
);
?>

<h1>Update WbPost <?php echo $model->oldcode; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>