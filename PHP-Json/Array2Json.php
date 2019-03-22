<?php 
  // json_encode只能将utf8的字符转换成json字符串，如果你的代码格式不是utf8是无法转换的，会返回false，在转换之前，将数组中的值循环设置成utf8，遍历一次数组即可。然后再使用json_encode就可以了。
  // 定义数组
  $arr=array(
  	'city'=>array('北京','上海','广州'),
  	'order'=>array(1,2,3)
  );
  // 将数组转换为json格式
  var_dump(json_encode($arr)) ;
  var_dump(json_encode($arr, JSON_UNESCAPED_UNICODE));// 直接转成json数组，中文不转义
  var_dump(_t(json_encode($arr, JSON_UNESCAPED_UNICODE),48,' '));

  // 定义一个转码的方法
  function _t($str='',$num=20,$pad =' '){
    $str = iconv('UTF-8','gbk',$str);// PHP转码函数
    return str_pad($str,$num,$pad); // str_pad() 函数把字符串填充为新的长度。
  }
 ?>
