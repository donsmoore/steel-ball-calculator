<?php

namespace Donsframe;

//========================================================================
class App extends Baseclass {

  public $_title = null;
  public $_copyright = null;
  public $_page = null;
  public $_qs = array();
  public $_get_array = array();
  public $_post_array = array();

  public $app_main_js  = null;
  public $app_page_js  = null;
  public $app_main_css = null;
  public $app_page_css = null;

  public function __construct() { ob_start(); }
  public function SetTitle() { $this->_title = APP_NAME . ' v' . APP_VERSION; }
  public function SetMainJs() { $this->app_main_js = './js/javascript.js'; }
  public function SetPageJs() { $this->app_page_js = './pages/' . $this->_page . '/javascript.js.php'; }
  public function SetMainCss() { $this->app_main_css = './css/style.css'; }
  public function SetPageCss() { $this->app_page_css = './pages/' . $this->_page . '/style.css'; }
  public function SetPage() { $this->_page = $this->GetQs('page', 'Home'); }
  public function SetGetPost() { $this->_get_array = $_GET; $this->_post_array = $_POST; }
  public function GetTitle() { return $this->_title; }
  public function GetCopyright() { return $this->_copyright; }
  public function MenuSelected($x) { return ($x==$this->_page) ? ' class="selected" ' : '' ; }

  public function Setup() {
    Debug::Set('Application setup initiated');
    $this->SetPageRenderStartTime();
    $this->SetTitle();
    $this->SetCopyright();
    $this->SetGetPost();
    $this->SetAllQs();
    $this->SetPage();
    $this->SetMainJs();
    $this->SetPageJs();
    $this->SetMainCss();
    $this->SetPageCss();
    Database::Setup();
    $this->SetQs('material', ($this->GetQs('material')) ? $this->GetQs('material') : 'Chrome Steel');
    $this->SetQs('size', ($this->GetQs('size')) ? $this->GetQs('size') : '30');
    $this->SetQs('balls_per', ($this->GetQs('balls_per')) ? $this->GetQs('balls_per') : '100');
  }

//========================================================================
  public function SetAllQs() {
    foreach ($this->_post_array as $name => $value) {	$this->SetQs($name, $value);  }
    foreach ($this->_get_array as $name => $value) { $this->SetQs($name, $value); }
    foreach ($this->_qs as $name => $value) {
      Debug::Set('QS: ' . $name . ' = ' . $value );
    }
  }

//========================================================================
  public function GetQs($the_var = '', $the_default = '') {
    $this_return = $the_default;
    if (isset($this->_qs[$the_var])) {
      $this_return = $this->_qs[$the_var];
    }
    return $this_return;
  }

//========================================================================
  public function SetQs($the_var = '', $the_value = '') {
    return $this->_qs[htmlentities($the_var)] = htmlentities($the_value);
  }

//========================================================================
  public function SetCopyright() {
    $this_years = '2016';
    if (date('Y') != '2016') { $this_years = '2016-' . date('Y'); }
    $this->_copyright = '<br><br><br><center>' . APP_COPY . ' &copy; ' . $this_years . '</center><br><br><br>'. PHP_EOL;
  }

//========================================================================
  public function GetMenu() {
    ob_start();
    include './classes/menu.php';
    $return_value = ob_get_clean();
    return $return_value;
  }

//========================================================================
  public function GetHeader() {
    $return_value = '';
    if (APP_SHOW_HEADER) {
      $return_value .= '<div id="header-frame" class="header-frame">'.PHP_EOL;
      $return_value .= '<a href="?page=Home"><img style="height: 75px; " src="./images/logo.png"></a>'.PHP_EOL;
      $return_value .= '</div>'.PHP_EOL;
    }
  return $return_value;
  }

//========================================================================
  public function GetDebug() {
    $return_value = '';
    if (APP_SHOW_DEBUG) {
      $return_value .= '<div id="debug-frame" class="debug-frame">'.PHP_EOL;
      $return_value .= Debug::Get();
      $return_value .= '</div>'.PHP_EOL;
    }
  return $return_value;
  }

//========================================================================
  public function GetPage() {
    ob_start();
    $the_page = './pages/' . $this->_page. '/index.php';
    if (!is_file($the_page)) { $the_page = './pages/NotFound/index.php'; }
    include $the_page;
    $return_value = ob_get_clean();
    return $return_value;
  }

}
