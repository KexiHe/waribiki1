<?php
/* @var $this WbPostController */
/* @var $model WbPost */

$this->breadcrumbs=array(
	'Wb Posts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WbPost', 'url'=>array('index')),
	array('label'=>'Manage WbPost', 'url'=>array('admin')),
);
?>

<h1>Create WbPost</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>