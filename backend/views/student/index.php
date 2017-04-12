<?php
use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
$this->title = "Registration";
?>
<div class="content-wrapper">

<section class="content">
<!-- Nisha Work Space ---->
<div class="col-sm-8">
<div class="box box-primary col-sm-8">
            <div class="box-header with-border">
              <h3 class="box-title">Student Registration</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
				<div class="box-body row">
					<div class="form-group col-sm-6">
						<input type="text" class="form-control" name="txt_fname" placeholder="First Name" value="">
					</div>
					<div class="form-group col-sm-6">
						<input type="text" class="form-control" name="txt_lname" placeholder="Last Name" value="">
					</div>
					<div class="form-group col-sm-12">
						<label class="">
						 Gender: &nbsp;&nbsp;
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optradio">Male
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optradio">Female
						</label>
					</div>
					<div class="form-group col-sm-6">
					<input type="text" class="form-control" name="txt_dob" placeholder="Date of birth" value="">
					</div>
					<div class="form-group col-sm-6">
					<input type="text" class="form-control" name="txt_fathername" placeholder="Father's name" value="">
					</div>
					<div class="form-group col-sm-6">
						<input type="tel" class="form-control" name="txt_phone" placeholder="Phone" value="">
					</div>
					<div class="form-group col-sm-6">
						<input type="email" class="form-control" name="txt_umail" placeholder="Email" value="">
					</div>
					<div class="form-group col-sm-12">
						<label class="hidden">Joining Date:</label>

						<div class="input-group date">
						  <div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						  </div>
						  <input type="text" class="form-control pull-right" id="datepicker" placeholder="Other Details">
						</div>
						<!-- /.input group -->
					</div>
					<div class="form-group col-sm-6">
					<input type="text" class="form-control" name="txt_uname" placeholder="Class" value="">
					</div>
					<div class="form-group col-sm-6">
					<input type="text" class="form-control" name="txt_uname" placeholder="Subjects" value="">
					</div>
					<div class="form-group col-sm-6">
					<input type="text" class="form-control" name="txt_uname" placeholder="Fee" value="">
					</div>
					<div class="form-group col-sm-6">
					<input type="text" class="form-control" name="txt_uname" placeholder="School/College name" value="">
					</div>
					<div class="form-group col-sm-12">
					<textarea type="text" class="form-control" name="txt_uname" placeholder="Address" value=""></textarea>
					</div>
					<div class="form-group col-sm-12">
					<textarea type="text" class="form-control" name="txt_uname" placeholder="Other Details" value=""></textarea>
					</div>

					<div class="form-group col-sm-6">
					<input type="text" class="form-control" name="txt_uname" placeholder="Username" value="">
					</div>
					<div class="form-group has-feedback col-sm-6">
					<input type="password" class="form-control" placeholder="Password" name="txt_upass" value="">
					</div>
					<!-- /.col -->
					<!-- /.col -->
				</div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Register</button>
              </div>
            </form>
</div>
</div>
<div class="clearfix"></div>

</section>

</div>
<!--script>
  jQuery(function () {
 //Date picker
    jQuery('#datepicker').datepicker({
      autoclose: true
    });
 });
</script-->