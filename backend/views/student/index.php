<?php

use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
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
            <?php 
	$form = ActiveForm::begin([
    'id' => 'form-signup',
    'fieldConfig' => [
                        'template' => "{input}",
                        'options' => [
                            'tag'=>'span'
                        ]
    ]
    ]);
			//$form = ActiveForm::begin(['id' => 'form-signup']); ?>
				<div class="box-body row">
					<div class="form-group col-sm-6">
					<!--<input type="text" class="form-control" name="txt_fname" placeholder="First Name" value="">-->
					 <?= $form->field($user_model, 'first_name')->textInput(['autofocu<s' => true,'placeholder' => 'First Name','class' => 'form-control'])->label(false) ?>
                                        </div>
					<div class="form-group col-sm-6">
				            <!--<input type="text" class="form-control" name="txt_lname" placeholder="Last Name" value="">-->
					     <?= $form->field($user_model, 'last_name')->textInput(['autofocus' => true,'placeholder' => 'Last Name','class' => 'form-control'])->label(false) ?>
                                        </div>
					<div class="form-group col-sm-12">
						<!--<label class="">
						 Gender: &nbsp;&nbsp;
						</label>-->
						<!--<label class="radio-inline">
						  <input type="radio" name="optradio">Male
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optradio">Female
						</label>-->
                                                <?= $form->field($user_model, 'gender')->radioList(array('M'=>'Male','F'=>'Female')); ?>
					</div>
					<div class="form-group col-sm-6">
						<div class="input-group date">
							<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
							</div>
						<?= $form->field($user_model, 'dob')->textInput(['autofocus' => true,'placeholder' => 'DOB','class' => 'form-control pull-right','data-provide'=>'datepicker'])->label(false) ?>
						</div>
					<!-- /.input group -->
					</div>
					<div class="form-group col-sm-6">
					    <!--<input type="text" class="form-control" name="SignupForm['father_name']" placeholder="Father's name" value="">-->
                                             <?= $form->field($user_model, 'father_name')->textInput(['autofocus' => true,'placeholder' => 'Father Name','class' => 'form-control'])->label(false) ?>

					</div>
					<div class="form-group col-sm-6">
					       <!--<input type="tel" class="form-control" name="txt_phone" placeholder="Phone" value="">-->
                                                <?= $form->field($user_model, 'phone_no')->textInput(['autofocus' => true,'placeholder' => 'Mobile No','class' => 'form-control'])->label(false) ?>
					</div>
					<div class="form-group col-sm-6">
						<!--<input type="email" class="form-control" name="txt_umail" placeholder="Email" value="">-->
                                                  <?= $form->field($user_model, 'email')->input('email',['placeholder' => 'Email'])->label(false) ?>

					</div>
					<div class="form-group col-sm-12">
						<label class="hidden">Joining Date:</label>
						<div class="input-group date">
						  <div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						  </div>
						<?php echo $form->field($user_model, 'joining_date')->textInput(['autofocus' => true,'placeholder' => 'Joining Date','class' => 'form-control pull-right','data-provide'=>'datepicker'])->label(false) ?>

						</div>
						<!-- /.input group -->
					</div>
					<div class="form-group col-sm-6">
					<!--<input type="text" class="form-control" name="SignupForm['class']" placeholder="Class" value="">-->
					 <?php echo $form->field($user_model, 'class')->dropDownList($class,['class' => 'form-control'])->label(false); ?>
                                        </div>
					<div class="form-group col-sm-6">
                                         <?php echo $form->field($user_model, 'subjects')->dropDownList($subjects,['class' => 'form-control'])->label(false); ?>
					<!--<input type="text" class="form-control" name="SignupForm['subjects']" placeholder="Subjects" value="">-->
					</div>
					<div class="form-group col-sm-6">
					<!--<input type="text" class="form-control" name="SignupForm['fees']" placeholder="Fee" value="">-->
					<?= $form->field($user_model, 'fees')->textInput(['autofocu<s' => true,'placeholder' => 'Fees','class' => 'form-control'])->label(false) ?>

                                        </div>
					<div class="form-group col-sm-6">
					<?= $form->field($user_model, 'school_name')->textInput(['autofocus' => true,'placeholder' => 'School/College name','class' => 'form-control'])->label(false) ?>
                                         <!--<input type="text" class="form-control" name="SignupForm['school_name']" placeholder="School/College name" value="">-->
					</div>
					<div class="form-group col-sm-12">
                                        <?= $form->field($user_model, 'address')->textarea(['class' => 'form-control','placeholder' => 'Address'])->label(false); ?>
                                        <!--<textarea type="text" class="form-control" name="SignupForm['address']" placeholder="Address" value=""></textarea>-->
					</div>
					<div class="form-group col-sm-12">
                                        <?= $form->field($user_model, 'other_detail')->textarea(['class' => 'form-control','placeholder' => 'Other Details'])->label(false); ?>
					<!--<textarea type="text" class="form-control" name="SignupForm['other_detail']" placeholder="Other Details" value=""></textarea>-->
					</div>

					<div class="form-group col-sm-6">
					<!--<input type="text" class="form-control" name="" placeholder="Username" value="">-->
					<?= $form->field($user_model, 'username')->textInput(['autofocus' => true,'placeholder' => 'User Name','class' => 'form-control'])->label(false) ?>
                                        </div>
					<div class="form-group has-feedback col-sm-6">
					<!--<input type="password" class="form-control" placeholder="Password" name="txt_upass" value="">-->
                                            <?= $form->field($user_model, 'password')->passwordInput(['autofocus' => true,'placeholder' => 'Password'])->label(false) ?>
					</div>
					<!-- /.col -->
					<!-- /.col -->
				</div>
              <!-- /.box-body -->
              <div class="box-footer">
                <!--<button type="submit" class="btn btn-primary">Register</button>-->
                <?= Html::submitButton('Register',['class'=> 'btn btn-primary']) ;?>

              </div>
            <?php ActiveForm::end(); ?>
</div>
</div>
<div class="clearfix"></div>

</section>

</div>
<script>
 /* jQuery(function () {
 //Date picker
    jQuery('#datepicker').datepicker({
      autoclose: true
    });
 });*/
</script>