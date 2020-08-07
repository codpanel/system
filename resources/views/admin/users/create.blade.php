@extends('admin.layout')
@section('content')
<!-- Main content -->
<div class="content-wrapper">
   <!-- Page header -->
   <div class="page-header page-header-default ">
      <div class="page-header-content">
         <div class="page-title">
            <h1> <span class="text-semibold"><i class="icon-arrow-right6 position-left goback"></i>اضافة مستخدم جديد</span></h1>
         </div>
         <div class="heading-elements">
         </div>
      </div>
      <div class="breadcrumb-line">
         <ul class="breadcrumb">
            <li><a href="" title="الرئيسية"><i class="icon-home2 position-left"></i>الرئيسية</a></li>
            <li class="active" ><a title="الأعضاء" href="">الأعضاء</a></li>
            <li class="active" title="">اضافة مستخدم جديد</li>
         </ul>
      </div>
   </div>
   <!-- /page header -->
   <!-- Content area -->
   <div class="content">
      @include('admin.elements.flash')
      <!-- Basic tabs -->
      <div class="row">
         <div class="col-md-12">
            <div class="panel panel-flat">
               <div class="panel-body">
                  <div class="tabbable">
                     <ul class="nav nav-tabs">
                        <li class="active"><a href="#form-type2" data-toggle="tab">موظفة</a></li>
                        <li><a href="#form-type3" data-toggle="tab">مرسل الطلبات</a></li>
                        <li><a href="#form-type4" data-toggle="tab">مدير</a></li>
                        <li><a href="#form-type5" data-toggle="tab">مظيفة بيانات</a></li>
                        <li><a href="#form-type6" data-toggle="tab"> لجنة المتابعة   </a></li>
                     </ul>
                     <div class="tab-content">
                        <div class="tab-pane " id="form-type5">
                           <form class="form-horizontal" id="createuser" method="post" action="{{route('dashboard.users.store')}}" autocomplete="off">
                              <input type="hidden" name="role" value="data">
                              @csrf
                              
                              <fieldset class="content-group">
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">اسم المستخدم</label>
                                    <div class="col-lg-10">
                                       <div class="input-group"><input type="text" class="form-control" name="username" placeholder="اسم المستخدم" value="" required=""><span class="input-group-addon"><i class="icon-user"></i></span></div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">البريد الإلكتروني</label>
                                    <div class="col-lg-10">
                                       <div class="input-group"><input type="email" class="form-control frequired" value="" name="email" placeholder="البريد الإلكتروني" required=""><span class="input-group-addon"><i class="icon-envelope"></i></span></div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">كلمة المرور</label>
                                    <div class="col-lg-10">
                                       <div class="input-group"><input type="password" value="" class="form-control frequired" name="password" id="password" placeholder="كلمة المرور" required=""><span class="input-group-addon"><i class="icon-lock2"></i></span></div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">رقم الهاتف</label>
                                    <div class="col-lg-10">
                                       <div class="input-group">
                                          <input type="text" class="form-control frequired" name="phone" id="phone" placeholder="رقم الهاتف" required="">
                                          <span class="input-group-addon"><i class="icon-lock2"></i></span>
                                       </div>
                                    </div>
                                 </div>
                              </fieldset>
                              <div class="text-right"><button type="submit" class="btn btn-primary" id="Submit_Add_User">
                                 انشاء المستخدم
                                 <i class="icon-arrow-left13 position-right"></i></button>
                              </div>
                           </form>
                        </div>
                        <div class="tab-pane active" id="form-type2">
                           <form class="form-horizontal" id="createuser" method='post' action="{{route('dashboard.users.store')}}" autocomplete="off">
                              <input type="hidden" name="role" value="employee" />
                              @csrf
                              <fieldset class="content-group">
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">اسم الموظفة</label>
                                    <div class="col-lg-10">
                                       <div class="input-group">
                                          <input type="text" class="form-control" name="username" placeholder="اسم المستخدم" value="" required >
                                          <span class="input-group-addon"><i class="icon-user"></i></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">البريد الإلكتروني</label>
                                    <div class="col-lg-10">
                                       <div class="input-group">
                                          <input type="email" class="form-control frequired" value="" name="email" placeholder="البريد الإلكتروني" required>
                                          <span class="input-group-addon"><i class="icon-envelope"></i></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">كلمة المرور</label>
                                    <div class="col-lg-10">
                                       <div class="input-group">
                                          <input type="password" value="" class="form-control frequired" name="password" id="password" placeholder="كلمة المرور" required>
                                          <span class="input-group-addon"><i class="icon-lock2"></i></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">رقم الهاتف</label>
                                    <div class="col-lg-10">
                                       <div class="input-group">
                                          <input type="text" class="form-control frequired" name="phone" id="phone" placeholder="رقم الهاتف" required>
                                          <span class="input-group-addon"><i class="icon-lock2"></i></span>
                                       </div>
                                    </div>
                                 </div>
                              </fieldset>
                              <div class="text-right">
                                 <button type="submit" class="btn btn-primary" id="Submit_Add_User">
                                 انشاء المستخدم
                                 <i class="icon-arrow-left13 position-right"></i>
                                 </button>
                              </div>
                           </form>
                        </div>
                        <div class="tab-pane" id="form-type3">
                           <form class="form-horizontal" id="createuser" method='post' action="{{route('dashboard.users.store')}}" autocomplete="off">
                              <input type="hidden" name="role" value="deliver" />
                              @csrf
                              <fieldset class="content-group">
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">اسم المستخدم</label>
                                    <div class="col-lg-10">
                                       <div class="input-group">
                                          <input type="text" class="form-control" name="username" placeholder="اسم المستخدم" value="" required >
                                          <span class="input-group-addon"><i class="icon-user"></i></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">البريد الإلكتروني</label>
                                    <div class="col-lg-10">
                                       <div class="input-group">
                                          <input type="email" class="form-control frequired" value="" name="email" placeholder="البريد الإلكتروني" required>
                                          <span class="input-group-addon"><i class="icon-envelope"></i></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">كلمة المرور</label>
                                    <div class="col-lg-10">
                                       <div class="input-group">
                                          <input type="password" value="" class="form-control frequired" name="password" id="password" placeholder="كلمة المرور" required>
                                          <span class="input-group-addon"><i class="icon-lock2"></i></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">عمولة المرسلة </label>
                                    <div class="col-lg-10">
                                       <div class="input-group">
                                          <input type="number" value="" class="form-control frequired" name="deliver_price" id="deliver_price" 
                                             placeholder="يسمح بإدخال الأرقام فقط ، والسعر بالدرهم المغربي" required>
                                          <span class="input-group-addon"><i class="icon-lock2"></i></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">رقم الهاتف</label>
                                    <div class="col-lg-10">
                                       <div class="input-group">
                                          <input type="text" class="form-control frequired" name="phone" id="phone" placeholder="رقم الهاتف" required>
                                          <span class="input-group-addon"><i class="icon-lock2"></i></span>
                                       </div>
                                    </div>
                                 </div>
                              </fieldset>
                              <div class="text-right">
                                 <button type="submit" class="btn btn-primary" id="Submit_Add_User">
                                 انشاء المستخدم
                                 <i class="icon-arrow-left13 position-right"></i>
                                 </button>
                              </div>
                           </form>
                        </div>
                        <div class="tab-pane" id="form-type4">
                           <form class="form-horizontal" id="createuser" method='post' action="{{route('dashboard.users.store')}}" autocomplete="off">
                              <input type="hidden" name="role" value="admin" />
                              @csrf
                              <fieldset class="content-group">
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">اسم المستخدم</label>
                                    <div class="col-lg-10">
                                       <div class="input-group">
                                          <input type="text" class="form-control" name="username" placeholder="اسم المستخدم" value="" required >
                                          <span class="input-group-addon"><i class="icon-user"></i></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">البريد الإلكتروني</label>
                                    <div class="col-lg-10">
                                       <div class="input-group">
                                          <input type="email" class="form-control frequired" value="" name="email" placeholder="البريد الإلكتروني" required>
                                          <span class="input-group-addon"><i class="icon-envelope"></i></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">كلمة المرور</label>
                                    <div class="col-lg-10">
                                       <div class="input-group">
                                          <input type="password" value="" class="form-control frequired" name="password" id="password" placeholder="كلمة المرور" required>
                                          <span class="input-group-addon"><i class="icon-lock2"></i></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">رقم الهاتف</label>
                                    <div class="col-lg-10">
                                       <div class="input-group">
                                          <input type="text" class="form-control frequired" name="phone" id="phone" placeholder="رقم الهاتف" required>
                                          <span class="input-group-addon"><i class="icon-lock2"></i></span>
                                       </div>
                                    </div>
                                 </div>
                              </fieldset>
                              <div class="text-right">
                                 <button type="submit" class="btn btn-primary" id="Submit_Add_User">
                                 انشاء المستخدم
                                 <i class="icon-arrow-left13 position-right"></i>
                                 </button>
                              </div>
                           </form>
                        </div>
                        <div class="tab-pane" id="form-type5">
                           <form class="form-horizontal" id="createuser" method='post' action="{{route('dashboard.users.store')}}" autocomplete="off">
                              <input type="hidden" name="role" value="stock" />
                              @csrf
                              <fieldset class="content-group">
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">اسم المستخدم</label>
                                    <div class="col-lg-10">
                                       <div class="input-group">
                                          <input type="text" class="form-control" name="username" placeholder="اسم المستخدم" value="" required >
                                          <span class="input-group-addon"><i class="icon-user"></i></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">البريد الإلكتروني</label>
                                    <div class="col-lg-10">
                                       <div class="input-group">
                                          <input type="email" class="form-control frequired" value="" name="email" placeholder="البريد الإلكتروني" required>
                                          <span class="input-group-addon"><i class="icon-envelope"></i></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">كلمة المرور</label>
                                    <div class="col-lg-10">
                                       <div class="input-group">
                                          <input type="password" value="" class="form-control frequired" name="password" id="password" placeholder="كلمة المرور" required>
                                          <span class="input-group-addon"><i class="icon-lock2"></i></span>
                                       </div>
                                    </div>
                                 </div>
                              </fieldset>
                              <div class="text-right">
                                 <button type="submit" class="btn btn-primary" id="Submit_Add_User">
                                 انشاء المستخدم
                                 <i class="icon-arrow-left13 position-right"></i>
                                 </button>
                              </div>
                           </form>
                        </div>
                        <div class="tab-pane" id="form-type6">
                           <form class="form-horizontal" id="createuser" method="post" action="{{route('dashboard.users.store')}}" autocomplete="off">
                              <input type="hidden" name="role" value="suivi">
                              @csrf
                              <fieldset class="content-group">
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">اسم الموظفة</label>
                                    <div class="col-lg-10">
                                       <div class="input-group">
                                          <input type="text" class="form-control" name="username" placeholder="اسم المستخدم" value="" required="">
                                          <span class="input-group-addon"><i class="icon-user"></i></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">البريد الإلكتروني</label>
                                    <div class="col-lg-10">
                                       <div class="input-group">
                                          <input type="email" class="form-control frequired" value="" name="email" placeholder="البريد الإلكتروني" required="">
                                          <span class="input-group-addon"><i class="icon-envelope"></i></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">كلمة المرور</label>
                                    <div class="col-lg-10">
                                       <div class="input-group">
                                          <input type="password" value="" class="form-control frequired" name="password" id="password" placeholder="كلمة المرور" required="">
                                          <span class="input-group-addon"><i class="icon-lock2"></i></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label col-lg-2">رقم الهاتف</label>
                                    <div class="col-lg-10">
                                       <div class="input-group">
                                          <input type="text" class="form-control frequired" name="phone" id="phone" placeholder="رقم الهاتف" required="">
                                          <span class="input-group-addon"><i class="icon-lock2"></i></span>
                                       </div>
                                    </div>
                                 </div>
                              </fieldset>
                              <div class="text-right">
                                 <button type="submit" class="btn btn-primary" id="Submit_Add_User">
                                 انشاء المستخدم
                                 <i class="icon-arrow-left13 position-right"></i>
                                 </button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- /basic tabs -->
   </div>
</div>
@endsection