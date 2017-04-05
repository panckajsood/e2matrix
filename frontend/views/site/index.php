<?php 

/* @var $this yii\web\View */

$this->title = 'E2 Matrix Online';
?>
 <div class="clearfix" style=""></div>
 <div class="targetdiv" id="home"></div> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?= yii\helpers\Url::to('@web/frontend/web/images/banner1.jpg')?>">
      </div>

      <div class="item">
        <img src="<?= yii\helpers\Url::to('@web/frontend/web/images/banner2.jpg')?>">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
   </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
<div class="targetdiv" id="section-one"></div>
<section class="about pad-tb-30" >
  <div class="container">
        <div class="promo-block">
            <div class="promo-text">About us</div>
            <div class="center-line"></div>
        </div>
        <div class="text-center pad-t-20">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
  </div>
</section>

<div class="targetdiv" id="section-two"></div>
<section class="courses pad-tb-30" >
  <div class="container">
  <div class="col-sm-6">
        <div class="promo-block">
            <div class="promo-text">Subjects</div>
            <div class="center-line"></div>
        </div>
        <p class="pad-t-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an.</p>

        <ul class="list-check row">
            <li class="col-sm-6"><i class="icon-ok"></i> Physics</li>
            <li class="col-sm-6"><i class="icon-ok"></i> Chemistry</li>
            <li class="col-sm-6"><i class="icon-ok"></i> Mathematics</li>
            <li class="col-sm-6"><i class="icon-ok"></i> Accounts</li>
            <li class="col-sm-6"><i class="icon-ok"></i> Economics</li>
            <li class="col-sm-6"><i class="icon-ok"></i> English</li>
            <li class="col-sm-6"><i class="icon-ok"></i> Punjabi</li>
        </ul>
  </div> 
  <div class="col-sm-6">
        <div class="promo-block">
            <div class="promo-text">Programming Subjects</div>
            <div class="center-line"></div>
        </div>
        <div class="row pad-t-30">
            
            <div class="col-sm-6"><div class="other-serv">
                <div class="serv-icon"> <img src="<?= yii\helpers\Url::to('@web/frontend/web/images/c-lan.jpg')?>" alt="C"></div>
                <div class="serv-name">C</div>
                <div class="serv-desc hidden"></div>
            </div></div>
            <div class="col-sm-6"><div class="other-serv">
                <div class="serv-icon"> <img src="<?= yii\helpers\Url::to('@web/frontend/web/images/cp.jpg')?>" alt="C++"></div>
                <div class="serv-name">C++</div>
                <div class="serv-desc hidden"></div>
            </div></div>
            <div class="col-sm-6"><div class="other-serv">
                <div class="serv-icon"> <img src="<?= yii\helpers\Url::to('@web/frontend/web/images/java.jpg')?>" alt="JAVA"></div>
                <div class="serv-name">JAVA</div>
                <div class="serv-desc hidden"></div>
            </div></div>
            <div class="col-sm-6"><div class="other-serv">
                <div class="serv-icon"> <img src="<?= yii\helpers\Url::to('@web/frontend/web/images/php.jpg')?>" alt="PHP"></div>
                <div class="serv-name">PHP</div>
                <div class="serv-desc hidden"></div>
            </div></div>
            <div class="col-sm-6"><div class="other-serv">
                <div class="serv-icon"> <img src="<?= yii\helpers\Url::to('@web/frontend/web/images/dbms.jpg')?>" alt="DBMS"></div>
                <div class="serv-name">DBMS</div>
                <div class="serv-desc hidden"></div>
            </div></div>
            <div class="col-sm-6"><div class="other-serv">
                <div class="serv-icon"> <img src="<?= yii\helpers\Url::to('@web/frontend/web/images/wd.jpg')?>" alt="Web Designing"></div>
                <div class="serv-name">Web Designing</div>
                <div class="serv-desc hidden"></div>
            </div></div>
            
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
        <p class="testimonial-quote">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.</p>
        <p class="testimonial-author">Michael Cornelis</p>
        </div>
        <div class="item">
        <p class="testimonial-quote">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.</p>
        <p class="testimonial-author">Jean-Noël Chamart</p>
        </div>
        <div class="item">
        <p class="testimonial-quote">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.</p>
        <p class="testimonial-author">Luke Courtney</p>
        </div>
        <div class="item">
        <p class="testimonial-quote">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.</p>
        <p class="testimonial-author">Andy Rihn</p>
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
