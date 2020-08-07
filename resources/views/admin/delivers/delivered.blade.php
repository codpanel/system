@extends('admin.layout')

@section('content')

<div class="page-header page-header-default ">
<div class="page-header-content">
<div class="page-title">
<h1> <span class="text-semibold"><i class="icon-arrow-right6 position-left goback"></i>



    طلبات تم توزيعها
</span></h1>
</div>
</div>


<div class="breadcrumb-line">
   <ul class="breadcrumb-elements">
       
                   <li><a href="javascript:;" id='exportSelectedOnly'>   استخراج  selectione      </a></li>



   <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            عرض
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right limitPerPage_dropdown">
            {% for i in 0..25 %}
                <li><a href=""></a></li>    
            {% endfor %}
            <li><a href="200">200</a></li>
        </ul>
    </li>




    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            
            حسب المدينة
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right city_dropdown">
            <li><a href="all"> الكل </a></li>
            {% for city in ALLCITIES %}
            <li><a href=""> </a></li>
            {% endfor %}
        </ul>
    </li>
    
    
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            
            حسب الموظفة
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right employee_dropdown">
            <li><a href="all"> الكل </a></li>
            {% for employee in ALLEMPLOYEES %}
            <li><a href="">  </a></li>
            {% endfor %}
        </ul>
    </li>
    

     <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            
            حسب الحالة
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right type_dropdown">
                      <li><a href="all"> الكل </a></li>

            <li><a href="driver_waiting">في انتظار التوزيع</a></li>
            <li><a href="driver_recall">إعادة الإتصال</a></li>
            <li><a href="driver_canceled">الملغية</a></li>
            <li><a href="driver_NoAnswer">لا تجيب</a></li>
            <li><a href="NoAnswer_1">  لا يجيب المرحلة الأولى </a></li>
            <li><a href="NoAnswer_2">  لا يجيب المرحلة الثانية </a></li>
            <li><a href="NoAnswer_3"> لا يجيب المرحلة الثالثة  </a></li>
            <li><a href="NoAnswer_4">  لا يجيب المرحلة الرابعة </a></li> 
            <li><a href="driver_delivred">تم توزيعها</a></li>
        </ul>
    </li>


    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            
حسب الموزع            
<span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right deliver_dropdown">
            <li><a href="all"> الكل </a></li>
            {% for employee in ALLDELIVERS %}
            <li><a href="">  </a></li>
            {% endfor %}
        </ul>
    </li>

<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            
            ترتيب
            <span class="caret"></span></a><ul class="dropdown-menu dropdown-menu-right order_dropdown"><li><a href="DESC"> تنازلي </a></li><li><a href="ASC"> تصاعدي  </a></li></ul></li>
    </ul>


 </div>


 
</div>
 


<!-- Content area -->
<div class="content">
        
@include('admin.elements.flash')



<div class="panel mg-t-45 responsive-panel">
   
    <table class="table  bawaba-tables" >
        <thead>
            <tr>
                <th><b><span class="num_num"></span><input type="checkbox" id="checkAll"></b></th>
                <th><b>رقم الطلب</b></th>
                <th><b>الإسم الكامل</b></th>
                <th><b>رقم الهاتف</b></th>
                <th><b>المنتوجات</b></th>
                <th><b>رؤية المعلومات</b></th>
                <th><b>الموظفة</b></th>
                <th><b>تاريخ التوزيع</b></th>
                <th><b>الموزع</b></th>
                <th><b>History</b></th>
                <th><b>تعديل</b></th>
            </tr>
        </thead>
        <tbody>  
        {% for item in lists %}
             <tr class='row_}'>
                 <td><input class="check" type="checkbox" data-item=""></td>
                 <td>#</td>
                 <td></td>
                 <td><a href=""></a></td>
                 <td>
                  <table class="list_products">
                        {% set total = 0 %}
                        {% for product in item.products %}
                        <tr>
                            <td> </td>
                            <td> x  </td>
                        </tr>
                        {% set total = (total + product.price) %}
                        {% endfor %}
                        <tr> <td colspan="2">المجموع :  درهم</td></tr>
                  </table>
                 </td>
                <td><a type="button" data-action='true' class="btn btn-primary btn-lg loadDeliveractions" data-listID=''>رؤية المعلومات</a></td>
                <td> </td>            
                <td> </td>            
                <td></td>
                <td class="text-center"> 
                  <a href="javascript:;"  data-id='' class='btn btn-success show_history'>history</a>
                </td>



            <td><a class="btn btn-warning" href=''>تعديل</a></td>
          
         </tr>
        
         {% endfor %}   
        </tbody>
    </table>
</div>

    </div>
 
<center></center>





@endsection