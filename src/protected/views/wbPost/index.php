<?php
/* @var $this WbPostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Wb Posts',
);

$this->menu=array(
	array('label'=>'Create WbPost', 'url'=>array('create')),
	array('label'=>'Manage WbPost', 'url'=>array('admin')),
);
?>

<h1>Wb Posts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
