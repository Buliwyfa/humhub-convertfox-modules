<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;

\humhub\modules\convertfox\Assets::register($this);
?>

<?= Html::beginTag('div') ?>

<!-- start ConvertFox JS code-->
<p>Enter your code in <code>/protected/modules/convertfox/widgets/views</code></p>
<!-- end ConvertFox JS code-->

<?= Html::endTag('div'); ?>
