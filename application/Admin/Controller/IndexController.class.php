<?php
namespace Admin\Controller;
use Think\Controller;
/*
 * 后台登录首页
 * **/
class IndexController extends Controller {
    /**
     * 后台登录
     * @author
     * @param
     * @return
     */
    public function login(){
        $this->display();
    }


    public function index(){
        $this->display();
    }
}