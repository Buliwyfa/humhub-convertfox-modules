<?php

namespace humhub\modules\convertfox\widgets;

use Yii;
use yii\helpers\Url;
use humhub\libs\Html;
use humhub\components\Widget;

/**
 *
 * @author Felli
 */
class ConvertfoxFrame extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $url = Yii::$app->getModule('convertfox')->getServerUrl() . '';
        return $this->render('convertfoxframe', ['convertfoxUrl' => $url]);
    }
}
