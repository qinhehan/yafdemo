<?php
/**
 * Author: qinhehan
 * Date: 2018/9/17
 * Time: 17:33
 */

use Yaf\Controller_Abstract as YafController;

use EasyWeChat\Factory;
class UserController extends YafController
{

	public function init()
	{
//		$content = '默认情况下，Yaf_Loader 收集所有library(类定义的脚本)储存进在 php.ini(yaf.library)定义的global library directory之中。';
//		$this->getView()->assign("content", $content);
//		return;

	}

	public function indexAction()
	{
		$config = [
			'app_id' => 'wx3cf0f39249eb0xxx',
			'secret' => 'f1c242f4f28f735d4687abb469072xxx',
			'token' => 'TestToken',
			'response_type' => 'array',

			'log' => [
				'level' => 'debug',
				'file' => __DIR__.'/wechat.log',
			],
		];
		$app = Factory::officialAccount($config);
		$response = $app->server->serve();
		$response->send();
	}
}