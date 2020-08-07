@extends('admin.layout')

@section('content')

<!-- Page header -->
<div class="page-header page-header-default ">
<div class="page-header-content">

<div class="page-title">
<h1> <span class="text-semibold"><i class="icon-arrow-right6 position-left goback"></i>
              
البحث

</span></h1>
</div>

<div class="heading-elements colored_heading">

 


</div>



</div>

<div class="breadcrumb-line">
<ul class="breadcrumb">
</ul>

   <ul class="breadcrumb-elements">
 

<li>
    
  <a href="javascript:;" id="show_search_box"><i class="icon-search4 position-left"></i>بحث </a>
</li>

 

    </ul>


 </div>

</div>
<!-- /page header -->

   
   
   
<style>
.label-primary.decoration {
    font-size: 13px;
    padding: 5px 10px;
    border-radius: 35px;
}

.myNumberRow {
    background: #2196f3;
    color: white;
}

</style>
  
<!-- Content area -->
<div class="content">



@include('admin.elements.flash')




<div class="panel panel-flat" id="search_box">
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
                    <button type="submit" class="btn btn-primary btn-xlg searchBtnSubmit">بحث</button>
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
                <th><b>العنوان</b></th>
                <th><b>الحالة</b></th>
                <th><b>المنتوج</b></th>
                <th><b>الموظفة</b></th>
                <th><b>الموزع</b></th>
                <th><b>history</b></th>
            </tr>
        </thead>
        <tbody>  
        
        
        {% for key,items in lists %}
        
          
        
        <tr class='myNumberRow'> <td colspan='9'>  </td></tr> 
        
        {% for item in items %}
        
        {% if item.select == 'new' %}
        <tr class='listingOrdersTR' id='row-'>
             <td>
              <div class="box">
              <span class="checkmark"></span>
              <input class='check' type="checkbox" data-item=''>
              </div>
             </td>
             <td></td>
             <td>
             <br>
             <a href="" class="tel">
             <label for="" class="label bg-violet-700"></label>
             </a>
             </td>
             <td>
             <br>
             <label for="" class="label label-primary"></label>
             </td>
             <td><label for="" class="label label-primary decoration"></label> </td>
             <td> X  =  </td>    
             <td colspan='3'> </td> 
                         

         </tr>
         {% else %} 
            <tr class='listingOrdersTR' id='row-'>
             <td>
              <div class="box">
              <span class="checkmark"></span>
              <input class='check' type="checkbox" data-item=''>
              </div>
             </td>
             <td></td>
             <td>
             <br>
             <a href="" class="tel">
             <label for="" class="label bg-violet-700"></label>
             </a>
             </td>
             <td>
                    <span class="label label-success city-data"></span>
             <br>
             </td>
             <td><label for="" class="label label-primary decoration"></label> </td>
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
                    <tr> <td colspan="2">المجموع : درهم</td></tr>
             </table>
             </td>    
                         <td> </td>            

             <td> </td> 
             <td class="text-center"> <a href="javascript:;"  data-id='' class='btn btn-success show_history'>history</a> </td>
             </tr>
         {% endif %}
         {% endfor %} 
        {% endfor %}
          
        </tbody>
    </table>
    </div>
</div>
<div class="" style="margin-top: 25px;">
    <center></center>
</div>




</div>
@endsection