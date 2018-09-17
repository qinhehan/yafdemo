<?php

/**
 * Author: qinhehan
 * Date: 2018/9/17
 * Time: 14:36
 * @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */

use Yaf\Bootstrap_Abstract as YafBootstrap;
use Yaf\Dispatcher;
use Yaf\Application as YafApplication;

class Bootstrap extends YafBootstrap
{

	public function _initConfig()
	{
		//把配置保存到全局对象中
		$this->config = YafApplication::app()->getConfig();
		Yaf\Registry::set('config', $this->config);
	}

//	//载入方法库
//	public function _initLibrary()
//	{
//		Yaf_Loader::import('Function.php');
//	}
}