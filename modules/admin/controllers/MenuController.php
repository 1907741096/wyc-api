<?php

namespace app\modules\admin\controllers;

use app\common\services\MenuService;

class MenuController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
