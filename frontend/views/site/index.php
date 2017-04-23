<?php 

/* @var $this yii\web\View */

$this->title = 'E2 Matrix Online';
?>
<div class="targetdiv" id="home"></div> 
<div class="bannerhome text-center">
	<div class="container">
                <h1><span id="hi">hi, </span><span id="name">Welcome to</span></h1>
                <h2><span id="job">E2matrix Study Accademy</span></h2>
                <div class="buttons">
                    <button id="b1" style="opacity: 1;">Login/Register</button>
                    <button id="b2" data-target="#section-five" class="scrollTodiv" style="opacity: 1;">Contact Us</button>
                </div>
               
                <div class="down">
                    <a data-target="#section-one" class="scrollTodiv"><i id="down-icon" class="fa fa-angle-double-down" aria-hidden="true"></i></a>
                </div>
         </div>
</div>
<div class="clearfix" style=""></div> 
 
<div class="targetdiv" id="section-one"></div>
<section class="about pad-tb-60" >
  <div class="container">
		<div class="promo-block">
			<div class="promo-text">Why us</div>
			<div class="center-line"></div>
		</div>
		<div class="text-center pad-t-20">
<div class="about-holder row  col-sm-10 col-sm-offset-1">
	<div class="about col-sm-4 pad-tb-20">
		<div class="icon-box"><img src="<?= yii\helpers\Url::to('@web/frontend/web/images/great_teacher_icon.svg')?>" /></div>
		<h4 class="name">Great Teachers</h4>
		<p class="detail">Handpicked and trained to provide quality teaching</p>
	</div>
	<div class="about col-sm-4 pad-tb-20">
		<div class="icon-box"><img src="<?= yii\helpers\Url::to('@web/frontend/web/images/personalized_icon.svg')?>" /></div>
		<h4 class="name">Personalized Teaching</h4>
		<p class="detail">-100% Personal attention<br>-Teaching at student's pace</p>
	</div>
	<div class="about col-sm-4 pad-tb-20">
		<div class="icon-box"><img src="<?= yii\helpers\Url::to('@web/frontend/web/images/convinient_icon.svg')?>" /></div>
		<h4 class="name">Convenient &amp; Safe</h4>
		<p class="detail">Learn from your home, anytime from any device</p>
	</div>
</div>
		</div>
  </div>
</section>
<div class="clearfix" style=""></div> 


<div class="targetdiv" id="section-two"></div>
<section id="pricing" class="pad-tb-60">
    <div class="container">
		<div class="promo-block pad-b-30">
			<div class="promo-text"><h2>Our Offerings</h2></div>
			<div class="center-line"></div>
		</div>
                <!-- plan 1 -->
		<div class="plan-o col-md-4">
			<div class="plan">
				<div class="plan-head">
					<h3>Regular  Tuitions</h3>
					<div class="sub-heading">Full syllabus coverage through regular classes. Easy monthly installments</div>
				</div>
				<ul class="list-check cgreen property true" data-mh="plan">
					<li><i class="icon-ok"></i> Physics</li>
					<li><i class="icon-ok"></i> Chemistry</li>
					<li><i class="icon-ok"></i> Mathematics</li>
					<li><i class="icon-ok"></i> Accounts</li>
					<li><i class="icon-ok"></i> Economics</li>
					<li><i class="icon-ok"></i> English</li>
					<li><i class="icon-ok"></i> Punjabi</li>
				</ul>
				<p class="text-center"><button data-target="#section-five" class="scrollTodiv">Enroll now</button></p>
			</div>
		</div>
		
		<!-- plan 2 -->
		<div class="plan-o col-md-4">
			<div class="plan">
			   
				<div class="plan-head">
					 <h3>Competative Exams</h3> 
					<div class="sub-heading">Tuitions classes for competative Exams. Regular classes under fixed schedule</div>
				</div>
				<ul class="list-check cgreen property true" data-mh="plan">
					<li><i class="icon-ok"></i> JET</li>
					<li><i class="icon-ok"></i> Reasoning</li>
					<li><i class="icon-ok"></i> Ability</li>
					<li><i class="icon-ok"></i> Aptitude</li>
					<li><i class="icon-ok"></i> All Banking Exams</li>
					<li>&nbsp;</li>
					<li>&nbsp;</li>
				</ul>
				<p class="text-center"><button data-target="#section-five" class="scrollTodiv">Enroll now</button></p>
			</div>
		</div>
		
		<!-- plan 3 -->
		<div class="plan-o col-md-4">
			<div class="plan active">
				<div class="plan-head">
					   <h3>Other Courses</h3>
					<div class="sub-heading">Tuitions for Diplomas, B.Tech/M.Tech, BCA/MCA, B.Com/B.A, LLB Subjects</div>
				</div>
			  
				<ul class="list-check property true" data-mh="plan">
					<li><img src="<?= yii\helpers\Url::to('@web/frontend/web/images/c-lan.jpg')?>" alt="C">C</li>
					<li><img src="<?= yii\helpers\Url::to('@web/frontend/web/images/cp.jpg')?>" alt="C++">C++</li>
					<li><img src="<?= yii\helpers\Url::to('@web/frontend/web/images/java.jpg')?>" alt="JAVA">JAVA</li>
					<li><img src="<?= yii\helpers\Url::to('@web/frontend/web/images/php.jpg')?>" alt="PHP">PHP</li>
					<li><img src="<?= yii\helpers\Url::to('@web/frontend/web/images/dbms.jpg')?>" alt="DBMS">DBMS</li>
					<li><img src="<?= yii\helpers\Url::to('@web/frontend/web/images/wd.jpg')?>" alt="Web Designing">Web Designing</li>
					<li>&nbsp;</li>
				</ul>
				<p class="text-center"><button data-target="#section-five" class="scrollTodiv">Enroll now</button></p>
			</div>
		</div>
    </div>
</section>

<section id="competativeExams" class="section-cexams">
    <div class="container">
    
        <div class="col-sm-24">
            <div class="icon-box-container text-center">
                <div class="icon-box"><i class="fa fa-book" aria-hidden="true"></i></div>
                <h3>JET</h3>
            </div>
        </div>
        <div class="col-sm-24">
            <div class="icon-box-container text-center">
                <div class="icon-box"><i class="fa fa-angellist" aria-hidden="true"></i></div>
                <h3>Reasoning</h3>
            </div>
        </div>
        <div class="col-sm-24">
            <div class="icon-box-container text-center">
                <div class="icon-box"><i class="fa fa-font-awesome" aria-hidden="true"></i></div>
                <h3>Ability</h3>
            </div>
        </div>
        <div class="col-sm-24">
            <div class="icon-box-container text-center">
                <div class="icon-box"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                <h3>Aptitude</h3>
            </div>
        </div>
        <div class="col-sm-24">
            <div class="icon-box-container text-center">
                <div class="icon-box"><i class="fa  fa-bank" aria-hidden="true"></i></div>
                <h3>All Banking Exams</h3>
            </div>
        </div>
        
    </div>
</section>
<div class="targetdiv" id="section-three"></div>
<section id="ourAchievers" class="section-ourachievers" style="background-image:url();  background-color:#ecf0f1;color:;">
    <div class="container">
            <h2 class="section-title text-center">Our Achievers</h2>
            <br/>
            <span class="section-line"></span>                   
            
        <div class="row">
            
            <div class="col-sm-3">
            <div class="member">
            
                <div class="member-image front">
                    <img class="img-responsive" src="http://topdesign.gr/demo/axes/demo6/wp-content/uploads/2015/06/team_member_1.jpg" alt="Mary Doe">
                </div>
                <div class="member-image back">
                    <img class="img-responsive" src="http://topdesign.gr/demo/axes/demo6/wp-content/uploads/2015/06/team_member_1.jpg" alt="Mary Doe">
                </div>
                <div class="member-details">
                    <h5 class="member-name">Mary Doe</h5>
                        <div class="member-job">CEO at Axes</div>
                </div>
            </div>
            </div>
            <div class="col-sm-3">
            <div class="member">
                <div class="member-image front">
                    <img class="img-responsive" src="http://topdesign.gr/demo/axes/demo6/wp-content/uploads/2015/06/team_member_2.jpg" alt="Mary Doe">
                </div>
                <div class="member-image back">
                    <img class="img-responsive" src="http://topdesign.gr/demo/axes/demo6/wp-content/uploads/2015/06/team_member_2.jpg" alt="Mary Doe">
                </div>
                <div class="member-details">
                    <h5 class="member-name">Mary Doe</h5>
                        <div class="member-job">CEO at Axes</div>
                </div>
            </div>
            </div>
            <div class="col-sm-3">
            <div class="member">
                <div class="member-image front">
                    <img class="img-responsive" src="http://topdesign.gr/demo/axes/demo6/wp-content/uploads/2015/06/team_member_3.jpg" alt="Mary Doe">
                </div>
                <div class="member-image back">
                    <img class="img-responsive" src="http://topdesign.gr/demo/axes/demo6/wp-content/uploads/2015/06/team_member_3.jpg" alt="Mary Doe">
                </div>
                <div class="member-details">
                    <h5 class="member-name">Mary Doe</h5>
                        <div class="member-job">CEO at Axes</div>
                </div>
            </div>
            </div>
            <div class="col-sm-3">
            <div class="member">
                <div class="member-image front">
                    <img class="img-responsive" src="http://topdesign.gr/demo/axes/demo6/wp-content/uploads/2015/06/team_member_4.jpg" alt="Mary Doe">
                </div>
                <div class="member-image back">
                    <img class="img-responsive" src="http://topdesign.gr/demo/axes/demo6/wp-content/uploads/2015/06/team_member_4.jpg" alt="Mary Doe">
                </div>
                <div class="member-details">
                    <h5 class="member-name">Mary Doe</h5>
                        <div class="member-job">CEO at Axes</div>
                </div>
            </div>
            </div>
            
        </div>
    </div>
</section>


<div class="targetdiv" id="section-four"></div> 
<section class="prl-1 text-center">
<div class="prlx">
<div class="container">
    <div class="row">
        <div class="quote"><i class="fa fa-quote-right"></i></div>
            <div class="col-lg-12">
            <div class="testimonials">
<div id="carousel-testimonials" class="carousel slide">
	<ol class="carousel-indicators">
		<li data-target="#carousel-testimonials" data-slide-to="0" class=""></li>
		<li data-target="#carousel-testimonials" data-slide-to="1" class=""></li>
		<li data-target="#carousel-testimonials" data-slide-to="2" class=""></li>
		<li data-target="#carousel-testimonials" data-slide-to="3" class="active"></li>
	</ol>
	<div class="carousel-inner">
		<div class="item active">
		<p class="testimonial-quote">Teacher is very good and I can now understand him well. i finally found someone who could make me understand!!!! :D</p>
		<p class="testimonial-author">Anita Saini</p>
		</div>
		<div class="item">
		<p class="testimonial-quote">I always love ur sessions sir bcos u make studies interesting. Awesome class... All the concepts taught in a very easy manner...</p>
		<p class="testimonial-author">Nisha sood</p>
		</div>
		<div class="item">
		<p class="testimonial-quote">He teaches Algebra in a way we can understand as soon as he tells. thank u sir for explaining so well!! and showing ur concern towards me.</p>
		<p class="testimonial-author">Sanjeev Rai</p>
		</div>
		<div class="item">
		<p class="testimonial-quote">Awesome class, I have started to love Maths bcos of u! tnx lot Sir!!!!</p>
		<p class="testimonial-author">Ranvir Singh</p>
		</div>
		
	</div>
	<a class="left carousel-control" href="#carousel-testimonials" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#carousel-testimonials" data-slide="next">›</a>
</div>
            </div>
        </div>
    </div>
</div>
</div>
</section>

<div class="targetdiv" id="section-five"></div>
