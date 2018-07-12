<?php
namespace Admin\Controller;
use think\Controller;
/*
 * 后台登录后的主页面
 * **/
class MainController extends Controller{
    /*
     * 上部分和左部分
     * **/
    public function index(){
        $this->display();
}
    /*
     * 中间部分
     * **/
    public function home(){
        $this->display();
    }
}