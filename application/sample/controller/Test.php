<?php


namespace app\sample\controller;


use think\Controller;
use think\Request;

class Test extends Controller
{
//    public function hello($id,$age,$name){
//
//        echo $id;
//        echo '|';
//        echo $age;
//        echo '|';
//        echo $name;
//        return 'hello,qiyue';
//    }
    public function hello(){

//        $id = Request::instance()->param('id');
//        $name = Request::instance()->param('name');
//        $age = Request::instance()->param('age');
        $all = Request::instance()->param();
        var_dump($all);
//        echo $id;
//        echo '|';
//        echo $age;
//        echo '|';
//        echo $name;
        //return 'hello,qiyue';
    }
}