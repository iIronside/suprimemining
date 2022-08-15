<?php

namespace frontend\controllers;

use Yii;
use frontend\models\ContactForm;
use yii\helpers\Url;

class SuprimeminingController extends \yii\web\Controller
{
    public function init()
    {
        parent::init();
        $this->layout = '@app/views/layouts/emptyLayout';
    }


    public function actionIndex()
    {
        \Yii::$app->view->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => Url::to(['/icon.png'])]);
        $this->layout = '@app/views/layouts/suprimemining';
        return $this->render('index');
    }
}
