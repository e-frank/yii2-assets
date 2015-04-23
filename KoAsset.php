<?
namespace x1\assets;

class KoAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@x1/assets/knockout/knockout';
	
	public $js         = [
		'knockout.js' => 'knockout-3.3.0.js',
		'knockout.mapping.js',
	];

	public $css        = [
	];

	public $depends = [
	];
}
?>