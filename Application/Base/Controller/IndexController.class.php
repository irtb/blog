<?php
namespace Base\Controller;
class IndexController extends BaseController {
    public function index(){
    	echo date("Y-m-d h:i:s");exit;
    }
}