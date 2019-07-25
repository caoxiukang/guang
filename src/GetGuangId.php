<?php
/**
 * Created by PhpStorm.
 * User: caoxiukang_xian
 * Email:1102842479@qq.com
 * Date: 2019/7/25
 * Time: 14:15
 */

namespace Guang;


class GetGuangId extends BaseGuang
{
    public function __construct($id = 0)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}