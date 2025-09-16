<?php
namespace test;

use Controller\Attr\Rule;
use App\BaseApp;
use Utils\Logger;

class test extends BaseApp {
	#[Rule('/^t$/')]
	public function t() {
		Logger::error('我被载入了！！');
		$this->api->message->sendGroupMsg($this->group, '我被载入了！！！');
	}
}
