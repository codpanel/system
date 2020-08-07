@extends('admin.layout')

@section('content')


      


@include('admin.elements.flash')


<div class="content" style='margin-top:45px;'>   


<div class="panel from_to hidden">
<div class="panel-body">
<form class="heading-form mg-b-25" id="form-stats-From-To" autocomplete="off" method="GET" action="">
<div class="section-wrapper mg-t-20">
       
          <div class="row">
            <div class="col-lg-5">
                <input value='' type="text" name="from" readonly='true' placeholder="التاريخ من" class="form-control" id="datepickerFrom">
            </div><!-- col -->
            <div class="col-lg-5 mg-t-40 mg-lg-t-0">
                <input type="text" name="to" value=''readonly='true' placeholder="التاريخ الى" class="form-control" id="datepickerTo">
            </div><!-- col -->
            <div class="col-lg-2 mg-t-40 mg-lg-t-0">
                <input type="submit" class='btn  btn-block btn-primary' value='بحث' />
            </div><!-- col -->
          </div><!-- row -->
        </div>
</form>
</div>        
</div>        










<!-- Content area -->
<div class="xsx">


<div class="row">
    
   <h1 class="col-md-12" id="la_date"> تاريخ اليوم  </h1>
 
      <div class="col-sm-6 col-md-3">
         <div class="panel panel-body bg-blue-400 has-bg-image ">
            <div class="media no-margin">
               <div class="media-body">
                  <h3 class="no-margin">   <span></span>      درهم </h3>
                  <span class="text-uppercase text-size-mini"> مجموع الأرباح لهذا الأيوم </span>
               </div>
               <div class="media-right media-middle"><i class="icon-cash3 icon-3x opacity-75"></i></div>
            </div>
         </div>
      </div>
   
      <div class="col-sm-6 col-md-3">
         <div class="panel panel-body bg-danger-400 has-bg-image">
            <div class="media no-margin">
               <div class="media-body">
                  <h3 class="no-margin"></h3>
                  <span class="text-uppercase text-size-mini">عدد الطلبات الجديدة</span>
               </div>
               <div class="media-right media-middle"><i class="icon-file-empty2 icon-3x opacity-75"></i></div>
            </div>
         </div>
      </div>
  
      <div class="col-sm-6 col-md-3">
         <div class="panel panel-body bg-success-400 has-bg-image">
            <div class="media no-margin">
               <div class="media-body text-left">
                  <h3 class="no-margin"></h3>
                  <span class="text-uppercase text-size-mini">عدد الطلبات في  انتظار التوزيع</span>
               </div>
               <div class="media-right media-middle"><i class="icon-users2 icon-3x opacity-75"></i></div>
            </div>
         </div>
      </div>
   
      <div class="col-sm-6 col-md-3">
         <div class="panel panel-body bg-indigo-400 has-bg-image">
            <div class="media no-margin">
               <div class="media-body text-left">
                  <h3 class="no-margin"></h3>
                  <span class="text-uppercase text-size-mini"> الطلبات  قيد المعالجة  </span>
               </div>
               <div class="media-right media-middle"><i class="icon-phone-wave icon-3x opacity-75"></i></div>
            </div>
         </div>
      </div>
 
</div>
</div>


<div class="row">
  
  <div class="col-md-4">
    <div class="panel">
      <div class="pane-body">
        <div class="sidebar-category">
                  <div class="category-title statswidgetitle">
                    <span>احصائيات المدن</span>
                    <ul class="icons-list">
                      <li><a href="#" data-action="collapse" class=""></a></li>
                    </ul>
                  </div>

                  <div class="category-content" style="display: block;">
                    <ul class="progress-list">

                      {% for item in cities %}
                      <li>
                                <label>(  )   <span></span></label>
                        <div class="progress progress-xxs">
                          <div class="progress-bar progress-bar-" style="width: ">
                            <span class="sr-only"></span>
                          </div>
                        </div>
                            </li>
                         
                            {% endfor %}


                            
                        </ul>
                  </div>
                </div>
      </div>
    </div>
  </div>

 
    <div class="col-md-4">
    <div class="panel">
      <div class="pane-body">
        <div class="sidebar-category">
                  <div class="category-title statswidgetitle">
                    <span>احصائيات المنتوجات</span>
                    <ul class="icons-list">
                      <li><a href="#" data-action="collapse" class=""></a></li>
                    </ul>
                  </div>

                  <div class="category-content" style="display: block;">
                    <ul class="progress-list">

                      {% for item in products %}
                      <li>
                        <label> ( الكمية :    <span></span></label>
                        <div class="progress progress-xxs">
                          <div class="progress-bar progress-bar-" style="width: ">
                            <span class="sr-only"></span>
                          </div>
                        </div>
                            </li>
                         
                            {% endfor %}


                            
                        </ul>
                  </div>
                </div>
      </div>
    </div>
  </div>




   <div class="col-md-4">
    <div class="panel">
      <div class="pane-body">
        <div class="sidebar-category">
                  <div class="category-title statswidgetitle">
                    <span>حجم التعاملات لآخر أسبوع  </span>
                    <ul class="icons-list">
                      <li><a href="#" data-action="collapse" class=""></a></li>
                    </ul>
                  </div>

                  <div class="category-content" style="display: block;">
                  <ul class="list-feed">
                    {% for item in cash %}
                    <li class="border-warning-400">
                      <div class="text-muted text-size-small mb-5"> طلب </div>
                       درهم
                    </li>
                    {% endfor %}
                  </ul>
                  </div>
                </div>
      </div>
    </div>
  </div>
</div>





<div class="row">
  
   {% for item in stats.delivers %}
      <div class="col-md-4">
            <div class="panel mg-b-25 pd-20">
                
                 
                <div class="panel-body">
                                  <h6 class="slim-panel-title text-left"></h6>

                    <table class="table border-dashed no-border mg-t-25">
                            <tr>
                                <td>الطلبات التي تم تسليمها</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>الطلبات التي تم الغائها</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>الطلبات في انتظار التسليم</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td> الطلبات التي لا تجيب</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>حالة اعادة الإتصال</td>
                                <td></td>
                            </tr>
                        </table>
                </div>
            </div>
        </div> 
    {% endfor %}


   </div> 

<!-- Page header -->
<h1 class="text-left" style='font-size: 25px;margin-bottom: 15px;'>احصائيات الموظفات</h1>
<!-- /page header -->

<div class="row">
  
   {% for item in stats.employees %}
      <div class="col-md-4">
            <div class="panel mg-b-25 pd-20">

                 
                <div class="panel-body">
                                                 <h6 class="slim-panel-title  text-left" ></h6>

                    <table class="table border-dashed no-border mg-t-25">
                            
                            <tr>
                                <td>الطلبات التي تم الغائها</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>الطلبات قيد المعالجة</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td> الطلبات بالكامل</td>
                                <td></td>
                            </tr>
                        </table>
                </div>
            </div>
        </div> 
    {% endfor %}
</div>



</div>

</div>

@endsection