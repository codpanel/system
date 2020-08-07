@extends('admin.layout')

@section('content')

<!-- Page header -->
<div class="page-header page-header-default ">
<div class="page-header-content">

<div class="page-title">
<h1> <span class="text-semibold"><i class="icon-arrow-right6 position-left goback"></i>
التكاليف
</span></h1>
</div>

<div class="heading-elements">



</div>
</div>


<div class="breadcrumb-line">
<ul class="breadcrumb">

    
</ul>

   <ul class="breadcrumb-elements">
  

    
     <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            
            عرض تكاليف  
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu الأسب-right charges_since">
                <li><a href="today">اليوم</a></li>
                <li><a href="week">هذا الأسبوع</a></li>
                <li><a href="month">شهر</a></li>
                <li><a href="year">السنة الماضية</a></li>                              
                <li><a href="all">الكل</a></li>                              
        </ul>
    </li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            
            حسب النوع
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right charges_type">
            <li><a href="fixed"> الثابثة </a></li>
            <li><a href="variable">  المتغيرة </a></li>
            <li><a href="all">  الكل </a></li> 
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            
           حسب الحالة
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right charges_paied">
          <li><a href="true"> المدفوعة </a></li>
          <li><a href="false">  الغير مدفوعة </a></li> 
          <li><a href="all">  الكل </a></li> 
        </ul>
    </li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            
            عرض
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right charges_limit">
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


 </div>
</div>
<!-- /page header -->
 
    
  <div class="content">
    






        					
					
					
					
					
					
					
					
@include('admin.elements.flash')

<div class="manager-wrapper">
<div class="col-md-7">

<div class="panel panel-table mg-t-20 mg-sm-t-30">
<div class="panel-header">
<h6 class="slim-panel-title text-center"> قائمة التكاليف

(    مجموع التكاليف 
    :
    {{$sumval}}
    درهم )
</h6>
</div>
<div class="panel responsive-panel">
    <table class="table" >
        <thead>
            <tr>
                <th><b> الإسم </b></th>
                
                <th><b> القيمة </b></th>
                
                <th><b> بتاريخ </b></th>
                <th><b>دفع</b></th>
            </tr>
        </thead>
        <tbody>  

        @foreach ($charges as $charge)
        
         <tr id='charges_'>
         <td>{{$charge->name}}</td>
             
             <td>{{$charge->value}}</td>
             <td>{{$charge->created_at}}</td>
             <td>
                    
                    @if(!$charge->paied_at)
             <a href="{{route('dashboard.charges.paied',"$charge->id")}}" data-id="" class="btn btn-success pay_charges">تم دفعها</a>
                    @else
                    {{$charge->paied_at}}
                    @endif
                </td>
         </tr>
         @endforeach
        </tbody>
    </table>
</div>  
</div>

<div class="text-center">
    
</div>


</div>
<div class="col-md-5" >
<div class="panel panel-table mg-t-20 mg-sm-t-30">
<div class="panel-header">
<h6 class="slim-panel-title text-center">اضافة مدفوعات جديدة</h6>
</div>
    <div class="panel-body">
     
     
     
      <form action="{{route('dashboard.charges.store')}}"  method="POST" >
        @csrf
        <input type="hidden" id='type' value="fixed">
        <div style="display: none" class="form-group">
            <select class="form-control" name="type" id="charges_type">
                <option value="">المرجوا اختيار النوع</option>
                <option value="fixed" selected="">تابث</option>
                <option value="variable">متغير</option>
            </select>
        </div>

        <div style="display: none" class="form-group" id="fixed_charges_list">
            <select class="form-control" name="name" >
              <option value="">المرجوا اختيار المدفوع</option>
              {% for item in fixed_list %}
                <option value=""></option>
              {% endfor %}
            </select>
        </div>

        <div class="form-group" id="new_charge_type">
            <input type="text" id="name" class='form-control'  name="name"  placeholder="اسم المدفوع"  required>
        </div> 

        
        <div class="form-group">
            <input type="number" id="value" class='form-control value'  name="value"  placeholder="القيمة" required>
        </div>      
       
        <div class="form-group">
            <input type="submit" class='btn btn-success btn-block' value="حفظ المدفوعات" / >
        </div>
    </form>
    
    
    
    
    
    
  </div>
</div>

<div class="panel panel-table mg-t-20 mg-sm-t-30" style="display: none">
<div class="panel-header">
<h6 class="text-center slim-panel-title">اضافة نوع جديد من المدفوعات الثابتة</h6>
</div>
    <div class="panel-body">
     
     
     
      <form action=""  method="POST" id="chargesFixedFormSave">
        <div class="form-group">
           <input type="text" id='name' name="name" class='form-control' placeholder="الإسم " required />
        </div>
        
        <div class="form-group">
            <input type="number" id="value" class='form-control'  name="value"  placeholder="القيمة" >
        </div>      
       
        <div class="form-group">
            <input type="submit" class='btn btn-success btn-block' value="حفظ النوع الجديد من المدفوعات" / >
        </div>
    </form>
    
    
    
    
    
    
  </div>
</div>


</div>

</div>
  </div>


</div>

@endsection