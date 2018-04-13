<?php
class Load {
private static $path='Route';
protected $loader_page;
public function __construct(){
define('__PATH__', self::$path);
$this->loader_page=spl_autoload_register(function($class){
    require_once __PATH__.'/'.$class.'/'.$class.'.php';
});
return $this->loader_page;
}

}
