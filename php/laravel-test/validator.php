<?php

use DB;
use Validator;

class TestController extends Controller
{
	private $id;
	private $info;
	private $module;
	private $validator;

	public function __construct (Request $request)
	{
		$this->id = $request->input('id', '');
		$this->module = $request->input('module', []);

		// 参数验证
		$validator = Validator::make($request->all(), [
			'id' => 'required|alpha_num',
			'module' => 'array',
		]);

		// 校验功能模块
		if ($validator->passes()) {
			$validator->after(function($validator) {
				if ($this->checkModule() === false) {
					$validator->errors()->add('module', 'module is invalid');
				}
				if ($this->checkId() === false) {
					$validator->errors()->add('id', 'id is invalid');
				}
			});
		}
		$this->validator = $validator;
	}

	/**
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function getModuleConf (Request $request)
	{
		if ($this->validator->fails()) {
			return Utils::jsonResponse('', StringConstants::Code_Wrong_Param, $this->validator->errors()->first());
		}


		// 其他具体业务逻辑
		$data                 = [];


		return Utils::jsonResponse($data, StringConstants::Code_Succeed);
	}

	/**
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function updateModuleConf (Request $request)
	{
		// 这里要验证一个时间参数 (秒数)
		$expire = (int)$request->input('expire', 0);
		if ($expire < 1 || ($expire % (60 * 60 * 24) > 0)) {
			return Utils::jsonResponse('', StringConstants::Code_Wrong_Param, 'expire is invalid');
		}
		if (empty($this->module)) {
			return Utils::jsonResponse('', StringConstants::Code_Wrong_Param, "module can't be empty");
		}
		if ($this->validator->fails()) {
			return Utils::jsonResponse('', StringConstants::Code_Wrong_Param, $this->validator->errors()->first());
		}

		// 具体业务逻辑

		$update        = DB::connection('mysql_test')->table('t_test')->where('id', $this->id)->update(['status' => 1]);
		if ($update) {
			return Utils::jsonResponse('', StringConstants::Code_Succeed);
		} else {
			return Utils::jsonResponse('', StringConstants::Code_Failed, 'db error');
		}
	}

	/**
	 * 校验param:module 非必需参数 array
	 * @return bool
	 */
	private function checkModule ()
	{
		// 具体业务逻辑

		return true;
	}

	/**
	 * 校验
	 * @return bool
	 */
	private function checkId ()
	{
		// 具体业务逻辑

		$this->info = $info;

		return true;
	}

}
