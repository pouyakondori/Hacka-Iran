@extends('general')
@section('content')

<div class="row network-header">
  	<div class="large-6 columns">

		<fieldset class="fieldset">
		  <legend>ثبت نام کاربر جدید</legend>
		<form>
		  <div class="row">
		  	<div class="medium-12 columns">
		  		<p class="text-center">ثبت نام از طریق شبکه های اجتماعی</p>
		  	</div>
		    <div class="medium-4 columns">
				<button class="secondary button" href="#"><i class="fa fa-github" aria-hidden="true"></i> ثبت نام با Github</button>
		    </div>
		    <div class="medium-4 columns">
				<button class="alert button" href="#"><i class="fa fa-google" aria-hidden="true"></i> ثبت نام با Google</button>
		    </div>
		    <div class="medium-4 columns">
				<button class="twitter-button button" href="#"><i class="fa fa-twitter" aria-hidden="true"></i> ثبت نام با Twitter</button>
		    </div>  
		    <hr>        
		    <div class="medium-6 columns">
		      <label>نام
		        <input type="text" placeholder="نام">
		      </label>
		    </div>
		    <div class="medium-6 columns">
		      <label>نام خانوادگی
		        <input type="text" placeholder="نام خانوادگی">
		      </label>
		    </div>
		    <div class="medium-12 columns">
		      <label>شماره همراه
		        <input type="text" placeholder="مثال: ۰۹۱۲۱۲۳۴۵۶۷">
		      </label>
		    </div>
		    <div class="medium-12 columns">
		      <label>آدرس ایمیل
		        <input type="text" placeholder="مثال: love@iran.ir">
		      </label>
		    </div>
		    <div class="medium-12 columns">
		      <label>کلمه عبور
		        <input type="text" placeholder="حداقل ۸ کاراکتر">
		      </label>
		    </div>
		    <div class="medium-12 columns">
		      <label>تکرار کلمه عبور
		        <input type="text" placeholder="مشابه رمز عبور">
		      </label>
		    </div>
		  </div>
		</form>
		<input id="checkbox32" type="checkbox">
		<label for="checkbox32">کلیه <a href="../terms" target="_blank">قوانین و شرایط </a>هاکا ایران را قبول دارم</label>
		<div class="medium-4 columns">
			<button class="button expanded" href="#"> ثبت نام </button>
		</div>
		</fieldset>
	</div>
	<div class="large-6 columns">

		<fieldset class="fieldset">
		  <legend>ورود کاربر</legend>
		<form>
		  <div class="row">
		  	<div class="medium-12 columns">
		  		<p class="text-center">ورود از طریق شبکه های اجتماعی</p>
		  	</div>
		    <div class="medium-4 columns">
				<button class="secondary button" href="#"><i class="fa fa-github" aria-hidden="true"></i> ثبت نام با Github</button>
		    </div>
		    <div class="medium-4 columns">
				<button class="alert button" href="#"><i class="fa fa-google" aria-hidden="true"></i> ثبت نام با Google</button>
		    </div>
		    <div class="medium-4 columns">
				<button class="twitter-button button" href="#"><i class="fa fa-twitter" aria-hidden="true"></i> ثبت نام با Twitter</button>
		    </div>  
		    <hr>        
		    <div class="medium-12 columns">
		      <label>آدرس ایمیل
		        <input type="text" placeholder="مثال: love@iran.ir">
		      </label>
		    </div>
		    <div class="medium-12 columns">
		      <label>کلمه عبور
		        <input type="text" placeholder="حداقل ۸ کاراکتر">
		      </label>
		    </div>
		  </div>
		</form>

		<input id="checkbox32" type="checkbox">
		<label for="checkbox32">مرا به خاطر بسپار</label>
		<input id="checkbox32" type="checkbox">
		<label for="checkbox32"><a href="../forgetpassword">کلمه عبور خود را فراموش کرده اید؟</a></label>
		<div class="medium-4 columns">
			<button class="button expanded" href="#"> ورود </button>
		</div>
		</fieldset>


	</div>
</div>
@stop