<!DOCTYPE html>
<html lang="ar" dir="rtl" >
<head>
    
    <!-- Page title -->
	<title>   </title>
    
    <!-- meta -->
   	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="لوحة التحكم">
    
    <!-- favicon -->
	<link rel="icon" type="image/x-icon" href="assets/admin/images/favicon.png" />
	<link rel="stylesheet" type="text/css" href="assets/admin/css/rtl.css?v=1" />
	
	<!-- JS script -->
	<script type="text/javascript" src="assets/admin/js/all.js?v=1"></script>
	
    <!-- check for javascript -->
    <noscript>
        <meta http-equiv="refresh" content="0; url=http://www.google.com" />
    </noscript>

    <style>
        input#login {
        padding: 11px 24px;
        background-image: linear-gradient(to bottom right,#ee7183,#353eff);
        box-shadow: 0 6px 10px 0 rgba(27,28,30,.31);
        border-radius: 4px;
    }
    </style>
</head>

<body class="login-container">
<div class="page-container login-container">
<div class="page-content">
    <div class="content-wrapper">
        <div class="content">           
            <form method="POST" action="{{ route('system.auth') }}" id="" autocomplete="off">
                <div class="panel panel-body login-form">
                    @csrf
                    @include('admin.elements.flash')
                  
                    <div class="text-center">
                        <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                        <h5 class="content-group"><small class="display-block">أدخل المعلومات أسفله</small></h5>
                    </div>
                    <div class="form-group has-feedback has-feedback-left">
                        <input type="text"  autocomplete="false" tabindex="1"  class="form-control frequired" name="user_login" placeholder="إسم المستخدم أو البريد الإلكتروني" maxlength="35" required autofocus/>
                        <div class="form-control-feedback">
                            <i class="icon-user text-muted"></i>
                        </div>
                    </div>
                    <div class="form-group has-feedback has-feedback-left">
                        <input maxlength="35" autocomplete="false" tabindex="1"  type="password" class="form-control frequired" name="pass_login" placeholder="كلمة السر" required/>
                        <div class="form-control-feedback">
                            <i class="icon-lock2 text-muted"></i>
                        </div>
                    </div>
                    <div class="form-group">
                    <input type="submit" name="submit" id='login' class="btn btn-primary btn-block" value="تسجيل الدخول" >
                    </div>
                </div>
            </form>
    
        </div>
    </div>
</div>
</div>
</body>
</html>