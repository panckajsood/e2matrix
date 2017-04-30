<?php

use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
$this->title = "Users";
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Name</th>
                  <th>Class</th>
                  <th>School Name</th>
                  <th>Joining</th>
                  <th>action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet Explorer 4.0 </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
				<tr>
                  <td>Trident</td>
                  <td>Internet Explorer 4.0 </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
				<tr>
                  <td>Trident</td>
                  <td>Internet Explorer 4.0 </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
				<tr>
                  <td>Trident</td>
                  <td>Internet Explorer 4.0 </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
				<tr>
                  <td>Trident</td>
                  <td>Internet Explorer 4.0 </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
               
                </tbody>
                <tfoot>
                <tr>
                  <th>Sr. No.</th>
                  <th>Name</th>
                  <th>Class</th>
                  <th>School Name</th>
                  <th>Joining</th>
                  <th>action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
