@extends('admin.layout')

@section('content')

<!-- Main content -->
<div class="content-wrapper">

				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-right6 position-left"></i>
							 <span class="text-semibold">Stock</span> </h4>
						</div>

					</div>

					<div class="breadcrumb-line">
						
						<ul class="breadcrumb-elements">
						{% for item in delivers %}
							<li><a href="?user="> </a></li>
				        {% endfor %}
						</ul>
					</div>
				</div>
				<!-- /page header -->




<!-- Content area -->
<div class="content">


{% include "admin/elements/flash.twig" %}


        <div class="panel panel-flat">

            <div class="panel-body text-center">
                    <table class="table table-striped datatable userstable" >
                        <thead>
                            <tr>
                                <th><b> Reference  </b></th>
                                <th><b> nom de produit </b></th>
                                <th><b> ville </b></th>
                                <th><b> Recue  </b></th>
                                <th><b> Livré </b></th>
                                <th><b> Stock virtuel </b></th>
                                <th><b> Stock physique </b></th>
                                <th><b> Stock theorique </b></th>
                                <th><b> Stock en cours </b></th>
                                <th><b> Stock de Retour </b></th>
                            </tr>
                        </thead>
                        <tbody>  
                        {% for item in stocks %}
                         <tr>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td style="width:115px; "> 
                             
                             {% if item.stockVirtuel is not empty %}
                              +  = 
                             <span class="label label-success"></span>
                             {% endif %}
                             
                             </td>
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
</div>
@endsection