<?php
namespace backend\assets;
use yii\web\AssetBundle;
class AdminLtePluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';
    public $js = [
        
        'https://code.jquery.com/ui/1.11.4/jquery-ui.min.js',
        'http://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js',
        'datatables/dataTables.bootstrap.min.js',
        'ckeditor/ckeditor.js',
        'morris/morris.min.js',
        'ckeditor/ckeditor.js',
        'knob/jquery.knob.js',
        'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js',
        'daterangepicker/daterangepicker.js',
        'datepicker/bootstrap-datepicker.js',
        // more plugin Js here
    ];
    public $css = [
        'datatables/dataTables.bootstrap.css',
        'morris/morris.css',
        'daterangepicker/daterangepicker.css',
        'datepicker/datepicker3.css',
        // more plugin CSS here
    ];
    public $depends = [
        'dmstr\web\AdminLteAsset',
    ];
}
?>