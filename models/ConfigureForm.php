<?php

namespace humhub\modules\convertfox\models;

use Yii;

/**
 * ConfigureForm defines the configurable fields.
 */
class ConfigureForm extends \yii\base\Model
{

    public $serverUrl;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => Yii::t('ConvertfoxModule.base', 'Welcome to the Convertfox Settings sorry it\'s not just working yet!'),
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('convertfox')->settings->get('serverUrl');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('convertfox')->settings->set('serverUrl', $this->serverUrl);

        return true;
    }

}
