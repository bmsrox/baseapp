Base App with custom Yii 1.1.16 + template adminLTE
========

For use this project, you need composer.

##To install

	clone the project

enter in the folder project

	cd path/project/protected && composer install

after rename the file

    protected/vendor/yiisoft/yii/framework/gii/generators/crud/CrudCode_custom.php
    to
	protected/vendor/yiisoft/yii/framework/gii/generators/crud/CrudCode.php

after run composer, execute:

	cd vendor/yiisoft/yii/framework/ && php yiic webapp path/project

put YES for create application and after put NO and NO again for doesn't overwrite some files