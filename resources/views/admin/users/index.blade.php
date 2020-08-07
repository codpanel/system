@extends('admin.layout')

@section('content')
   
        
      
         
<!-- Main content -->
<div class="content-wrapper">

<!-- Page header -->
<div class="page-header page-header-default ">
<div class="page-header-content">

<div class="page-title">
<h1>   <span class="text-semibold"><i class="icon-arrow-right6 position-left goback"></i>
    الأعضاء
({{$count}})
</span></h1>
</div>

<div class="heading-elements">
<a href="{{route('dashboard.users.create')}}" class="btn bg-blue btn-labeled heading-btn"><b><i class="icon-plus3"></i></b>اضافة عضو جديد</a>




</div>
</div>
        <div class="breadcrumb-line">
<ul class="breadcrumb">
    <li><a href="" title=""><i class="icon-home2 position-left"></i>الرئيسية</a></li>
    <li class="active" title="" >الأعضاء</li>
</ul>


</div>
</div>
<!-- /page header -->
















<!-- Content area -->
<div class="content">

@include('admin.elements.flash')







<div class="panel panel-flat">
    <table class="table table-bordered bawaba-tables " >
        <thead>
            <tr>
                <th  class="col-md-2"><b>اسم المستخدم	</b></th>
                <th><b>الإميل</b></th>
                <th><b>تاريخ التسجيل	</b></th>
                <th><b>الوظيفة </b></th>
                <th><b>رقم الهاتف </b></th>
                <th class="text-center"><b>تعديل</b></th>
            </tr>
        </thead>
        <tbody>  
        
        
         @foreach($users as $user)
         <tr>
             <td>{{$user->username}}</td>
             <td>{{$user->email}}</td>
             <td>{{$user->created_at}}</td>
             <td>{{ $user->printrole() }}</td>
             <td><a href="tel:{{$user->phone}}">{{$user->phone}}</a></td>
             <td>
                <a href="{{route('dashboard.users.edit',"$user->id")}}" class="btn">
                    <i class="icon-pencil7 position-left"></i>تعديل </a>
             </td>
         </tr>
         @endforeach
         
          
        </tbody>
    </table>
</div>



<center>
    {{$users->links()}}
</center>

    </div>
</div>
   

@endsection