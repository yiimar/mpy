<?php

declare(strict_types=1);

namespace App\Domain\Core\UI\Http\Web\Assets;

use yii\bootstrap5\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';

    public $baseUrl = '@web';

    public $css = [
        'css/site.css',
    ];

    public $js = [];

    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
    ];
}
