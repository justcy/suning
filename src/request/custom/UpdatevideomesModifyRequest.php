<?php
namespace Justcy\Suning\Request\custom;
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-12-19
 */
class UpdatevideomesModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $channelid;
	
	/**
	 * 
	 */
	private $transcode;
	
	/**
	 * 
	 */
	private $msg;
	
	/**
	 * 
	 */
	private $duration;
	
	public function getChannelid() {
		return $this->channelid;
	}
	
	public function setChannelid($channelid) {
		$this->channelid = $channelid;
		$this->apiParams["channelid"] = $channelid;
	}
	
	public function getTranscode() {
		return $this->transcode;
	}
	
	public function setTranscode($transcode) {
		$this->transcode = $transcode;
		$this->apiParams["transcode"] = $transcode;
	}
	
	public function getMsg() {
		return $this->msg;
	}
	
	public function setMsg($msg) {
		$this->msg = $msg;
		$this->apiParams["msg"] = $msg;
	}
	
	public function getDuration() {
		return $this->duration;
	}
	
	public function setDuration($duration) {
		$this->duration = $duration;
		$this->apiParams["duration"] = $duration;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.updatevideomes.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->channelid, 'channelid');
		RequestCheckUtil::checkNotNull($this->transcode, 'transcode');
		RequestCheckUtil::checkNotNull($this->msg, 'msg');
		RequestCheckUtil::checkNotNull($this->duration, 'duration');
	}
	
	public function getBizName(){
		return "modifyUpdatevideomes";
	}
	
}

?>