<?php
namespace Justcy\Suning\Request\netalliance;
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-6-23
 */
class HomepagepositionurlQueryRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.netalliance.homepagepositionurl.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryHomepagepositionurl";
	}
	
}

?>