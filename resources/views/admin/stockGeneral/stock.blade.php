@extends('admin.layout')

@section('content')

@include('admin.elements.stockModals')






<!-- Main content -->
<div class="content-wrapper">




@include('admin.stockGeneral.header')








<!-- Content area -->
<div class="content">

@include('admin.elements.flash')


<div class="modal fade" id="DetailsModal" tabindex="-1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body"> 
      

      </div>
  </div>
</div>
</div>
            <div class="panel-body text-center">

                <div class="table-responsive tablodyali">
                
                <div class="panel panel-flat">
                    <table class="table table-striped datatable userstable" >
                        <thead>
                            <tr>
                            
                                <th><b> المنتوج [REF] </b></th>
                                <th><b> الدخول </b></th>
                                <th><b> الخروج </b></th>
                            </tr>
                        </thead>
                        <tbody>  
                        {% for item in stockList %}
                         <tr>
                            
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
       


</div>

</div>
@endsection