<?php

class AdminModule extends CWebModule
{
	public function init()
	{
		Yii::app()->name = Yii::t('app', "Administration");
		// this method is called when the module is being created
		// you may place code here to customize the module or the application
		// import the module-level models and components
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
			'admin.extensions.*'
		));

		Yii::app()->theme = "backend";

	}

	public function beforeControllerAction($controller, $action) {
		if (parent::beforeControllerAction($controller, $action)) {
			// this method is called before any module controller action is performed
			// you may place customized code here
			Yii::app()->widgetFactory->widgets['CBreadcrumbs']=array('homeLink'=>CHtml::link(Yii::t(Yii::app()->language,'Home'), array('/admin')));

			$route = $controller->id . '/' . $action->id;
			// echo $route;
			$publicPages = array(
					'default/login',
					'default/error'
			);
			if (Yii::app()->user->isGuest && !in_array($route, $publicPages)){
				Yii::app()->getModule('admin')->user->loginRequired();
			}
			else
				return true;
		}
		else
			return false;
	}
}
