@extends('admin.layout')

@section('content')


<!-- Page header -->
<div class="page-header page-header-default ">
<div class="page-header-content">

<div class="page-title">
<h1> <span class="text-semibold"><i class="icon-arrow-right6 position-left goback"></i>
اضافة طلب جديد
</span></h1>
</div>

<div class="heading-elements">



</div>
</div>
</div>
<!-- /page header -->

      
<div class="slim-mainpanel">
<div class="container-fluid">

<div class="manager-header">
  <div class="slim-pageheader">
    <h6 class="slim-pagetitle"></h6>
  </div>
  <a id="contactNavicon"  href="" class="contact-navicon"><i class="icon ion-navicon-round"></i></a>
</div>



        <!-- Content area -->
        <div class="content">
            @include('admin.elements.flash')




   <form class="form-horizontal" method='post' action="" autocomplete="off" id='createListForm'>
        

                <input type="hidden" name='redirectURL' value="">


            <!-- Basic tabs -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-table mg-t-20 mg-sm-t-30">
<div class="panel-heading">
 <h4>معلومات الزبون</h4> <hr>
  </div>
                        <div class="panel-body">



                         
                                <input type="hidden" name="mowadafaID" value=''>

                                <fieldset class="content-group">
 <div class="row">
    
    <div class="col-md-7">
    
    
    

    
    <div class="row">
            <div class="col-md-6">
    <div class="form-group col-md-12">
        <input type="text" class="form-control"  name="name" placeholder="الإسم الكامل للزبون" required>
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group col-md-12">
        <input type="text" class="form-control frequired" name="adress" placeholder="العنوان" required>
    </div>
    </div>
    </div>
    
    <div class="row">
      <div class="col-md-6">
            <div class="form-group col-md-12">
                <input type="number" class="form-control frequired" name="tel" id="tel" maxlength="10" placeholder="رقم الهاتف" required>
            </div>
        </div>  
    
     <div class="col-md-6">
       <div class="form-group col-md-12">
          <select class="form-control frequired" name="cityID" placeholder="السلعة">
            {% for city in ALLCITIES %}
            <option value=""></option>
            {% endfor%}
          </select>
      </div>
    </div>
    
    
     <div class="col-md-6">
        {% if employee is empty %}
            <div class="form-group col-md-12">
          <select class="form-control frequired" id='choseEmployee' name="employee" placeholder="الموظفة">
            <option value='N-A'>اختيار الموظفة</option>
            {% for user in ALLEMPLOYEES %}
            <option value=""></option>
            {% endfor%}
           
          </select>
        </div>
        {% else %}
        <input type="hidden" value="" name="employee">
        {% endif %}
    </div>
        
    <div class="col-md-6">
        <div class="form-group col-md-12">
        <input type="number" class="form-control frequired" name="prix_de_laivraison" id="prix_de_laivraison" placeholder="ثمن الإرسال بالدرهم - أرقام فقط" required="">
        </div>
    </div>
    
    </div>
    
    
    

    
    
    <div class="row">
    
    
<div class="col-md-6">
      
    </div>
   
    
  

    </div>
    
    
    </div>
    
    
    
     <div class="col-md-5">
        <div class="form-group col-md-12">
            <textarea placeholder='ملاحظة' name="note" id="" cols="40" class="form-control"  rows="6"></textarea>
        </div>
    </div>
     
 </div>


                                </fieldset>
                                
                            
                        </div>



                    </div>
                </div>
            </div>
            
            
            
            <div class="row">
                <div class="col-md-12">
                    <div class="panel mg-t-45 mg-b-25 panel-flat">
<div class="panel-heading">
 <h4>المنتجات</h4>
 <hr>
  </div>

                        <div class="panel-body">




                                <fieldset class="content-group productsList">



                                 

                                    <div class="row productsTosale">
                                        <div class="col-md-4">

                                            <div class="form-group col-md-12">
                                                <div class="product-q">
                                                <select class="form-control frequired" name="ProductID[]" placeholder="السلعة">
                                                <option>اختيار المنتوج</option>
                                                
                                                {% for product in ALLPRODUCTS %}
                                                <option value=""></option>
                                                {% endfor%}
                                                </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group col-md-12">
 <input type="number" class="form-control frequired" name="prix[]" placeholder="سعر البيع" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group col-md-12">
                                               
                                         <input type="number" name="quantity[]" class="form-control frequired" name="produit" id="produit" placeholder="الكمية" required>

                                               
                                               
                                            </div>

                                        </div>
                                        <div class="col-md-1">
                                            <a id="addmoreproducts" href="javascript:;" class="btn btn-primary">+</a>
                                        </div>
                                    </div>










                                </fieldset>
                                


                          
                        </div>










                    </div>
                </div>
            </div>
            
            <!-- Basic tabs -->
            <div class="row">
                <div class="col-md-12">
                <button type="submit" class="btn btn-success btn-block">اضافة البيانات</button>
            
              </div>
            </div>
            
            
            
            </form>
            
        </div>

    </div>
    <!-- /basic tabs -->








            </div>


            </div>
@endsection