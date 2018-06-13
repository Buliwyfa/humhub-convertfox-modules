<?php
namespace humhub\modules\convertfox;

use Yii;
use yii\helpers\Url;
use humhub\modules\convertfox\widgets\ConvertfoxFrame;
use humhub\models\Setting;

class Events extends \yii\base\Object
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('ConvertfoxModule.base', 'Convertfox Settings'),
            'url' => Url::toRoute('/convertfox/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-commenting"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'convertfox' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

public static function addConvertfoxFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::className());
        $event->sender->addWidget(ConvertfoxFrame::className(), [], [
            'sortOrder' => Setting::Get('timeout', 'convertfox')
        ]);
    }
}
