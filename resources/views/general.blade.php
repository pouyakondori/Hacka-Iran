<!doctype html>
<html class="no-js" lang="en" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $PageTitle }}</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/custom.css">
  </head>
  <body>
<!-- ================== Header begins ====================== !-->
    <div class="expanded row">
        <div class="top-bar">
          <div class="top-bar-right">
            <ul class="menu" data-dropdown-menu>
              <li class="menu-text"><a href="/">هاکا @ ایران</a></li>
              <li><a href="#">هاکاتن چیست؟</a></li>
              <li><a href="#">لیست هاکاتن ها</a></li>
              <li><a href="#">شبکه</a></li>
            </ul>
          </div>
          <div class="top-bar-left">
            <ul class="menu">
              <li><button class="alert hollow button" href="#">ورود / ثبت نام <i class="fa fa-sign-in" aria-hidden="true"></i></button></li>
              <li>...</li>
              <li><button type="button" class="button alert">رویداد خود را اضافه کنید</button></li>
            </ul>
          </div>
    </div>
<!-- ================== Header Ends ====================== !-->

@yield('content')

<!-- ================== Footer Starts ====================== !-->
<div class="expanded row footer">
    <div class="large-2 columns">
      <h6>هاکا ایران </h6>
      <small> پلتفرم ماراتن های برنامه نویسی ایران</small></br>
      <small>میزبانی شده توسط سرورهای قدرتمند پارس پک</small>
    </div>
    <div class="large-8 columns left">
      <ul class="menu simple text-left">
        <li><a href="../about">درباره</a></li>
        <li><a href="../terms">قوانین</a></li>
        <li><a href="../support">حمایت</a></li>
      </ul>
    </div>
</div>
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>
  </body>
</html>
<!-- ================== Footer Ends ====================== !-->

