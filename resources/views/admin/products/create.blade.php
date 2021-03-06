@extends('admin.layout')

@section('content')


<!-- Main content -->
<div class="content-wrapper">

    <!-- Content area -->
    <div class="content">

        @include('admin.elements.flash')
        <form class="form-horizontal" method='POST' action="{{route('dashboard.products.store')}}" enctype="multipart/form-data" >
            @csrf
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-flat">
                <div class="panel-body">
                        <fieldset class="content-group">
                            <legend class="text-bold">اضافة منتج جديد   </legend>
                            <div class="form-group">
                                <label class="control-label col-lg-2"> اسم المنتوج  </label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="name" required >
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-lg-2">Reference</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="reference" required>
                                </div>
                            </div>                            
                           
                            <div class="form-group">
                                <label class="control-label col-lg-2"> سعر الجملة </label>
                                <div class="col-lg-10">
                                    <input type="number" class="form-control" name="prix_jmla" required>
                                    <p> المرجوا ادخال الأرقام فقط هنا</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" value=" اضافة منتوج جديد  " class='btn btn-block btn-success'>
                            </div>

                        </fieldset>
                </div>
            </div>
            

   </div>
   
   

</form>
   
    </div>
</div>            
@endsection
