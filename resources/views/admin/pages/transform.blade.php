@extends('admin.layout')

@section('content')


      

<div class="content">


<div class="manager-header" style='margin-top:55px;'>
  <div class="alert alert-danger">
    <h6 class="slim-pagetitle">تحويل الطلبات من موظفة لأخرى</h6>
    <h5>المرجوا استعمال هذه الأداة بانتباه ، لا يمكن التراجع عن العملية</h5>
    <h5>يتم تحويل فقط الطلبات قيد المعالجة</h5>
  </div>
  <a id="contactNavicon"  href="" class="contact-navicon"><i class="icon ion-navicon-round"></i></a>
</div>


@include('admin.elements.flash')


<div class="panel panel-flat">
    <div class="panel-body text-left">
      <form action=""  method="POST" id="transform_form">
    
        <div class="form-group">
          <label for="">التحويل من </label>
           <select name="from"  class="form-control" >
               <option value="aucun">اختيار الموظفة</option>
                {% for user in ALLEMPLOYEES %}
                <option value=""></option>
                {% endfor%}
           </select>
        </div>      
       

        <div class="form-group">
          <label for="">التحويل إلى</label>
           <select name="to"  class="form-control" >
               <option value="aucun">اختيار الموظفة</option>
                {% for user in ALLEMPLOYEES %}
                <option value=""></option>
                {% endfor%}
           </select>
        </div>    



        <div class="form-group">
            <input type="submit" class='btn btn-success btn-block' value="تحويل الطلبات الى الموظفة الجديدة" / >
        </div>
    </form>
  </div>
</div>	

</div>
  

@endsection