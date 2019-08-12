<?php
/**
 * Created by IntelliJ IDEA.
 * User: x____
 * Date: 2019/4/11
 * Time: 13:52
 */

namespace app\api\controller\v1;

use app\api\validate\IDMustBePositiveInt;

use app\api\model\Banner as BannerModel;
use think\Exception;
use think\response\Json;

class Banner
{
    /**
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @param $id banner的id号
     *
     * @return string|Json
     * @throws Exception
     */
    public function getBanner($id){
        (new IDMustBePositiveInt())->goCheck();
        try{
            $banner = BannerModel::getBannerByID($id);
        }catch (Exception $ex){
            $err = [
                'error_code' => 10001,
                'msg' => $ex->getMessage()
            ];
            return json($err,'400');
        }

        return $banner;

    }
}