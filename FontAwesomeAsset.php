<?php
/**
 * @link https://github.com/borodulin/yii2-fontawesome
 * @copyright Copyright (c) 2015 Andrey Borodulin
 * @license https://github.com/borodulin/yii2-fontawesome/blob/master/LICENSE.md
 */
namespace conquer\fontawesome;

/**
 * @link http://fortawesome.github.io/Font-Awesome/
 */
class FontAwesomeAsset extends \yii\web\AssetBundle
{
	// The files are not web directory accessible, therefore we need
	// to specify the sourcePath property. Notice the @bower alias used.
	public $sourcePath = '@bower/font-awesome';
	public $css = [
			'css/font-awesome.css',
	];
}