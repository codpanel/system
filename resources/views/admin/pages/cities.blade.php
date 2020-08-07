@extends('admin.layout')

@section('content')

   
<!-- Page header -->
<div class="page-header page-header-default ">
<div class="page-header-content">

<div class="page-title">
<h1> <span class="text-semibold"><i class="icon-arrow-right6 position-left goback"></i>
المدن والموزعين المكلفين بهم
</span></h1>
</div>

<div class="heading-elements">



</div>
</div>
</div>
<!-- /page header -->
 


<div class="manager-wrapper">
         <div class="col-md-12">
            @include('admin.elements.flash')

         </div>
<div class="col-md-7">

<div class="panel panel-table mg-t-20 mg-sm-t-30">
<div class="panel-header">
</div>
<div class="table-responsive">
    <table class="table table-bordered bawaba-tables " >
        <thead>
            <tr>
                <th><b> المدينة </b></th>
                <th><b>الرمز</b></th>
                <th><b> الموزع </b></th>
            </tr>
        </thead>
        <tbody>         
        @foreach ($cities as $citie)        
         <tr>
             <td>{{$citie->name}}</td>
             <td>{{$citie->reference}}</td>
             <td>{{$citie->deliver->username}}</td>
         </tr>
         @endforeach
        </tbody>
    </table>
</div>
</div>

</div>
<div class="col-md-5">
<div class="panel panel-table mg-t-20 mg-sm-t-30">
<div class="panel-header">
<h6 class="slim-panel-title text-center">اضافة مدينة جديدة</h6>
</div>
    <div class="panel-body">
      <form action="{{route('dashboard.cities.store')}}" id="addCityForm"  method="POST">
        @csrf
        <div class="form-group">
            <input type="text" class='form-control' name="city_name" value="" placeholder="اسم المدينة" required>
        </div>
        <div class="form-group">
            <input type="text" class='form-control' name="reference" value="" placeholder="رمز المدينة" required>
        </div>

        <div class="form-group">
           <select name="user_id" id="" class="form-control" placeholder='الموزع' >
               <option value="aucun">اختيار الموزع</option>
               @foreach ($ALLDELIVERS as $user)
                    <option value="{{$user->id}}">{{$user->username}}</option>
               @endforeach
           </select>
        </div>      
       
        <div class="form-group">
            <input type="submit" class='btn btn-success btn-block' value="اضافة مدينة جديدة" / >
        </div>
    </form>
  </div>
</div>
</div>

</div>


</div>




@endsection