<?php
use yii\helpers\Html;

$assets = \xinyeweb\adminlte\AdminLteAsset::register($this);
$assets->skin = "skin-yellow";

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/xinyeweb/yii2-adminlte/assets');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="<?= $assets->skin ?> sidebar-mini fixed">
<?php $this->beginBody() ?>
    <div class="wrapper">
        <?= $this->render('header', ['directoryAsset' => $directoryAsset]) ?>
        <?= $this->render('aside', ['directoryAsset' => $directoryAsset]) ?>
        <?= $this->render('content', ['directoryAsset' => $directoryAsset, 'content' => $content]) ?>
        <?= $this->render('footer', ['directoryAsset' => $directoryAsset]) ?>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
