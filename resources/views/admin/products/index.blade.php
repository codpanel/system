@extends('admin.layout')

@section('content')

    

<!-- Main content -->
<div class="content-wrapper ">



                <!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-right6 position-left"></i>المنتجات</h4>
							
						</div>
						<div class="heading-elements">
							<div class="heading-btn-group">
                            <a href="{{ route('dashboard.products.create') }}" class="btn bg-blue btn-labeled heading-btn"><b>
                              <i class="icon-plus3"></i></b> 
                                
                              اضافة منتج جديد
                            
                            </a>
				             
							</div>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href=""><i class="icon-home2 position-left"></i>الرئيسية </a></li>
							<li class="active">المنتجات</li>
						</ul>

						
					</div>
				</div>
				<!-- /page header -->
			
				
				

<!-- Content area -->
<div class="content">
		

 

@include('admin.elements.flash')


<div class="panel panel-flat">
    <table class="table table-bordered bawaba-tables" >
        <thead>
            <tr>
                <th><b>Reference</b></th>
                <th><b>اسم المنتوج	</b></th>
                <th><b>سعر الجملة</b></th>
                <th class="text-center"><b>تعديل</b></th>
            </tr>
        </thead>
        <tbody>  
        @foreach ($products as $product)
         <tr>
         <td>{{$product->reference}}</td>
             <td>{{$product->name}}</td>
             <td>DH{{$product->prix_jmla}}</td>

             <td class="text-center">
            
                    <a href="{{route('dashboard.products.edit',"$product->id")}}" class="btn">
                        <i class="icon-pencil7 position-left"></i>
                        تعديل
                    </a>
                    

             </td>
             
         </tr>
         @endforeach  
        </tbody>
    </table>
</div>
				
							

<!-- Iconified modal -->
<div id="modal_iconified" class="modal fade">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h5 class="modal-title"><i class="icon-menu7"></i> &nbsp;</h5>
        </div>

        <div class="modal-body">
            <div class="alert alert-info alert-styled-left text-blue-800 content-group">
                
                <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
            
            <p>
            <br>
            </p>
        </div>

        <div class="modal-footer">
            <a href="" class="btn btn-link text-danger">
            </a>
            <button class="btn btn-primary" data-dismiss="modal">  </button>
        </div>
    </div>
</div>
</div>
							 

<center>
    {{$products->links()}}
</center>

   
    </div>
</div>
    

@endsection
            
