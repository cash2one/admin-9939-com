<?php

namespace backend\modules\ask\controllers;

use librarys\controllers\backend\BackController;

/**
 * Default controller for the `ask` module
 */
class DefaultController extends BackController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
