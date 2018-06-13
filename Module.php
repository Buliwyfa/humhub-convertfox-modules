<?php

namespace humhub\modules\convertfox;

use Yii;
use yii\helpers\Url;

class Module extends \humhub\components\Module
{

    /**
     * @inheritdoc
     */
    public function getConfigUrl()
    {
        return Url::to([
                    '/convertfox/admin'
        ]);
    }

    public function getServerUrl()
    {
        $url = $this->settings->get('serverUrl');
        if (empty($url)) {
            return '';
        }
        return $url;
    }
}
