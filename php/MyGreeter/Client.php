<?php
namespace MyGreeter;
/**
 * Class Client
 */
date_default_timezone_set("Asia/Shanghai");

class Client {

    public $nowTime;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->nowTime = date("H");
    }

    /**
     * 判断时间并输出
     */
    public function getGreeting()
    {
        if (!$this->nowTime) return false;
        if ($this->nowTime > 0 && $this->nowTime < 12) {
            echo "Good morning";
        } else if ($this->nowTime > 12 && $this->nowTime < 18) {
            echo "Good afternoon";
        } else if ($this->nowTime > 18 && $this->nowTime < 24) {
            echo "Good evening";
        }
    }


}
$Client = new Client();
print_r($Client->getGreeting());
