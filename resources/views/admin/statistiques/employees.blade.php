@extends('admin.layout')

@section('content')

<!-- Main content -->
<div class="content-wrapper">



<!-- Page header -->
<div class="page-header page-header-default ">
<div class="page-header-content">
<div class="page-title">
<h1> <span class="text-semibold"><i class="icon-arrow-right6 position-left goback"></i>
الإحصائيات    
</span></h1>
</div>
</div>


<div class="breadcrumb-line">
   <ul class="breadcrumb-elements">
  
  
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            
            حسب الموزع
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right employee_dropdown">
            <li><a href="all"> الكل </a></li>
            {% for employee in ALLDELIVERS  %}
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
    

   
  
    </ul>


 </div>


 
</div>
 










<!-- Page header -->
<div class="page-header page-header-default " style='display:none;'>
<div class="page-header-content">

<div class="page-title">
<h1> <span class="text-semibold"><i class="icon-arrow-right6 position-left goback"></i>
الإحصائيات    

</span></h1>
</div>

<div class="heading-elements stastsForm" style="display:none;">
    <form class="heading-form" id="form-stats-From-To" autocomplete="off" method="GET" action="">
        <div class="col-md-5">
        <div class="form-group">
            <label for="">التاريخ من</label>
            <input type="text" name="from" placeholder="التاريخ من" class="form-control" id="datepickerFrom">
        </div>
        </div>

        <div class="col-md-5">
            <div class="form-group">
                <label for="">التاريخ إلى</label>
                <input type="text" name="to" placeholder="التاريخ الى" class="form-control" id="datepickerTo">
            </div>
            </div>
        <div class="col-md-1">
        <div class="form-group">
            <button class="btn btn-success" type="submit">
                <i class="icon-search4"></i></button></div>
        </div>
    </form>
</div>

</div>




 
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">

{% include "admin/elements/flash.twig" %}


<div class="panel panel-flat responsive-panel">
<table class="table table-striped bawaba-tables" >
    <thead>
        <tr>
            <th><b> الموزع  </b></th>
            <th><b>  تم توزيعها </b></th>
            <th><b> اعادة الإتصال  </b></th>
            <th><b>  لا يجيب    </b></th>
            <th><b> ملغية  </b></th>
            <th><b> مجموع الطلبات   </b></th>
            </tr>
    </thead>
    <tbody>  
        {% for key,item in delivers %}
        <tr>
            <td></td>
            <td><span class="badge badge-primary"></span> <span class="badge badge-flat border-danger text-danger-600"></span> </td>
            <td><span class="badge badge-primary"></span><span class="badge badge-flat border-danger text-danger-600"> </span> </td>
            <td><span class="badge badge-primary"></span><span class="badge badge-flat border-danger text-danger-600"> </span> </td>
            <td><span class="badge badge-primary"></span> <span class="badge badge-flat border-danger text-danger-600"></span> </td>
            <td><span class="badge badge-primary"></span><span class="badge badge-flat border-danger text-danger-600"> </span> </td>
        </tr>
        {% endfor %}
      </tbody>
</table>
</div>




<div class="panel panel-flat responsive-panel">
<table class="table table-striped bawaba-tables" >
    <thead>
        <tr>
            <th><b> الموظفة  </b></th>
            <th><b>  تم توزيعها </b></th>
            <th><b> اعادة الإتصال  </b></th>
            <th><b>  لا يجيب    </b></th>
            <th><b> ملغية  </b></th>
            <th><b> مجموع الطلبات   </b></th>
            </tr>
    </thead>
    <tbody>  
    
        {% for key,item in employees %}
        <tr>
            <td></td>
            <td><span class="badge badge-primary"></span> <span class="badge badge-flat border-danger text-danger-600"></span> </td>
            <td><span class="badge badge-primary"></span><span class="badge badge-flat border-danger text-danger-600"> </span> </td>
            <td><span class="badge badge-primary"></span><span class="badge badge-flat border-danger text-danger-600"> </span> </td>
            <td><span class="badge badge-primary"></span> <span class="badge badge-flat border-danger text-danger-600"></span> </td>
            <td><span class="badge badge-primary"></span><span class="badge badge-flat border-danger text-danger-600"> </span> </td>
        </tr>
        {% endfor %}
      </tbody>
</table>
</div>



</div>
</div>
@endsection