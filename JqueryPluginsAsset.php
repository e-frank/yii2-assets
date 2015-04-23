<?
namespace x1\assets;

class JqueryPluginsAsset extends \yii\web\AssetBundle 
{

	public $sourcePath = '@x1/assets';

	public $js = [
		'jquery-plugins/jquery.strings.js',
	];

	public $css = [
	];

	public $depends = [
		'yii\web\JqueryAsset',
	];
}