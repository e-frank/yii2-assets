<?
namespace x1\assets;

class JqueryHelpersAsset extends \yii\web\AssetBundle 
{

	public $sourcePath = '@x1/assets/jquery-helpers';

	public $js = [
		'js/jquery.strings.js',
	];

	public $css = [
	];

	public $depends = [
		'yii\web\JqueryAsset',
	];
}