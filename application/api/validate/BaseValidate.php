<?php
/**
 * Created by IntelliJ IDEA.
 * User: x____
 * Date: 2019/4/11
 * Time: 21:45
 */

namespace app\api\validate;


use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    /*
     * @throws \think\Exception
     */
    public function goCheck(){
        //获取https传入的参数
        //对这些参数做校验
        $request = Request::instance();
        $params = $request->param();

        $result = $this->check($params);

        if(!$result){
            $error = $this->error;
            throw new Exception($error);
            //throw new Exception($error);
        }else{
            return true;
        }

    }
}