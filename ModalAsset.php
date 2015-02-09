<?php

namespace iutbay\yii2modal;

/**
 * Modal asset bundle
 * @author Kevin LEVRON <kevin.levron@gmail.com>
 */
class ModalAsset extends \yii\web\AssetBundle
{

    public $sourcePath = '@vendor/iutbay/yii2-modal/assets';
    public $js = [
        'modal.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];

}
