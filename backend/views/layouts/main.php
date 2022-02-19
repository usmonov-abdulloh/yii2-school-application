<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use backend\widgets\Sidebar;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<?=Sidebar::widget()?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <?= $content ?>
        </div>
    </div>
</div>




<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
