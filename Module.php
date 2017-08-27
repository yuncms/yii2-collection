<?php


namespace yuncms\collection;


use Yii;

/**
 * Class Module
 * @package yuncms\credit
 */
class Module extends \yii\base\Module
{
    /**
     * 初始化
     */
    public function init()
    {
        parent::init();
        $this->registerTranslations();
    }

    /**
     * 注册语言包
     * @return void
     */
    public function registerTranslations()
    {
        if (!isset(Yii::$app->i18n->translations['collection*'])) {
            Yii::$app->i18n->translations['collection*'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'sourceLanguage' => 'en-US',
                'basePath' => __DIR__ . '/messages',
            ];
        }
    }
}