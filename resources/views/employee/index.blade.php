@extends('admin.layout')

@section('content')

<!-- Content area -->
<div class="content">
    





<div class="navbar navbar-default navbar-xs navbar-component">
                <ul class="nav navbar-nav no-border visible-xs-block">
                  <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-filter"><i class="icon-menu7"></i></a></li>
                </ul>

                <div class="navbar-collapse collapse" id="navbar-filter">
                  <p class="navbar-text"> فلتر  </p>
                  <ul class="nav navbar-nav">
                           <li class="nav-item " >
            <a class="nav-link" href="{{ route('employee.pending') }}">
              <i class="icon-cup2"></i>
              <span>طلبات قيد المعالجة</span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('employee.canceled') }}">
             <i class="icon-construction"></i>
              <span>الطلبات الملغية</span>
            </a>
          </li> 
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('employee.recall') }}">
              <i class="icon-mobile"></i>
              <span>طلبات اعادة الإتصال</span>
            </a>
          </li>                  
        

       <li class="dropdown nav-item ">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <i class="icon-briefcase"></i> 
                طلبات لا تجيب
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right ">
                <li><a href="{{ route('employee.unanswered') }}">  الطلبات لا تجيب </a></li>
                <li><a href="">  لا يجيب المرحلة الأولى </a></li>
                <li><a href=""">  لا يجيب المرحلة الثانية </a></li>
                <li><a href=""> لا يجيب المرحلة الثالثة  </a></li>
                <li><a href="">  لا يجيب المرحلة الرابعة </a></li>  
                <li><a href=""> لا يجيب المرحلة الخامسة  </a></li>  
                <li><a href=""> لا يجيب المرحلة السادسة  </a></li>  
                <li><a href=""> لا يجيب المرحلة السابعة  </a></li>  
            </ul>
        </li>

          

          </ul>

                  <div class="navbar-right">
                   <ul  class="nav navbar-nav">


                    <li><a href="{{ route('employee.create') }}">   + طلب جديد  </a></li>


                    <li><select  class=' form-control' id="limitPerPage">
                       <option value="10">10</option>
                       <option value="20">20</option>
                       <option value="30">30</option>
                       <option value="40">40</option>
                       <option value="50">50</option>
                       <option value="100">100</option>
                       <option value="100">200</option>
                    </select>
                    </li>

            <li><a href="javascript:;" id='exportSelectedOnly'>   استخراج  selectione      </a></li>


                     <li><a href="javascript:;" id="show_search_box"><i class="icon-search4 position-left"></i>بحث </a></li>
                   </ul>
                  </div>
                </div>
              </div>



@include('admin.elements.flash')

<div class="panel panel-flat" id="search_box" style="display:none;">
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
                    <button type="submit" class="btn btn-primary btn-xlg">بحث</button>
                </div>
            </div>
        </form>
    </div>
</div>




<div class="panel panel-flat responsive-panel">
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
                <th><b>آخر اتصال</b></th>

                <th><b>سبب الإلغاء</b></th>

                <th><b>تاريخ اعادة الإتصال</b></th>

                <th><b>الموظفة</b></th>
                <th><b>الموزع</b></th>
                <th><b>History</b></th>
                <th><b>تعديل</b></th>
            </tr>
        </thead>
        <tbody>  

        @foreach ($items as $item)
    

         <tr class='row_'>
             <td><input class="check" type="checkbox" data-item=""></td>
             <td>#{{$item->id}}</td>
             <td>{{$item->name}}</td>
             <td><a href="{{$item->tel}}">{{$item->tel}}</a></td>
             <td>
             <table class="list_products">

                    <tr>
                        <td>  </td>
                        <td> x  </td>
                    </tr>

                    <tr> <td colspan="2">المجموع :  درهم</td></tr>
             </table>
             </td>
            <td>
                <a type="button" data-action='true' class="btn btn-primary btn-lg loadactions" data-listID=''>رؤية المعلومات</a>
            </td>
            <td><span class="label bg-orange-300 label-statue">  {{$item->type}} </span></td>

            <td>{{$item->id}}</td>

            <td>
              <a class="btn btn-oblong bg-purple btn-block mg-b-10" id="see_reason" data-reason='' href="javascript:;" >سبب الإلغاء</a>
            </td>

            <td>
              {{$item->id}}
            </td>

            <td> {{$item->employee->username}}</td>            
            <td>{{$item->id}}</td>
            <td class="text-center"> 
            <a href="javascript:;"  data-id='' class='btn btn-success show_history'>history</a> </td>
            <td><a class="btn btn-warning" href=''>تعديل</a></td>
         </tr>
          
         @endforeach
        </tbody>
    </table>
</div>




    </div>
</div>


</div>
   

<div class="pagination-wrapper text-center">
  {{$items->links()}}
</div>



@endsection