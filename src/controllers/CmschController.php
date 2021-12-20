<?php
/**
 * @link https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license https://craftcms.github.io/license/
 */

namespace craft\controllers;

use craft\web\Controller;
use yii\web\NotFoundHttpException;

class CmschController extends Controller
{

    public function actionTest()
    {
        var_dump(123);
    }
}
