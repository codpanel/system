@extends('admin.layout')

@section('content')



<!-- Content area -->
<div class="content">
		
@include('admin.elements.flash')



<div class="navbar navbar-default navbar-xs navbar-component">
                <ul class="nav navbar-nav no-border ">

            <li class="nav-item ">
        <a class="nav-link" href="{{ route('deliver.index')}}">
          <span>
            الطلبات الجديدة
          </span> 
        </a>
      </li> 
      <li class="nav-item  ">
        <a class="nav-link" href="{{ route('deliver.canceled')}}">
          <span>الملغية</span>
        </a>
      </li>                  
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('deliver.delivered')}}">
          <span>تم توزيعها</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('deliver.recall')}}">
          <span>اعادة الإتصال</span>
        </a>
      </li>  
      <li class="nav-item  ">
        <a class="nav-link" href="{{ route('deliver.unanswered')}}">
          <span>لا تجيب</span>
        </a>
      </li>              
    

          </ul>

          <div class="navbar-right">
           <ul  class="nav navbar-nav">
            <li><a href="">   الحساب اليومي    </a></li>
            <li><a href="">     استخراج كل طلبات الموزع  EXCEL     </a></li>
            <li><a href="javascript:;" id='exportSelectedOnly'>   استخراج  selectione      </a></li>
             <li><select  class=' form-control' id="limitPerPage">
               <option value="10">10</option>
               <option value="20">20</option>
               <option value="30">30</option>
               <option value="40">40</option>
               <option value="50">50</option>
               <option value="100">100</option>
               <option value="100">200</option>
             </select></li>
             <li></li>
           </ul>
          </div>
        </div>








<div class="panel panel-flat responsive-panel">
   
    <table class="table bawaba-tables" >
        <thead>
            <tr>
                <th><b><span class="num_num"></span><input type="checkbox" id="checkAll"></b></th>
                <th><b>رقم الطلب</b></th>
                <th><b>تاريخ</b></th>
                <th><b>الزبون</b></th>
                <th><b>العنوان</b></th>
                <th><b>المنتوجات</b></th>
                <th><b>الحالة</b></th>
                
                <th><b>تاريخ إعادة الإتصال</b></th>

                <th><b>  تاريخ التوزيع </b></th>

                <th><b>   تاريخ الإلغاء </b></th>



                <th><b>رؤية المعلومات</b></th>
            </tr>
        </thead>
        <tbody>  
         <tr class='row_'>
             <td><input class="check" type="checkbox" data-item=""></td>
             <td>#</td> 
             <td></td> 
             <td>
                  <br/>
                  <label class="label bg-danger label_phone"><a href=""></a></label>
             </td>
             <td>

              
              <br/>
              <label class="label bg-purple label_city"> 
              
              </label>
             </td>
             <td>
                <table class="list_products">
                        <tr>
                            <td>  </td>
                            <td> x  </td>
                        </tr>

                        <tr> <td colspan="2">المجموع : <b></b> درهم</td></tr>
                </table>
             </td>


             <td><span class="label bg-orange-300 label-statue">    </span></td>



               <td><b>        </b></td>



              <td><b>         </b></td>

  

              <td><b>         </b></td>


             <td>
              <a type="button" data-action='true' class="btn btn-primary btn-lg loaddata" data-listID=''>رؤية المعلومات</a>
              <a type="button" data-action='true' class="btn btn-primary btn-lg loadDeliveractions" data-listID=''>رؤية المعلومات</a>
              
            </td>
             
         </tr>
        </tbody>
    </table>
</div>


    </div>


<center></center>


@endsection