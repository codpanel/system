

<!-- edit Spent ADS Modal -->
<div class="modal fade" id="SpentModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close " data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">  الإعلانات   </h4>
      </div>
      <div class="modal-body text-center">
         <input type="text" class="form-control spentFB" id='spentFB'>
         <input type="hidden" id='daySpent' >
         <a href="javascript:;" id='savespent' class="btn btn-block btn-success">تسجيل الإعلانات</a>
      </div>
  </div>
</div>
</div>





<div class="modal fade" id="DeliverTimeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> تاريخ التسليم </h4>
      </div>
      <div class="modal-body">

       <div class="form" id="TimeAfterForm" >
             
            <div class="form-group">
                    <label for="">
                      رجاء تحديد الوقت الذي سيتم الإرسال فيه
                    </label>
            </div> 
            <div class="form-group timing recall_houres_container">
                بعد كم دقيقة
                <input type="number" id='recall_houres' placeholder="ادخل عدد الدقائق" />
            </div>
            <div class="form-group timing recall_days_container">
                بعد يوم
                <input type="text" readonly='true' id='recall_days'  class='datepicker'  placeholder="ادخل عدد الأيام"   />
            </div>
           </div>
         <div class="block" style="display: block; margin-top:35px;">
          <button href="javascript:;" class="btn btn-success btn-lg btn-block"  data-id='' id="confirm_my_order_please" >
  تأكيد
  الطلب
          </button>
        </div>

      </div>
      
      
     
      
  </div>
</div>
</div>




<!-- Spent ADS Modal -->
<div class="modal fade" id="SpentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close " data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">  الإعلانات   </h4>
      </div>
      <div class="modal-body text-center">
         <input type="text" class="form-control spentFB" id='spentFB'>
         <input type="hidden" id='daySpent' >
         <a href="javascript:;" id='savespent' class="btn btn-block btn-success">تسجيل الإعلانات</a>
      </div>
  </div>
</div>
</div>




<!-- Modal Send SMS -->
<div class="modal fade" id="sendSMS" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close " data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> ارسال  SMS  </h4>
      </div>
      <div class="modal-body text-center">
          <img src="https://i.imgur.com/B9DVq3B.png" alt="">
          <h2>المرجوا ارسال رسالة من فضلك ، وعدم نسيان ارسال الرسالة في الحين ، رجاءً</h2>
      </div>
  </div>
</div>
</div>


<!-- Modal Cash History -->
<div class="modal fade" id="HistoryModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">History</h4>
      </div>
      <div class="modal-body">
 
      </div>
    </div>
  </div>
</div>


<!-- Modal Canceled -->
<div class="modal fade" id="modal_see_reason" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close " data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> سبب الإلغاء</h4>
      </div>
      <div class="modal-body">
          <div class="reason_here"></div>
      </div>
  </div>
</div>
</div>


<!-- Modal Info not completed -->
<div class="modal fade" id="InfoNeeded" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close " data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">  تنبيه </h4>
      </div>
      <div class="modal-body">
          المرجوا اتمام المعلومات المهمة قبل قبول الطلب
          <br>
          يجب  ملأ الخانات التالية 
          <ul>
            <li>العنوان</li>
            <li>المدينة</li>
            <li>اسم الزبون</li>
          </ul>
          
          <a href="" class="btn btn-block btn-success editBtn">  تعديل الطلب وإدخال البيانات   </a>
       
      </div>
  </div>
</div>
</div>






<!-- Modal Info -->
<div class="modal fade" id="loadData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">معلومات العميل</h4>
      </div>
      <div class="modal-body">
          جاري تحميل المعلومات...
      </div>
  </div>
</div>
</div>

    
<!-- Modal Canceled -->
<div class="modal fade" id="adminEmployeeCancel" tabindex="-1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close " data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">ما هو سبب الإلغاء</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
              <textarea  class="form-control" id="the_cancel_reason" cols="30" rows="10"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-link" data-dismiss="modal">رجوع</a>
        <a type="button" id="send_reason" class="btn btn-primary">الغاء وارسال السبب</a>
    </div>
  </div>
</div>
</div>
    
<!-- Modal Recall -->
<div class="modal fade" id="AdminRecallModal" >
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">تاريخ اعادة الإتصال</h4>
      </div>
      <div class="modal-body">
      <div class="form" id="TimeAfterForm" >
             
            <div class="form-group">
                    <label>رجاء تحديد الوقت الذي سيتم الإتصال فيه</label>
            </div> 
            <div class="form-group timing recall_houres_container">
                بعد كم دقيقة
                <input type="number" id='recall_houres' placeholder="ادخل عدد الدقائق" />
            </div>
            <div class="form-group timing recall_days_container">
                بعد يوم
                <input type="text" readonly='true' id='recall_days'  class='datepicker'       placeholder="ادخل عدد الأيام" />
            </div>
           </div>
          <div class="block" style="display: block;">
              <a href="javascript:;"    class="btn btn-success btn-lg btn-block mg-t-15" id="make_sure_recall" >تأكيد</a>
          </div>
      </div>
  </div>
</div>
</div>



<!-- History Modal -->
<div class="modal fade" id="HistoryModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">History</h4>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div id="ExportExcelModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">  استخراج في اكسل  </h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" method='post' action="" autocomplete="off">
        <div class="col-md-12"> 
                <fieldset class="content-group">

                        <div class="form-group">
                            <label class="control-label">اختيار الموظفة</label>
                            <select name="employee" class='form-control'>
                            {% for item in  ALLEMPLOYEES %}
                            <option value=""></option>
                            {% endfor %}
                            </select>
                        </div>
                        
                        
                        <div class="form-group">
                            <label class="control-label">اختيار الحالة</label>
                            <select name="type" class='form-control'>
                                <option value="waiting">قيد المعالجة</option>
                                <option value="canceled">الطلبات الملغية</option>
                                <option value="recall">  الطلبات لإعادة الإتصال  </option>
                                <option value="NoAnswer">  الطلبات لا تجيب </option>
                                <option value="NoAnswer_1">  لا يجيب المرحلة الأولى </option>
                                <option value="NoAnswer_2">  لا يجيب المرحلة الثانية </option>
                                <option value="NoAnswer_3"> لا يجيب المرحلة الثالثة  </option>
                                <option value="NoAnswer_4">  لا يجيب المرحلة الرابعة </option>
                                <option value="confirmation">  لجنة الموافقة  </option>
                            </select>
                        </div>
                        
                         
                        <div class="form-group">
                            <label class="control-label">    اختيار المدينة  </label>  
                            <select name="city" class='form-control'>
                            {% for city in  ALLCITIES %}
                            <option value=""></option>
                            {% endfor %}
                            <option value="all">الكل</option>
                            </select>
                        </div>
                        
                        
                          
                </fieldset>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary btn-block">
                     استخراج الطلبات 
                        <i class="icon-arrow-left13 position-right"></i>
                    </button>
                </div>

    </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>

  </div>
</div>





<!-- Modal -->
<div id="ConfirmationExportExcelModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">  حسب الموزع  </h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" method='post' action="" autocomplete="off">
        <div class="col-md-12"> 
                <fieldset class="content-group">

                          <input type="hidden" name="type" value="confirmation" />
                        <div class="form-group">
                            <label class="control-label" >  اختيارا الموزع </label>
                            <select name="deliver" class='form-control'>
                            {% for item in  ALLDELIVERS %}
                            <option value=""></option>
                            {% endfor %}
                            </select>
                        </div>
                        
                       
                      
                          
                </fieldset>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary btn-block">
                     استخراج الطلبات 
                        <i class="icon-arrow-left13 position-right"></i>
                    </button>
                </div>

    </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>

  </div>
</div>
