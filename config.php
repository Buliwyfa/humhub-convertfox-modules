<?php

namespace humhub\modules\convertfox;

return [
    'id' => 'convertfox',
    'class' => 'humhub\modules\convertfox\Module',
    'namespace' => 'humhub\modules\convertfox',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::className(),
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\convertfox\Events',
                'addConvertfoxFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::className(),
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\convertfox\Events',
                'addConvertfoxFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::className(),
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\convertfox\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
