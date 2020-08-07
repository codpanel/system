@extends('admin.layout')

@section('content')



<style>
    a#showNotPaid {background: white;color: #2196f3;}

a#showPaid {
    background: white;
    color: #2196f3;
}

.activeTab {
    background: #2196f3!important;
    color: white !important;
}
</style>


<!-- Main content -->
<div class="content-wrapper">

<!-- Page header -->
<div class="page-header page-header-default ">
<div class="page-header-content">

<div class="page-title">
<h1> <span class="text-semibold"><i class="icon-arrow-right6 position-left goback"></i>الحساب اليومي</span></h1>
</div>


<div class="heading-elements stastsForm">
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



<div class="breadcrumb-line">
   <ul class="breadcrumb-elements">
  
  
    
    
   
    

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            
حسب الموزع            
<span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right deliver_dropdown">
            {% for employee in ALLDELIVERS %}
            <li><a href="">  </a></li>
            {% endfor %}
        </ul>
</li>


</ul>


 </div>


 
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">


@include('admin.elements.flash')

<div class="btn-group  block" style="width:100%;">
    <a class="btn btn-primary activeTab"  id="showNotPaid" href="javascript:;">انتظار الاستلام</a>
    <a class="btn btn-primary" id="showPaid"  href="javascript:;">تم الدفع</a>
</div>

<div class="panel panel-flat responsive-panel">
    <table class="table table-striped bawaba-tables paied_table" style='display:none;' >
        <thead>
            <tr>
                <th><b> اليوم </b></th>
                <th><b> عدد الطلبات  </b></th>
                <th><b> مجموع المبيعات</b></th>
                <th><b>رؤية التفاصيل</b></th>
            </tr>
        </thead>
        <tbody>  
        
        {% for key,item in cash %} 
             {% if item.paied != 0 %}
             {% if item.list is not empty %}
                <tr>
                    <td colspan="5"></td>
                </tr>
                {% for day in item.list %}
                {% if day.paied != 0 %} 
                <tr>
                     <td><b></b></td>
                     <td><b></b></td>
                     <td><b> درهم </b> </td>
                     <td>
                           <a href="javascript:;" data-deliver=''  data-toggle="modal" data-target="#cashModal" data-date='' class='seemoremony btn btn-primary'>
                                 <i class="icon-eye"></i> رؤية التفاصيل</a>
                     </td>
                </tr>
                {% endif %}
                {% endfor %} 
            {% endif %}
            {% endif %}
        {% endfor %}
        </tbody>
    </table>


    <table class="table table-striped bawaba-tables unpaied_table" >
        <thead>
            <tr>
                <th><b> اليوم </b></th>
                <th><b> عدد الطلبات  </b></th>
                <th><b> مجموع المبيعات</b></th>
                <th><b>رؤية التفاصيل</b></th>
                <th><b>   استلام الدفع    </b></th>
            </tr>
        </thead>
        <tbody>  
        {% for key,item in cash %} 
 
                {% if item.notPaied != 0 %}
                 {% if item.list is not empty %}
                    <tr>
                        <td colspan="5"></td>
                    </tr>
                    {% for day in item.list %}
                    {% if day.paied == 0 %} 
                    <tr>
                         <td><b></b></td>
                         <td><b></b></td>
                         <td><b> درهم </b> </td>
                         <td>
                           <a href="javascript:;" data-deliver=''  data-toggle="modal" data-target="#cashModal" data-date='' class='seemoremony btn btn-primary'>
                                 <i class="icon-eye"></i> رؤية التفاصيل</a>
                     </td>
                         <td>
                             <a href="" class="btn btn-success">  تم استلام المبلغ  </a>
                         </td>
                    </tr>
                    {% endif %}
                    {% endfor %} 
                {% endif %}
                {% endif %}

        {% endfor %}
        </tbody>
    </table>

</div>
</div>
</div>
@endsection