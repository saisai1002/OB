<?php
namespace Admin\Controller;
use Think\Controller;
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