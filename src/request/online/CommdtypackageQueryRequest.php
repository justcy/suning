<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-22
 */
class CommdtypackageQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $packageID;
	
	public function getPackageID() {
		return $this->packageID;
	}
	
	public function setPackageID($packageID) {
		$this->packageID = $packageID;
		$this->apiParams["packageID"] = $packageID;
	}
	
	public function getApiMethodName(){
		return 'suning.online.commdtypackage.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->packageID, 'packageID');
	}
	
	public function getBizName(){
		return "queryCommdtypackage";
	}
	
}

?>