<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-11-14
 */
class SystimeGetRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.common.systime.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getSystime";
	}
	
}

?>