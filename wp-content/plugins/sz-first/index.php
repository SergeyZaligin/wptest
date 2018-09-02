<?php
/*
Plugin Name: Тестовый первый плагин
Plugin URI: http://plugin.ru
Description: Описание плагина
Version: 1.0
Author: SuslikEst
Author URI: http://mysite.ru
*/
// function sz_activate()
// {
//   if(version_compare(PHP_VERSION, '5.3.0', '<')){
//     exit('Version error');
//   }
// }
// register_activation_hook( __FILE__, 'sz_activate' );

/**
 * Class activated plg
 */
class szPluginActivation {

  public function __construct()
  {
    register_activation_hook(__FILE__, array($this, 'isVersion'));
    register_activation_hook(__FILE__, array($this, 'logs'));
  }

  public function isVersion()
  {
    if(version_compare(PHP_VERSION, '5.4.0', '<')){
      exit('Версия должна быть не ниже 7.1.0');
    }
  }

  public function logs()
  {
    $date = date("Y-m-d H:i:s");
    error_log("[" . $date  .  "]". " Плагин активирован\r\n", 3, dirname(__FILE__) . '/tmp/logs/sz_errors_log.log');
  }

}

$szPlgActivated = new szPluginActivation();
