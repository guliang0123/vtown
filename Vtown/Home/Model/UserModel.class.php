<?php 
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
	// 自动验证
   protected $_validate = array(
    array('username','/\w{5,12}/','用户名格式不正确',0,'regex',1), // 
    array('username','','用户名已经存在！',0,'unique',1), //
    array('pass','/\w{6,12}/','密码格式不正确！',0,'regex',1),
    array('repass','pass','密码不一致',0,'confirm'), //
  	// array('phone','phone','手机号码错误！'),
  	array('phone','','手机号已存在','0','unique',1)
     );
   // 自动完成
   protected $_auto = array ( 
         array('pass','md5',3,'function') , // 
     );
}

 ?>