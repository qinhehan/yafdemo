<?php
/**
 * Author: qinhehan
 * Date: 2018/9/17
 * Time: 14:53
 */


use Yaf\Controller_Abstract as YafController;

class IndexController extends YafController
{

	public function init()
	{
		$content = '默认情况下，Yaf_Loader 收集所有library(类定义的脚本)储存进在 php.ini(yaf.library)定义的global library directory之中。';
		$this->getView()->assign("content", $content);
	}

	public function indexAction()
	{

	}

	public function detailAction()
	{
		echo 'detail';
		die;
	}

}