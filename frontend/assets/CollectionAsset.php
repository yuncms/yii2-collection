<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace yuncms\collection\frontend\assets;

use yii\web\AssetBundle;

/**
 * Class CollectionAsset
 * @package yuncms\collection\frontend\assets
 */
class CollectionAsset extends AssetBundle
{
    public $sourcePath = '@yuncms/collection/frontend/views/assets';

    public $js = [
        'js/collection.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}