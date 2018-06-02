<?php
require "response.class.php";    //引入返回信息类

//准备返回数据
$code = 1;
$message = "success";
$data = array(
    "name" => "xxx",
);

//实例化response类
$response = new Response;

//返回数据
echo $response -> json($code,$message,$data);