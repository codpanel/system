@extends('admin.layout')

@section('content')
    


<!-- Main content -->
<div class="content-wrapper">
<!-- Page header -->
<div class="page-header page-header-default ">
<div class="page-header-content">

<div class="page-title">
<h1> <span class="text-semibold"><i class="icon-arrow-right6 position-left goback"></i>
</span> تعديل الحساب
</h1>
</div>

<div class="heading-elements">



</div>
</div>
        <div class="breadcrumb-line">
<ul class="breadcrumb">
    <li><a href="" title="الرئيسية"><i class="icon-home2 position-left"></i>الرئيسية</a></li>
    <li class="active" ><a title="الأعضاء" href="">الأعضاء</a></li>
    <li class="active" title="">تعديل الحساب</li>
</ul>


</div>
</div>
<!-- /page header -->

<!-- Content area -->
<div class="content">


<!--
 Page header 
<div class="page-header page-header-transparent">
    <div class="page-header-content">
        <div class="page-title">
            <h1> <span class="text-semibold"></span></h1>
        </div>
     </div>
</div>
-->

@include('admin.elements.flash')


<!-- تعديل البيانات الشخصية للمستخدم -->
<div class="col-md-9">								
<form  enctype="multipart/form-data" id="user_form" method='post' action="{{route('dashboard.users.update',"$user->id")}}">

<input type="hidden"  name="role" value="{{$user->role}}" />
@csrf






<!-- صورة الحساب -->		


@if($user->role == 'delivre' )
<div class="panel panel-flat">

    <div class="panel-body">
        <div class="row">
            <div class="form-group">
        <label>تمن التوزيع</label>
        <input type="text" class="form-control" name='deliver_price' value='{{$user->deliver_price}}' name="phone" placeholder="تمن التوزيع">
    </div>
        </div>
    </div>
</div>
@endif
			

<!-- المعلومات الشخصية -->			
<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">تعديل المعلومات الشخصية        </h5>
    </div>
    
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <fieldset>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label></label>
                            <input type="text" class="form-control frequired" value="{{$user->username}}" name="username" placeholder="">
                            </div>
                        </div>
                                              
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label></label>
                                <input type="text" class="form-control frequired" value="{{$user->email}}" name="email" placeholder="البريد الإلكتروني">
                            </div>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>رقم الهاتف</label>
                                <input type="text" class="form-control " value="{{$user->phone}}" name="phone" placeholder="البريد الإلكتروني">
                            </div>
                        </div>                        
                    </div>
            
            
                </fieldset>
            </div>
        </div>
    </div>
</div>
<!--// المعلومات الشخصية -->						
					
					
<!-- كلمة المرور -->										
<div class="panel panel-flat">
    <div class="panel-heading">
        <h3 class="panel-title">تعديل كلمة المرور        </h3>
        <p>تذكر ، كلمة المرور يجب ان تكون قوية وغير متداولة ، من أجل حمايتك !        </p>
    </div>
    <div class="panel-body">
        <fieldset class="content-group">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="ادخل هنا كلمة المرور الجديدة" />
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>
<!--// كلمة المرور -->



<!-- تحديث البيانات -->
<div class="text-right">
<button type="submit" class="btn btn-block btn-primary"><i class="icon-arrow-left13 position-right"></i>حفظ التغييرات</button>
</div>
<!--// تحديث البيانات -->  
<br>
<div id="result"></div> 
                              
                                        

</form> 


              
</div>					
<!--// تعديل البيانات الشخصية للمستخدم -->




@endsection