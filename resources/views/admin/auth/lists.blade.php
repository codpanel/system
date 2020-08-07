@extends('admin.layout')

@section('content')
<!-- Page header -->
<div class="page-header page-header-default ">
<div class="page-header-content">
<div class="page-title">
<h1> <span class="text-semibold"><i class="icon-arrow-right6 position-left goback"></i>
الطلبات عند الموظفات
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


    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            
            حسب المدينة
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right city_dropdown">
            <li><a href="all"> الكل </a></li>
            {% for city in ALLCITIES %}
            <li><a href="">  </a></li>
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
            <li><a href="waiting">قيد المعالجة</a></li>
            <li><a href="canceled">الطلبات الملغية</a></li>
            <li><a href="recall">  الطلبات لإعادة الإتصال  </a></li>
            <li><a href="NoAnswer">  الطلبات لا تجيب </a></li>
            <li><a href="NoAnswer_1">  لا يجيب المرحلة الأولى </a></li>
            <li><a href="NoAnswer_2">  لا يجيب المرحلة الثانية </a></li>
            <li><a href="NoAnswer_3"> لا يجيب المرحلة الثالثة  </a></li>
            <li><a href="NoAnswer_4">  لا يجيب المرحلة الرابعة </a></li>  
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
    </ul>


 </div>


 
</div>
 


<!-- Content area -->
<div class="content">

    @include('admin.elements.flash')

<div class="panel responsive-panel">
   
    <table class="table table-bordered bawaba-tables" >
        <thead>
            <tr>
                <th><b><span class="num_num"></span><input type="checkbox" id="checkAll"></b></th>
                <th><b>رقم الطلب</b></th>
                <th><b>الإسم الكامل</b></th>
                <th><b>رقم الهاتف</b></th>
                <th><b>المنتوجات</b></th>
                <th><b>رؤية المعلومات</b></th>
                <th><b>الحالة</b></th>
                {% if type == 'NoAnswer' %}
                <th><b>آخر اتصال</b></th>
                {% endif %}
                {% if type == 'canceled' %}
                <th><b>سبب الإلغاء</b></th>
                {% endif %}
                {% if type == 'recall' %}
                <th><b>تاريخ اعادة الإتصال</b></th>
                {% endif %}
                <th><b>الموظفة</b></th>
                <th><b>الموزع</b></th>
                <th><b>History</b></th>
                <th><b>تعديل</b></th>
            </tr>
        </thead>
        <tbody>  
        {% for item in lists %}
         <tr class='row_'>
             <td><input class="check" type="checkbox" data-item=""></td>
             <td>#</td>
             <td></td>
             <td><a href=""></a></td>
             <td>
             <table class="list_products">
                    {% set total = 0 %}
                    {% for product in item.products %}
                    <tr>
                        <td>  </td>
                        <td> x  </td>
                    </tr>
                    {% set total = (total + product.price) %}
                    {% endfor %}
                    <tr> <td colspan="2">المجموع :  درهم</td></tr>
             </table>
             </td>
            <td>
                <a type="button" data-action='true' class="btn btn-primary btn-lg loadactions" data-listID=''>رؤية المعلومات</a>
            </td>
            <td><span class="label bg-orange-300 label-statue">  </span></td>
            {% if type == 'NoAnswer' %}
            <td></td>
            {% endif %}
            {% if type == 'canceled' %}
            <td>
              <a class="btn btn-oblong bg-purple btn-block mg-b-10" id="see_reason" data-reason='' href="javascript:;" >سبب الإلغاء</a>
            </td>
            {% endif %}
            {% if type == 'recall' %}
            <td>
             
            </td>
            {% endif %}
            <td> </td>            
            <td></td>
            <td class="text-center"> 
            <a href="javascript:;"  data-id='' class='btn btn-success show_history'>history</a> </td>
            <td><a class="btn btn-warning" href=''>تعديل</a></td>
         </tr>
        
         {% endfor %}   
        </tbody>
    </table>
</div>

    </div>
<center></center>




@endsection