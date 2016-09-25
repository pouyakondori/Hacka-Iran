@extends('general')
@section('content')


<div class="extended row eventcover">
    <div class="large-10 large-offset-1 columns">
        <h1>عنوان اصلی هاکاتن</h1>
        <p>توضیحات معرفی هاکاتن</p>
        <small><i class="fa fa-map-marker" aria-hidden="true"></i> تهران - دانشگاه شهید بهشتی</small>
        <small><i class="fa fa-clock-o" aria-hidden="true"></i> ۵ تا ۷ آبان ۱۳۹۵</small>
    </div>
</div>

<div class="row">
    <div class="large-10 large-offset-1 columns">
<!-- =============================================== Tab Titles Starts ====================================== !-->
    <ul class="tabs" data-tabs id="event-tabs">
      <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">توضیحات عمومی</a></li>
      <li class="tabs-title"><a href="#panel2">زمانبندی</a></li>
      <li class="tabs-title"><a href="#panel3">قوانین</a></li>
      <li class="tabs-title"><a href="#panel4">گفتگوها</a></li>
      <li class="tabs-title"><a href="#panel5">شرکت کنندگان</a></li>
      <li class="tabs-title"><a href="#panel6">پروژه ها</a></li>
      <li class="tabs-title"><a href="#panel7">دیوار توییت</a></li>
      <li class="tabs-title"><a href="#panel8">حامیان</a></li>
    </ul>
<!-- =============================================== Tab Titles Ends ====================================== !-->

<div class="tabs-content" data-tabs-content="event-tabs">

<!-- =============================================== Tab 1 Starts ====================================== !-->
<div class="tabs-panel is-active" id="panel1">

<div class="row">
    <div class="large-4 small-12 columns">
        <a class="button expanded alert" href="/register">ثبت نام </a>
        <p class="callout warning">آخرین مهلت ثبت نام: ۳۰ مهر ۱۳۹۵</p>
        <div class="callout primary">
            <h5>برگزارکنندگان</h5><hr>
            <div class="media-object">
              <div class="media-object-section top">
                <div class="thumbnail">
                  <img src= "../images/user.png" width="50">
                </div>
              </div>
              <div class="media-object-section">
                <h6>امین کاکاوند</h6>
                <p>برنامه نویس</p>
              </div>
            </div>
        </div>


        <div class="callout success">
            <h5>آخرین شرکت کنندگان</h5><hr>
            <div class="media-object">
              <div class="media-object-section top">
                <div class="thumbnail">
                  <img src= "../images/user.png" width="50">
                </div>
              </div>
              <div class="media-object-section">
                <h6>امین کاکاوند</h6>
                <p>برنامه نویس</p>
              </div>
            </div>
            <div class="media-object">
              <div class="media-object-section top">
                <div class="thumbnail">
                  <img src= "../images/user.png" width="50">
                </div>
              </div>
              <div class="media-object-section">
                <h6>امین کاکاوند</h6>
                <p>برنامه نویس</p>
              </div>
            </div>
            <div class="media-object">
              <div class="media-object-section top">
                <div class="thumbnail">
                  <img src= "../images/user.png" width="50">
                </div>
              </div>
              <div class="media-object-section">
                <h6>امین کاکاوند</h6>
                <p>برنامه نویس</p>
              </div>
            </div>
            <small>مشاهده لیست کلیه شرکت کنندگان در بخش شرکت کنندگان</small>
        </div>
    </div>

    <div class="large-8 small-12 columns">
        <div class="callout white-callout">
            <h5>جک لیست رویداد</h5>
            <div class="row">
                <div class="large-3 columns">
                    <a class="button expanded"><i class="fa fa-pencil fa-5x" aria-hidden="true"></i></a>
                    <p class="text-center">ثبت نام</p>
                </div>
                <div class="large-3 columns">
                    <a class="alert button expanded"><i class="fa fa-user-plus fa-5x" aria-hidden="true"></i></a>
                    <p class="text-center">ساختن پروفایل</p>
                </div>                
                <div class="large-3 columns">
                    <a class="alert button expanded"><i class="fa fa-folder-open fa-5x" aria-hidden="true"></i></a>
                    <p class="text-center">افزودن پروژه</p>
                </div>                
                <div class="large-3 columns">
                    <a class="alert button expanded"><i class="fa fa-users fa-5x" aria-hidden="true"></i></a>
                    <p class="text-center">افزودن هم تیمی</p>
                </div>
            </div>
        </div>
                <fieldset class="fieldset">
                  <legend>درباره رویداد</legend>
                        <p> توضیحات رویداد در این نوشته می شود. توضیحات رویداد در این نوشته می شود. توضیحات رویداد در این نوشته می شود. </p>
                </fieldset>

                <fieldset class="fieldset">
                  <legend>جوایز رویداد</legend>
                    <div class="row">
                        <div class="large-4 columns">
                            <a class="secondary button expanded"><img src="../images/cup.png" /></a>
                            <h5 class="text-center">تیم اول </br> ۱۰.۰۰۰.۰۰۰ تومان</h5>
                        </div>                
                        <div class="large-4 columns">
                            <a class="secondary button expanded"><img src="../images/cup.png" /></a>
                            <h5 class="text-center">تیم دوم </br> ۵.۰۰۰.۰۰۰ تومان</h5>
                        </div>  
                        <div class="large-4 columns">
                            <a class="secondary button expanded"><img src="../images/cup.png" /></a>
                            <h5 class="text-center">تیم سوم </br> ۳.۰۰۰.۰۰۰ تومان</h5>
                        </div>                          
                    </div>
                </fieldset>
        </div>
    </div>
</div>
<!-- =============================================== Tab 1 Ends ====================================== !-->

<!-- =============================================== Tab 2 Starts ====================================== !-->

<div class="tabs-panel" id="panel2">
    <div class="row">
        <div class="large-4 columns">
            <table>
              <thead>
                <tr>
                  <th>چهارشنبه</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>۰۹:۰۰ - پذیرش و شبکه سازی</td>
                </tr>
                <tr>
                  <td>۹:۳۰ - صبحانه و معرفی چالش های</td>
                </tr>
                <tr>
                  <td>۱۱:۰۰ - ساعت مربیان</td>
                </tr>
                <tr>
                  <td>۱۳:۰۰ - نهار و نماز</td>
                </tr>
                <tr>
                  <td>۱۷:۰۰ - ساعت مربیان</td>
                </tr>
                <tr>
                  <td>۲۲:۰۰ - اتمام روز اول</td>
                </tr>                                                                                                
              </tbody>
            </table>
        </div>
        <div class="large-4 columns">
            <table>
              <thead>
                <tr>
                  <th>پنجشنبه</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>۰۹:۰۰ - صبحانه</td>
                </tr>
                <tr>
                  <td>۱۱:۰۰ - ساعت مربیان</td>
                </tr>
                <tr>
                  <td>۱۳:۰۰ - نهار و نماز</td>
                </tr>
                <tr>
                  <td>۱۷:۰۰ - ساعت مربیان</td>
                </tr>
                <tr>
                  <td>۲۲:۰۰ - اتمام روز دوم</td>
                </tr>                                                                                                
              </tbody>
            </table>
        </div>
        <div class="large-4 columns">
            <table>
              <thead>
                <tr>
                  <th>جمعه</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>۰۹:۰۰ - صبحانه</td>
                </tr>
                <tr>
                  <td>۱۱:۰۰ - ساعت مربیان</td>
                </tr>
                <tr>
                  <td>۱۳:۰۰ - نهار و نماز</td>
                </tr>
                <tr>
                  <td>۱۷:۰۰ - اتمام کار تیم ها</td>
                </tr>
                <tr>
                  <td>۱۸:۰۰ - مراسم اختتامیه</td>
                </tr> 
                <tr>
                  <td>۲۲:۰۰ - اتمام رویداد</td>
                </tr>
              </tbody>
            </table>
        </div>                
    </div>    
</div>



<!-- =============================================== Tab 2 Ends ====================================== !-->

<!-- =============================================== Tab 3 Starts ====================================== !-->

<div class="tabs-panel" id="panel3">
    <div class="row">
      <div class="large-10 large-offset-1 columns">
        <h5>قوانین هاکاتن</h5>
        <p>متن قوانین در این قسمت نوشته می شود متن قوانین در این قسمت نوشته می شود متن قوانین در این قسمت نوشته می شود
متن قوانین در این قسمت نوشته می شود متن قوانین در این قسمت نوشته می شود متن قوانین در این قسمت نوشته می شود متن قوانین در این قسمت نوشته می شود متن قوانین در این قسمت نوشته می شود متن قوانین در این قسمت نوشته می شود متن قوانین در این قسمت نوشته می شود</p>
      </div>
    </div>    
</div>

<!-- =============================================== Tab 3 Ends ====================================== !-->

<!-- =============================================== Tab 4 Starts ====================================== !-->

<div class="tabs-panel" id="panel4">
    <div class="row">
      <div class="large-10 large-offset-1 columns">
        <h5>گفتگوی زنده</h5>
        <p>در این قسمت سیستم چت نصب خواهد شد.</p>
      </div>
    </div>    
</div>

<!-- =============================================== Tab 4 Ends ====================================== !-->

<!-- =============================================== Tab 5 Starts ====================================== !-->

<div class="tabs-panel" id="panel5">
  <div class="row">
    <div class="large-4 medium-6 small-12 columns">    
        <div class="callout">
          <img src= "../images/user.png" width="80" class="float-right"> نام و نام خانوادگی
            <span class="info label float-right skill"><i class="fa fa-cog"></i> برنامه نویس</span>
            <small class="float-left">
              <i class="fa fa-twitter" aria-hidden="true"></i>
              <i class="fa fa-github-alt" aria-hidden="true"></i>
              <i class="fa fa-facebook" aria-hidden="true"></i>
              <i class="fa fa-globe" aria-hidden="true"></i>
            </small></br>
          <small>معرفی توییتری به صورت ۱۴۰ کاراکتر در این قسمت قرار خواهد گرفت. این معرفی بسیار خوب است.</small>
        </div>
    </div>

    <div class="large-4 medium-6 small-12 columns">    
        <div class="callout">
          <img src= "../images/user.png" width="80" class="float-right"> نام و نام خانوادگی
            <span class="info label float-right skill"><i class="fa fa-cog"></i> سرمایه گذار</span>
            <small class="float-left">
              <i class="fa fa-twitter" aria-hidden="true"></i>
              <i class="fa fa-github-alt" aria-hidden="true"></i>
              <i class="fa fa-facebook" aria-hidden="true"></i>
              <i class="fa fa-globe" aria-hidden="true"></i>
            </small></br>
          <small>معرفی توییتری به صورت ۱۴۰ کاراکتر در این قسمت قرار خواهد گرفت. این معرفی بسیار خوب است.</small>
        </div>
    </div>

    <div class="large-4 medium-6 small-12 columns">    
        <div class="callout">
          <img src= "../images/user.png" width="80" class="float-right"> نام و نام خانوادگی
            <span class="info label float-right skill"><i class="fa fa-cog"></i> مربی</span>
            <small class="float-left">
              <i class="fa fa-twitter" aria-hidden="true"></i>
              <i class="fa fa-github-alt" aria-hidden="true"></i>
              <i class="fa fa-facebook" aria-hidden="true"></i>
              <i class="fa fa-globe" aria-hidden="true"></i>
            </small></br>
          <small>معرفی توییتری به صورت ۱۴۰ کاراکتر در این قسمت قرار خواهد گرفت. این معرفی بسیار خوب است.</small>
        </div>
    </div>

    <div class="large-4 medium-6 small-12 columns">    
        <div class="callout">
          <img src= "../images/user.png" width="80" class="float-right"> نام و نام خانوادگی
            <span class="info label float-right skill"><i class="fa fa-cog"></i> سرمایه گذار</span>
            <small class="float-left">
              <i class="fa fa-twitter" aria-hidden="true"></i>
              <i class="fa fa-github-alt" aria-hidden="true"></i>
              <i class="fa fa-facebook" aria-hidden="true"></i>
              <i class="fa fa-globe" aria-hidden="true"></i>
            </small></br>
          <small>معرفی توییتری به صورت ۱۴۰ کاراکتر در این قسمت قرار خواهد گرفت. این معرفی بسیار خوب است.</small>
        </div>
    </div>

    <div class="large-4 medium-6 small-12 columns">    
        <div class="callout">
          <img src= "../images/user.png" width="80" class="float-right"> نام و نام خانوادگی
            <span class="info label float-right skill"><i class="fa fa-cog"></i> سرمایه گذار</span>
            <small class="float-left">
              <i class="fa fa-twitter" aria-hidden="true"></i>
              <i class="fa fa-github-alt" aria-hidden="true"></i>
              <i class="fa fa-facebook" aria-hidden="true"></i>
              <i class="fa fa-globe" aria-hidden="true"></i>
            </small></br>
          <small>معرفی توییتری به صورت ۱۴۰ کاراکتر در این قسمت قرار خواهد گرفت. این معرفی بسیار خوب است.</small>
        </div>
    </div>

    <div class="large-4 medium-6 small-12 columns">    
        <div class="callout">
          <img src= "../images/user.png" width="80" class="float-right"> نام و نام خانوادگی
            <span class="info label float-right skill"><i class="fa fa-cog"></i> سرمایه گذار</span>
            <small class="float-left">
              <i class="fa fa-twitter" aria-hidden="true"></i>
              <i class="fa fa-github-alt" aria-hidden="true"></i>
              <i class="fa fa-facebook" aria-hidden="true"></i>
              <i class="fa fa-globe" aria-hidden="true"></i>
            </small></br>
          <small>معرفی توییتری به صورت ۱۴۰ کاراکتر در این قسمت قرار خواهد گرفت. این معرفی بسیار خوب است.</small>
        </div>
    </div>
                
  </div>
</div>

<!-- =============================================== Tab 5 Ends ====================================== !-->

<!-- =============================================== Tab 6 Starts ====================================== !-->

<div class="tabs-panel" id="panel6">
        <h5>لیست پروژه های این هاکاتن</h5>
        <!-- =============== New Project begins here ===================== !-->
            <div class="row callout primary">
                <div class="large-2 medium-2 small-4 columns">    
                  <img src= "../images/project.png" />
                </div>
                <div class="large-10 medium-10 small-8 columns">
                  <h5>عنوان پروژه در این قسمت</h5>
                  <span class="success label float-left">زبان برنامه نویسی: Python</span>
                  <p>معرفی پروژه در این قسمت انجام خواهد شد. این موضوع پروزه بسیار جالب است. </p>
                  <hr>
                  <h6>اعضای تیم</h6>
                  <span data-tooltip aria-haspopup="true" class="has-tip bottom tipprof" data-disable-hover="false" tabindex="2" title="امین کاکاوند"><img src="../images/user.png" class="ProfImage" /></span>
                  <span data-tooltip aria-haspopup="true" class="has-tip bottom tipprof" data-disable-hover="false" tabindex="2" title="امین کاکاوند"><img src="../images/user.png" class="ProfImage" /></span>
                  <span data-tooltip aria-haspopup="true" class="has-tip bottom tipprof" data-disable-hover="false" tabindex="2" title="امین کاکاوند"><img src="../images/user.png" class="ProfImage" /></span>
                  <span data-tooltip aria-haspopup="true" class="has-tip bottom tipprof" data-disable-hover="false" tabindex="2" title="امین کاکاوند"><img src="../images/user.png" class="ProfImage" /></span>                  
                </div>
            </div>
        <!-- =============== New Project Ends here ===================== !-->

        <!-- =============== New Project begins here ===================== !-->
            <div class="row callout primary">
                <div class="large-2 medium-2 small-4 columns">    
                  <img src= "../images/project.png" />
                </div>
                <div class="large-10 medium-10 small-8 columns">
                  <h5>عنوان پروژه در این قسمت</h5>
                  <span class="primary label float-left">زبان برنامه نویسی: .Net</span>
                  <p>معرفی پروژه در این قسمت انجام خواهد شد. این موضوع پروزه بسیار جالب است. </p>
                  <hr>
                  <h6>اعضای تیم</h6>
                  <span data-tooltip aria-haspopup="true" class="has-tip bottom tipprof" data-disable-hover="false" tabindex="2" title="امین کاکاوند"><img src="../images/user.png" class="ProfImage" /></span>
                  <span data-tooltip aria-haspopup="true" class="has-tip bottom tipprof" data-disable-hover="false" tabindex="2" title="امین کاکاوند"><img src="../images/user.png" class="ProfImage" /></span>
                  <span data-tooltip aria-haspopup="true" class="has-tip bottom tipprof" data-disable-hover="false" tabindex="2" title="امین کاکاوند"><img src="../images/user.png" class="ProfImage" /></span>
                  <span data-tooltip aria-haspopup="true" class="has-tip bottom tipprof" data-disable-hover="false" tabindex="2" title="امین کاکاوند"><img src="../images/user.png" class="ProfImage" /></span>                  
                </div>
            </div>
        <!-- =============== New Project Ends here ===================== !-->

        <!-- =============== New Project begins here ===================== !-->
            <div class="row callout primary">
                <div class="large-2 medium-2 small-4 columns">    
                  <img src= "../images/project.png" />
                </div>
                <div class="large-10 medium-10 small-8 columns">
                  <h5>عنوان پروژه در این قسمت</h5>
                  <span class="alert label float-left">زبان برنامه نویسی: Ruby</span>
                  <p>معرفی پروژه در این قسمت انجام خواهد شد. این موضوع پروزه بسیار جالب است. </p>
                  <hr>
                  <h6>اعضای تیم</h6>
                  <span data-tooltip aria-haspopup="true" class="has-tip bottom tipprof" data-disable-hover="false" tabindex="2" title="امین کاکاوند"><img src="../images/user.png" class="ProfImage" /></span>
                  <span data-tooltip aria-haspopup="true" class="has-tip bottom tipprof" data-disable-hover="false" tabindex="2" title="امین کاکاوند"><img src="../images/user.png" class="ProfImage" /></span>
                  <span data-tooltip aria-haspopup="true" class="has-tip bottom tipprof" data-disable-hover="false" tabindex="2" title="امین کاکاوند"><img src="../images/user.png" class="ProfImage" /></span>
                  <span data-tooltip aria-haspopup="true" class="has-tip bottom tipprof" data-disable-hover="false" tabindex="2" title="امین کاکاوند"><img src="../images/user.png" class="ProfImage" /></span>                  
                </div>
            </div>
        <!-- =============== New Project Ends here ===================== !-->

</div>

<!-- =============================================== Tab 6 Ends ====================================== !-->

<!-- =============================================== Tab 7 Starts ====================================== !-->

<div class="tabs-panel" id="panel7">
    <div class="row">
      <div class="large-10 large-offset-1 columns">
        <h5>توییت های مرتبط با این رویداد را از طریق هشتگ hackafin# دنبال کنید:</h5>
        <p>لیست توییت ها در اینجا نشان داده خواهد شد.</p>
      </div>
    </div>    
</div>

<!-- =============================================== Tab 7 Ends ====================================== !-->

<!-- =============================================== Tab 8 Starts ====================================== !-->

<div class="tabs-panel" id="panel8">
    <div class="row">
      <h5>حامیان خوب این برنامه عبارتند از:</h5>

        <!-- =============== New Sponsor Begins ===================== !-->
            <div class="row callout success">
                <div class="large-2 medium-2 small-4 columns">    
                  <img src= "../images/sponsor.png" />
                </div>
                <div class="large-10 medium-10 small-8 columns">
                  <h5>کسب و کارهای نوآورانه جهش <span class="alert label float-left">حامی مالی</span></h5>
                  <p>
                  <span class="callout alert float-left">۲.۰۰۰.۰۰۰ تومان</span>
                  جهش یکی از واحدهای فناور مرکز نوآوری و رشد دانشگاه شهید بهشتی است که برای ارتقای سواد برنامه نویسی تصمیم گرفته است از این رویدادها حمایت کند. </p>
                </div>
            </div>
        <!-- =============== New Sponsor Ends ===================== !-->

        <!-- =============== New Sponsor Begins ===================== !-->
            <div class="row callout primary">
                <div class="large-2 medium-2 small-4 columns">    
                  <img src= "../images/icymonkey.png" />
                </div>
                <div class="large-10 medium-10 small-8 columns">
                  <h5>Icy Monkey<span class="alert label float-left">حامی مالی</span></h5>
                  <p>
                  <span class="callout alert float-left">نوشیدنی های رایگان!</span>
                  از ریمیکس های خوبی که آیسی مانکی اسپانسر میشه اگر بخوایم بگذریم، این برند به کارآفرینی هم اهمیت زیادی میده! ممنونیم ازشون</p>
                </div>
            </div>
        <!-- =============== New Sponsor Ends ===================== !-->


    </div>    
</div>

<!-- =============================================== Tab 8 Ends ====================================== !-->


</div>

</div>
</div>


@stop