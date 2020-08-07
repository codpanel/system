@extends('admin.layout')

@section('content')


<!-- رفع جوجل شيت -->
<div class="modal fade" id="uploadSheetModal" tabindex="-1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <a href="/uploads/example.xlsx">تحميل النموذج</a>
      </div>
      <div class="modal-body">
      <form class="form-horizontal"  enctype="multipart/form-data"method='post' action="" autocomplete="off">
                <fieldset class="content-group">
                         <div class="form-group">
                            <label class="control-label col-lg-2">الملف</label>
                            <div class="col-lg-10">
                             <input type="file" name="SheetFile" id='upload_sheet_input' accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                            </div>
                        </div> 

                </fieldset>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary btn-block" id="submit_file_upload">
                     رفع الملفات 
                        <i class="icon-arrow-left13 position-right"></i>
                    </button>
                </div>
       </form>
      </div>
  </div>
</div>
</div>



<!-- Page header -->
<div class="page-header page-header-default ">
<div class="page-header-content">

<div class="page-title">
<h1> <span class="text-semibold"><i class="icon-arrow-right6 position-left goback"></i>
              

  
    كل الطلبات الجديدة

</span></h1>
</div>

<div class="heading-elements colored_heading">

 
                    

  <a href="javascript:;" data-target="#uploadSheetModal" data-toggle="modal" class="btn bg-danger btn-labeled heading-btn pull-right">
                    <b><i class="icon-plus3"></i></b>رفع الملفات
                    </a> 
                    
                    
 
                    
                    
                    
 
 
 
                  


                          <a href="javascript:;" data-target="#SendOrdersToEmployees" data-toggle="modal" class="btn bg-primary btn-labeled heading-btn">
                    <b><i class="icon-plus3"></i></b>تعيين الطلبات الى الموظفات  <span class="num_num"></span> 
                    </a>
                    

                        <a href="javascript:;" style="margin-right:10px;"  data-target="#CitiesModal" data-toggle="modal" class="btn bg-primary btn-labeled heading-btn">
                    <b><i class="icon-plus3"></i></b>
                    
                    
                    تعيين الطلبات الى مدينة
                     <span class="num_num"></span> 
                    </a>
                
                   
                     <a href="javascript:;" style="margin-right:10px;"  data-target="#setOrdersToProduct" data-toggle="modal" class="btn bg-primary btn-labeled heading-btn bg-warning">
                    <b><i class="icon-plus3"></i></b>
                    
                    تعيين الطلبات الى منتوج
                     <span class="num_num"></span> 
                    </a>


                     <a href="javascript:;" style="margin-right:10px;"  data-target="#deleteOrdersModal" data-toggle="modal" class="btn bg-primary btn-labeled heading-btn fkfkj">
                    <b><i class="icon-plus3"></i></b>
                    
                    
                    حذف الطلبات
                     <span class="num_num"></span> 
                    </a>

                   
                    
 




</div>



</div>

<div class="breadcrumb-line">
<ul class="breadcrumb">
    
    
                
                
                

                 

                


    
       

       <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            
            عدد الطلبات في الصفحة
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right limitPerPage_dropdown">
                <li><a href="5">5</a></li>                              
                <li><a href="10">10</a></li>                              
                <li><a href="15">15</a></li>                              
                <li><a href="20">20</a></li>                              
                <li><a href="25">25</a></li>                              
                <li><a href="30">30</a></li>                              
                <li><a href="30">30</a></li>                              
                <li><a href="35">35</a></li>                              
                <li><a href="40">40</a></li>                              
                <li><a href="45">45</a></li>                              
                <li><a href="50">50</a></li>                              
                <li><a href="55">55</a></li>                              
                <li><a href="60">60</a></li>
                <li><a href="60">60</a></li>
                <li><a href="70">70</a></li>
                <li><a href="80">80</a></li>
                <li><a href="90">90</a></li>
                <li><a href="100">100</a></li>
                <li><a href="200">200</a></li>
        </ul>
    </li>
    
</ul>

   <ul class="breadcrumb-elements">
  
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            
            حسب المدينة
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right city_dropdown">
            <li><a href="">  </a></li>
        </ul>
    </li>
    
    
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            
            حسب المنتوج
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right product_dropdown">
                  <li><a href=""></a></li>                              
              
        </ul>
    </li>
    

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            
            ترتيب
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right order_dropdown">
            <li><a href="DESC"> تنازلي </a></li>
            <li><a href="ASC"> تصاعدي  </a></li>
        </ul>
    </li>
<li>
    
  <a href="javascript:;" id="show_search_box"><i class="icon-search4 position-left"></i>بحث </a>
</li>

 

    </ul>


 </div>

</div>
<!-- /page header -->

   
   
   
   
  
<!-- Content area -->
<div class="content">



@include('admin.elements.flash')
@include('admin.data.modals')




<div class="panel panel-flat" id="search_box" style="display:none;">
    <div class="panel-heading">
        <h5 class="panel-title">


          ادخل رقم الهاتف<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
    </div>

    <div class="panel-body">
        <form action="" method="GET" class="main-search">
            <div class="input-group content-group">
                <div class="has-feedback has-feedback-left">
                    <input type="text" class="form-control input-xlg" placeholder="رقم الهاتف" name="q">
                    <div class="form-control-feedback">
                        <i class="icon-search4 text-muted text-size-base"></i>
                    </div>
                </div>

                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary btn-xlg">بحث</button>
                </div>
            </div>
        </form>
    </div>
</div>




<input type="hidden" id="ids" name="list">
  

  

<div class="mg-t-25">
   <div class="table-responsive">
    <table class="table table-bordered bawaba-tables">
        <thead>
            <tr>
                <th><b><input type="checkbox" id="checkAll" /></b></th>
                <th><b>تاريخ </b></th>
                <th><b>الإسم ورقم الهاتف</b></th>
                <th><b>   العنوان</b></th>
                <th><b>المدينة الحقيقية</b></th>
                <th><b>  المنتوج</b></th>
                <th><b>المنتوج الحقيقي</b></th>
                <th><b>الكمية</b></th>
                <th><b> الثمن</b></th>
                <th><b>المصدر</b></th>
            </tr>
        </thead>
        <tbody>  
        
        
        <tr class='listingOrdersTR'>
             <td>
              <div class="box">
              <span class="checkmark"></span>
              <input class='check' type="checkbox" data-item=''>
              </div>
             </td>
             <td></td>
             <td>
             <br>

              <label class="copyNum label bg-violet-700" id="num" data-clipboard-target="#num"></label>
              <a href="" class=" btn btn-inline btn-success call_btn"><i class="icon-phone2"></i></a>
            
             </td>
             <td>
             <br>
             <label for="" ></label>
              </td>
             <td>
             <span class="label label-success"></span>
               <span class="label bg-purple">مدينة غير معروفة</span>
               <span class="label bg-warning-600">خارج التغطية</span>
               </td>
               <td> </td>
              <td>
              <span class="label bg-danger"></span>
              </td> 
             <td> </td>    
             <td> </td>    
             <td> </td>    
         </tr>
        </tbody>
    </table>
    </div>
</div>
<div class="" style="margin-top: 25px;">
    <center></center>
</div>




</div>
@endsection