<!DOCTYPE html>
<html>
<head>
    
    <!-- Page title -->
    <title> لوحة التحكم</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="لوحة التحكم">

         
    <link rel="icon" type="image/x-icon" href="/assets/admin/images/favicon.png" /> 
    <!-- css style -->
    <link rel="stylesheet" type="text/css" href="/assets/admin/css/rtl.css" />

<style>
.breadcrumb li.active a {
    background: linear-gradient(to right, #33001b, #ff0084);
    color: white;
    border-radius: 62px !important;
    display: inline-block;
}
.breadcrumb li.active a {
    color: white;
    padding: 5px 10px;
}
.editbtnsearch {
    border-radius: 35px;
    border: 0;
    background: #ED213A;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #93291E, #ED213A);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #93291E, #ED213A); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    padding: 7px 23px;
}
.searchBtnSubmit {
    background: #8A2387;
    background: -webkit-linear-gradient(to right, #F27121, #E94057, #8A2387);
    background: linear-gradient(to right, #F27121, #E94057, #8A2387);
    border-radius: 37px;
    width: 109px;
    border: 0;
    height: 42px;
}

    .spentFB{
        margin-bottom: 15px;
    }
    .main-gain {
        margin-right: 25px;
        background: #9C27B0;
        padding: 5px;
        color: white;
    }
    span.spent {
    margin-right: 25px;
    background: #4CAF50;
    padding: 5px;
    color: white;
}
#exportSelectedOnly {
    margin-left: 41px;
    border-radius: 35px;
    color: white;
    background: -webkit-linear-gradient(to right, #240b36, #c31432);
    background: linear-gradient(to right, #240b36, #c31432);
    margin-right: 15px;
}

.navigation li a:hover {
    background: linear-gradient(to right, #0575E6, #00F260);
}



    </style>


 </head>

 
<body dir="rtl">
    


@include('admin.elements.modals')
@include('admin.elements.navbar')

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">
       
        @if(Auth::user()->role == 'admin')
         <!-- sidbar -->
        @include('admin.elements.sidebar')

        @endif

        @yield('content')
        
		</div>
	  </div>

    <!-- JS script -->
    <script type="text/javascript" src="/assets/admin/js/all.js"></script> 
    <script type="text/javascript" src="/assets/admin/js/clipboard.min.js"></script>
    <script type="text/javascript" src="/assets/admin/js/bawaba.js"></script>
    
        
    <form method='post' action="" id='selectFormToExport'>
      <input type="hidden" name='selectedToExport' class='selectFormToExport'>
    </form>



    <input type="hidden" id="selectedRows" />

    <script>

    $('body .save_ads').click(function(){
        var day = $(this).attr('data-day');
        $('#SpentModal #daySpent').val(day);
        $('#SpentModal').modal('show');
    });

    $('body #SpentModal #savespent').click(function(){
        var day = $('#SpentModal #daySpent').val();
        var ads = $('#SpentModal #spentFB').val();
        $('#SpentModal').modal('hide');
        var url = '/revenue/spent/'+day+'/'+ads;
        window.location.href = url;
    });
     

    $('body #SpentModalEdit #savespent').click(function(){
        var day = $('#SpentModalEdit #daySpent').val();
        var ads = $('#SpentModalEdit #spentFB').val();
        $('#SpentModal').modal('hide');
        var url = '/revenue/spent/'+day+'/'+ads;
        window.location.href = url;
    });

    
    $('body #exportSelectedOnly').click(function(){
        var selected = $('#selectedRows').val();
        $('body .selectFormToExport').val(selected);
        $('#selectFormToExport').submit();
    });


    

    
    
$(document).on('change', '.entreetable .activate_me', function() {
 
        var id = $(this).data('entree');
        var valid = $('[data-valid="'+id+'"]').val();
        if( valid == ''){
            alert('المرجوا ادخال الرقم ');
            $(this).prop('checked',false);
        }else{
                $.ajax( {
                  type: "POST",
                  url: '',
                  data: {id : id , valid : valid },
                  success: function( response ) {
                      
                    $('#item-'+id).remove();
                    alert('تم التفعيل بنجاح');
                  },
                    error: function( response ) {
                      
                    alert('حصل خطا ما');
                  }
                });
        }
    return false;
}); 
    




    $('body .spent').click(function(){
       var day = $(this).attr('data-day');
       var ads = $(this).attr('data-spent');
       // show the modal and data in modal
       $('#SpentModalEdit').modal('show');
       $('#SpentModalEdit #spentFB').val(ads);
       $('#SpentModalEdit #daySpent').val(day);
    });
     


    </script>

</body>
</html>

                  
