<div class="sidebar sidebar-main">
    <div class="sidebar-content">
        <div class="sidebar-category sidebar-category-visible mt-15">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                
<li>
<a href=""><i class="icon-price-tag3"></i> <span>  الطلبات الجديدة </span></a>
<ul>
<li><a href="{{ route('dashboard.lists.create') }}">اضافة طلب جديد</a></li>
<li><a href="{{ route('dashboard.data') }}">     كل الطلبات الجديدة   <span class="label bg-blue-400"> </span>    </a></li>
<li><a href="{{ route('dashboard.data') }}">   الطلبات المحذوفة   <span class="label bg-blue-400"> </span>            </a></li>
<li><a href="{{ route('dashboard.data') }}">   الطلبات المكررة   <span class="label bg-blue-400">   </span>            </a></li>
</ul>
</li>
   
         

<li>
<a href=""><i class="icon-phone-wave"></i> <span>  الموظفات</span></a>
<ul>
<li><a href="{{ route('dashboard.lists') }}"> طلبات قيد المعالجة   <span class="label bg-blue-400">  </span>     </a></li>
<li><a href="{{ route('dashboard.lists') }}"> الطلبات الملغية   <span class="label bg-blue-400">  </span>                             </a></li>
<li><a href="{{ route('dashboard.lists') }}">  الطلبات لإعادة الإتصال  <span class="label bg-blue-400">   </span>                            </a></li>
<li><a href="{{ route('dashboard.lists') }}">  الطلبات لا تجيب <span class="label bg-blue-400">   </span>                             </a></li>
</ul>
</li>
                      
  

                     
<li>
<a href=""><i class="icon-truck"></i> <span>  الموزعين</span></a>
<ul>
<li><a href="{{ route('dashboard.Sentlists') }}">         طلبات في انتظار التوزيع    <span class="label bg-blue-400">    </span>        </a></li>
<li><a href="{{ route('dashboard.Sentlists') }}">               الطلبات التي تم توزيعها <span class="label bg-blue-400">       </span>          </a></li>
<li><a href="{{ route('dashboard.Sentlists') }}">                 الطلبات الملغية <span class="label bg-blue-400">     </span>         </a></li>
<li><a href="{{ route('dashboard.Sentlists') }}">                الطلبات لا تجيب         <span class="label bg-blue-400">     </span>                </a></li>
<li><a href="{{ route('dashboard.Sentlists') }}">                الطلبات لإعادة الإتصال        <span class="label bg-blue-400">      </span>              </a></li>
</ul>
</li>   


<li>
<a href=""><i class="icon-user-tie"></i> <span>  الأعضاء</span></a>
<ul>
<li><a href="{{ route('dashboard.users.create') }}">اضافة عضو جديد</a></li>
<li><a href="{{ route('dashboard.users') }}">قائمة الأعضاء</a></li>
</ul>
</li>       

         
 
<li>
<a href=""><i class="icon-rating3"></i> <span>  الأدوات</span></a>
<ul>
<li><a href="{{ route('dashboard.pages.cities') }}">قائمة المدن</a></li>
<li><a href="{{ route('dashboard.products') }}">قائمة المنتوجات</a></li>
<li><a href="{{ route('dashboard.lists.transform') }}">تحويل الطلبات</a></li>                                                    
</ul>
</li>       
    

<li><a href="{{ route('dashboard.charges') }}"><i class="icon-cash3"></i> <span>  التكاليف</span></a></li>       

 
      
    

       
 
<li><a href="{{ route('dashboard.pages.cash') }}"><i class="icon-cash3"></i> <span> 
الحساب اليومي
</span></a></li>   

 
<li><a href="{{ route('dashboard.pages.revenue') }}"><i class="icon-cash3"></i> <span> 
الأرباح
</span></a></li>   


<li><a href="{{ route('dashboard.lists.all') }}"><i class="icon-home4"></i> <span>جميع الطلبات</span></a></li>

      
       





<li><a href="{{ route('dashboard.confirmation') }}"> <i class="icon-checkmark2"></i> 
<span> 
 لجنة الموافقة  

</span>
<span class="label bg-blue-400"> </span> 
</a> </li>



      

<li><a href="{{ route('dashboard.suivi') }}"> <i class="icon-stats-growth2"></i> 
<span> 
 لجنة المتابعة

</span>
</a> </li>



      
  
<li><a href="{{ route('dashboard.pages.find') }}"><i class="icon-search4"></i> <span> 
البحث
</span></a></li>   
      

<li><a href="{{ route('dashboard.pages.duplique') }}"><i class="icon-popout"></i> <span> 
المكررة
</span></a></li>   





<li>
<a href=""><i class="icon-rating3"></i> <span>  الإحصائيات   </span></a>
<ul>
<li><a href="{{ route('dashboard.statistiques') }}">  الإحصائيات العامة  </a></li>
<li><a href="{{ route('dashboard.statistiques.delivers') }}">  قائمة الإحصائيات للموزعين    </a></li>
<li><a href="{{ route('dashboard.statistiques.employees') }}">    قائمة الإحصائيات للموظفات       </a></li>
</ul>
</li>       
    



<li style="display: none"><a href="{{ route('dashboard.lists.stock') }}"><i class="icon-cash3"></i> <span>     المخزون العام     </span></a></li>       
<li style="display: none"><a href="{{ route('dashboard.reception') }}">  Reception المخزون </a></li>







        
               
               
                </ul>
            </div>
        </div>
    </div>
</div>
