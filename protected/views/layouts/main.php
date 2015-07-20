<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
    <?php Yii::app()->bootstrap->register(); ?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" style="padding-top: 60px;">
    <?php $this->widget('bootstrap.widgets.TbNavbar',array(
        'htmlOptions' => array(
            'class' => 'navbar-inverse'
        ),
        'items'=>array(
            array(
                'class' => 'bootstrap.widgets.TbNav',
                'items' => array(
                    array('label'=>'Home', 'url'=>array('/site/index')),
                    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                ),
            ),
        ),
    )); ?>

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

</div>

<footer class="navbar navbar-fixed-bottom navbar-inverse footer" role="contentinfo">
    <div class="container text-center">
        <p class="nav">
            Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
            All Rights Reserved.<br/>
            <?php echo Yii::powered(); ?>
        </p>
    </div>
</footer>

</body>
</html>
