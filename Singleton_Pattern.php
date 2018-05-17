<?php
class Sky {

    private static $instanceCount = 0;
    private $id;
    protected static $_instance;

    protected function __construct() {
        self::$instanceCount += 1;
        $this->id = self::$instanceCount;
    }

    private function __clone() {}

    private function __sleep() {}

    private function __wakeup() {}

    public function __toString() {
        return "I am sky object {$this->id} of " .
               self::$instanceCount .
               " total instances.\n";
    }

    public static function getInstance() {
        if(is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}

$sky = Sky::getInstance();
echo $sky;
$anotherSky = Sky::getInstance();
echo $anotherSky;
$bloodRedSky = Sky::getInstance();
echo $bloodRedSky;
$pinkSky = Sky::getInstance();
echo $pinkSky;
?>
