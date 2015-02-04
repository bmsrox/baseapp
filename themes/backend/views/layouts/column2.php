<?php $this->beginContent('//layouts/main'); ?>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">

             <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar4.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?= ucfirst(Yii::app()->user->name); ?></p>
                            <a><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                  <!--   <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form> -->
                    <!-- /.search form -->


                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <?php $this->widget('zii.widgets.CMenu',array(
                            'htmlOptions'=>array('class'=>'sidebar-menu'),
                            'items'=>array(
                                array('label'=>Yii::t('app', 'Dashboard'), 'url'=>array('site/index')),
                                array('label'=>Yii::t('app', 'User'), 'url'=>array('user/index'))
                            ),
                    )); ?>


                </section>
          <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">

           <!-- Content Header (Page header) -->
           <section class="content-header">
                <h1> <?php echo CHtml::encode($this->pageTitle); ?> </h1>

                <?php if(isset($this->breadcrumbs)):?>
                   <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links'=>$this->breadcrumbs,
                    'tagName'=>'ol',
                    'htmlOptions'=>array('class'=>'breadcrumb'),
                    'homeLink'=>CHtml::tag('li', array(),CHtml::link(Yii::t(Yii::app()->language,'Home'), array('/adm/default/index')),true),
                    'activeLinkTemplate'=>'<li><a href="{url}">{label}</a></li>',
                    'inactiveLinkTemplate'=>'<li class="active">{label}</li>',
                    'separator'=>'',
                    )); ?><!-- breadcrumbs -->
                <?php endif?>

            </section>

            <!-- Main content -->
            <section class="content">
                <?php echo $content; ?>
            </section><!-- /.content -->

        </aside><!-- /.right-side -->

<?php $this->endContent(); ?>