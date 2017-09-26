# yii2-collection

适用于Yii2的收藏模块

[![Latest Stable Version](https://poser.pugx.org/yuncms/yii2-collection/v/stable.png)](https://packagist.org/packages/yuncms/yii2-collection)
[![Total Downloads](https://poser.pugx.org/yuncms/yii2-collection/downloads.png)](https://packagist.org/packages/yuncms/yii2-collection)
[![Reference Status](https://www.versioneye.com/php/yuncms:yii2-collection/reference_badge.svg)](https://www.versioneye.com/php/yuncms:yii2-collection/references)
[![Build Status](https://img.shields.io/travis/yiisoft/yii2-collection.svg)](http://travis-ci.org/yuncms/yii2-collection)
[![Dependency Status](https://www.versioneye.com/php/yuncms:yii2-collection/dev-master/badge.png)](https://www.versioneye.com/php/yuncms:yii2-collection/dev-master)
[![License](https://poser.pugx.org/yuncms/yii2-collection/license.svg)](https://packagist.org/packages/yuncms/yii2-collection)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ composer require yuncms/yii2-collection
```

or add

```
"yuncms/yii2-collection": "~1.0.0"
```

to the `require` section of your `composer.json` file.

## Use

```js
/**
 * 发起收藏
 * @param {string} model
 * @param {int} model_id
 * @param callback
 */
function collection(model, model_id, callback) {
    callback = callback || jQuery.noop;
    jQuery.post("/collection/collection/store", {model: model, model_id: model_id}, function (result) {
        return callback(result.status);
    });
}
```

## License

This is released under the MIT License. See the bundled [LICENSE](LICENSE.md)
for details.