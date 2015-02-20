<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<!-- bootstrap 3.0.2 -->
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- font Awesome -->
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!-- Ionicons -->
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme style -->
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <!-- Style custom -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" rel="stylesheet" type="text/css" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->

 	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

</head>

<body class="skin-blue">

    <?php
        $this->widget('Navbar', array(
            //'brand'=>CHtml::image(Yii::app()->baseUrl . "/images/logo_neocds.png", ""),
            'brand'=>'Administração',
            'brandUrl'=>$this->createUrl('default/index'),
            'htmlOptions'=>array('class'=>'navbar-right'),
            'items'=>array(
                array(
                    'class'=>'Messages',
                    'htmlOptions'=>array('class'=>'dropdown messages-menu'),
                    'icon'=>'fa fa-envelope',
                    'itemsCssClass'=>'dropdown-menu',
                    'labelHeader'=>array('title'=>'You have {n} messages|You have {n} messages', 'params'=>3),
                    'labelFooter'=>array('title'=>'See All Messages'),
                    'badge'=>array('class'=>'label label-success', 'value'=>4),
                    'items'=>array(
                            array('title'=>'Support Team', 'url'=>'#','icon'=>'fa fa-clock-o','value'=>'Why not buy a new awesome theme?')
                    )
                ),
                 array(
                    'class'=>'Notifications',
                    'htmlOptions'=>array('class'=>'dropdown notifications-menu'),
                    'icon'=>'fa fa-warning',
                    'itemsCssClass'=>'dropdown-menu',
                    'labelHeader'=>array('title'=>'You have {n} notification|You have {n} notifications', 'params'=>10),
                    'labelFooter'=>array('title'=>'View All'),
                    'badge'=>array('class'=>'label label-warning', 'value'=>16),
                    'items'=>array(
                            array('url'=>'#','icon'=>'ion ion-ios7-people info','value'=>'Why not buy a new awesome theme?')
                    )
                ),
                array(
                    'class'=>'Users',
                    'htmlOptions'=>array('class'=>'dropdown user'),
                    'icon'=>'glyphicon glyphicon-user',
                    'itemsCssClass'=>'dropdown-menu',
                    'items'=>array(
                            array('url'=>'#', 'label'=>Yii::t('app','Change Password')),
                            array('url'=>array('default/logout'), 'label'=>Yii::t('app','Logout'))
                    )
                ),
            )
        ));
    ?>

    <div class="wrapper row-offcanvas row-offcanvas-left">
	   <?php echo $content; ?>
    </div><!-- ./wrapper -->

    <!-- Bootstrap -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/AdminLTE/app.js" type="text/javascript"></script>

</body>
</html>
