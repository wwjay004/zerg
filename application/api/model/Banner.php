<?php


namespace app\api\model;


use think\Exception;
use think\Model;

class Banner{
    public static function getBannerByID($id){
        //TODO：根据banner ID号 获取banner信息
        try{
            1/0;
        }catch (Exception $ex){
            //TODO：可以记录日志
            throw $ex;
        }
        return 'this is banner info';
    }
}