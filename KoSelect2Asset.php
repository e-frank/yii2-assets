<?
namespace x1\assets;

class KoSelect2Asset extends \yii\web\AssetBundle
{
	public $sourcePath = '@x1/assets/knockout/select2';
	
	public $js         = [
		'ko.binding.select2.js',
	];

	public $css        = [
	];

	public $depends = [
        'x1\assets\Select2Asset',
        'x1\assets\KoAsset',
	];
}
?>