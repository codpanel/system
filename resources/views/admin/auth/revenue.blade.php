@extends('admin.layout')

@section('content')

<!-- Main content -->
<div class="content-wrapper">

<!-- Page header -->
<div class="page-header page-header-default ">
<div class="page-header-content">

<div class="page-title">
<h1> <span class="text-semibold"><i class="icon-arrow-right6 position-left goback"></i>
الأرباح    
</span></h1>
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




 
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">

@include('admin.elements.flash')

<a href="" class="btn btn-success">Telcharger EXCEL</a>

<div class="panel panel-flat responsive-panel">
<table class="table table-striped bawaba-tables" >
    <thead>
        <tr>
            <th><b> التاريخ  </b></th>
            <th><b> االمنتوج  </b></th>
            <th><b>  عدد الزبائن          </b></th>
            <th><b> الكمية  </b></th>
            <th><b>  مجموع المبيعات      (DH)       </b></th>
            <th><b> سعر التوصيل     (DH)       </b></th>
            <th><b>  الصافي  (DH)       </b></th>
            <th><b> ثمن الجملة       (DH)     </b></th>
            <th><b>  الربح   (DH)       </b></th>
        </tr>
    </thead>
    <tbody>  
    
     {% for key,day in revenue %}
        <tr>
            <td colspan="7"></td>
            <td colspan="2" class="text-left">

                {% if day.ads is not empty %}
             <span class="spent" data-spent='' data-day=''>ADS : </span>
             <span class="main-gain"> الربح اليومي   :    </span>
             
             {% else %}
            
             <a class='btn btn-success save_ads' href="javascript:;"  data-day="">ادخال ads</a>
             {% endif %}

            </td>


        </tr>

        {% for product in day.products %}
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
            
        </tr>
        {% endfor %}
        <tr class="total-tr">
            <td colspan="2">المجموع</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td> 
            <td></td>
            <td></td> 
        </tr>

     {% endfor %}

    </tbody>
</table>

</div>
</div>
</div>
@endsection