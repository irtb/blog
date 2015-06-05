<?php
namespace Admin\Controller;
class UserController extends BaseController {

	public function _initialize(){
		echo 222222222;exit;
	}




    public function index(){
    	echo 'admin';exit;
    }

    // 检查登录
    public function check_login(){

    }

    // 添加账号
    public function add_user(){
    	$data = array(
    		'account' => 'admin',
    		'password' => md5('admin'.'lzm'),
			'name' => '奥巴马',
			'mobile' => 13800138000,
			'add_time' => time(),
			'last_login' => time(),
			'pass_tokey' => 'lzm',
			'photo' => '/admin_user/1.jpg'
    		);
    	$AdminUserModel = M('AdminUser');
    	$check = $AdminUserModel->where("account='".$data['account']."'")->find();
    	if ($check) {
    		echo '账号已存在';
    	} else {    		
	    	$res = $AdminUserModel->add($data);
	    	if ($res) {
	    		echo '添加成功';exit;
	    	}
    	}
    }
}