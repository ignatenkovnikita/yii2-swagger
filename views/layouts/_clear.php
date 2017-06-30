<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

$bundle = \ignatenkovnikita\swagger\assets\SwaggerAsset::register($this);
?>
<?php $this->beginPage() ?>


    <!-- HTML for static distribution bundle build -->
    <!DOCTYPE html>
    <html lang="<?php echo Yii::$app->language ?>">
    <head>
        <meta charset="<?php echo Yii::$app->charset ?>">
        <title><?= Html::encode($this->title) ?></title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Source+Code+Pro:300,600|Titillium+Web:400,600,700"
              rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./swagger-ui.css">
        <link rel="icon" type="image/png" href="./favicon-32x32.png" sizes="32x32"/>
        <link rel="icon" type="image/png" href="./favicon-16x16.png" sizes="16x16"/>

        <?php $this->head() ?>
        <?php echo Html::csrfMetaTags() ?>

        <base href="<?= $bundle->baseUrl ?>/">

        <style>
            html {
                box-sizing: border-box;
                overflow: -moz-scrollbars-vertical;
                overflow-y: scroll;
            }

            *,
            *:before,
            *:after {
                box-sizing: inherit;
            }

            body {
                margin: 0;
                background: #fafafa;
            }
        </style>
    </head>


    <body>
    <?php $this->beginBody() ?>
    <?php echo $content ?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>