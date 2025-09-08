<?php

/** @var \yii\web\View $this */
/** @var string $content */

use yii\helpers\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

frontend\assets\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="container-fluid">
        <div class="row">
            <!-- sidebar -->
            <nav id="sidebarMenu" class="p-0 col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky pt-3">
                    <div class="sidebar-menu">
                        <div class="sidebar-item active">
                            <i class="i i-main"></i>
                            Главная
                        </div>
                        <div class="sidebar-dropdown-item">
                            <div class="sidebar-item">
                                <i class="i i-main"></i>
                                Главная
                            </div>
                            <div class="dropdown-content">
                                <div class="sidebar-item sidebar-sub-item">
                                    Заказы
                                </div>
                                <div class="sidebar-item sidebar-sub-item">
                                    Example
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </nav>

            <!-- top navbar (для мобильной кнопки) -->
            <nav class="navbar navbar-light bg-light d-md-none">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <span class="navbar-brand mb-0 h1"><?= Html::encode($this->title) ?></span>
                </div>
            </nav>

            <!-- main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-3">
                <?= $content ?>
            </main>
        </div>
    </div>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>