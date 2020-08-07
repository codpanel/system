<style>
a.btn.btn-success.excelDownloadBtn {
    border-radius: 25px;
    float: left;
    top: -11px;
    z-index: 2000;
    background: red;
    border: 0;
    background-color: #4f93b2;
    background-image: linear-gradient(0deg,#4f93b2 20%,#66cfb5) !important;
}
</style>


<a href=""  class='btn btn-success excelDownloadBtn'> تحميل  Excel </a>

<table class="table table-striped bawaba-tables" >
    <thead>
        <tr>
            <th><b> التاريخ  </b></th>
            <th><b> االمنتوج  </b></th>
            <th><b>  عدد الزبائن          </b></th>
            <th><b> الكمية  </b></th>
            <th><b>  مجموع المبيعات      (DH)       </b></th>
            <th><b> سعر التوصيل     (DH)       </b></th>
            <th><b>  الصافي  (DH)       </b></th>
        
        </tr>
    </thead>
    <tbody>  
    
     {% for key,day in revenue %}
        <tr>
            <td colspan="6">{{key}}</td>
            <td colspan="2" class="text-left">

            

            </td>


        </tr>

        {% for product in day.products %}
        <tr>
            <td></td>
            <td>{{product.product}}</td>
            <td>{{product.clients}}</td>
            <td>{{product.quantity}}</td>
            <td>{{product.total}}</td>
            <td>{{product.laivraison}}</td>
            <td>{{product.rest }}</td>
            
            
        </tr>
        {% endfor %}
        <tr class="total-tr">
            <td colspan="2">المجموع</td>
            <td>{{day.clients}}</td>
            <td>{{day.quantity}}</td>
            <td>{{day.total}}</td>
            <td>{{day.laivraison}}</td>
            <td>{{day.rest}}</td> 
        </tr>

     {% endfor %}

    </tbody>
</table>