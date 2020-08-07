<div class="modal fade" id="addMoreGeneralStock" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body"> 
      
<form class="form-horizontal" method='post' action="" autocomplete="off">

                <fieldset class="content-group">

                        <div class="form-group">
                            <label class="control-label col-lg-2">المنتوج</label>
                            <div class="col-lg-10">
                               <div class="product-q">
                                   
                                    <select class="form-control" name="productID" placeholder="produit" >
                                    
                                    {% for product in ALLPRODUCTS %}
                                    <option value=""></option>
                                    {% endfor%}
                                    </select>
                                </div>
                                </div>
                        </div>

                         <div class="form-group">
                            <label class="control-label col-lg-2">الكمية</label>
                            <div class="col-lg-10">
                             <input type="number" class="form-control"  name="quantity" placeholder="quantity" />
                            </div>
                        </div> 


                        <div class="form-group">    
                            <label class="control-label col-lg-2">ملاحظة</label>
                            <div class="col-lg-10">
                            <textarea name="note"   class="form-control"id="" cols="30" rows="5"></textarea>
                            </div>
                        </div> 

                </fieldset>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary" id="Submit_Add_User">
                     اضافة المخزون
                        <i class="icon-arrow-left13 position-right"></i>
                    </button>
                </div>

    </form>
      
      </div>
  </div>
</div>
</div>


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



<div class="modal fade" id="editSortieStock" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body"> 
      
<form class="form-horizontal" method='post' action="" autocomplete="off">

               
               <input type="hidden" value="" name="ProductID" id='SortieProductID' >
               <input type="hidden" value="" name="SortieListID" id='SortieListID' >
                <fieldset class="content-group" id="leeetch">

                        <div class="form-group">
                            <div class="col-lg-11">
                               
                                </div>
                        </div>
        
                        <div id="loadedSortielist">
                            
                        </div>
                        
                </fieldset>
                <div class="text-right">
                    <button type="submit" class="btn btn-block btn-success" id="Submit_Add_User">
                     تعديل وموافقة المخزون 
                        <i class="icon-arrow-left13 position-right"></i>
                    </button>
                </div>

    </form>
      
      </div>
  </div>
</div>
</div>

 
 
<div class="modal fade" id="addSortieGeneralStock" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body"> 
      
<form class="form-horizontal" method='post' action="" autocomplete="off">

                <fieldset class="content-group" id="leeetch">

                        <div class="form-group">
                            <div class="col-lg-11">
                               <div class="product-q">
                                    <select class="form-control" name="productID" placeholder="produit" >
                                    
                                    {% for product in ALLPRODUCTS %}
                                    <option value=""></option>
                                    {% endfor%}
                                    </select>
                                </div>
                                </div>
                        </div>
        
                        
                        <div class="row city_quantity  firstRow">
                           <div class="col-lg-11">
                           <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                            <div class="col-lg-10">
                             <input type="text" class="form-control"  name="quantities[]" placeholder="quantity" />
                            </div>
                        </div>
                            </div>
                            <div class="col-md-6">
                                <select id="citiesList" class="form-control" name="cities[]" placeholder="produit" >
                                    
                                    {% for city in ALLCITIES %}
                                    <option value=""></option>
                                    {% endfor%}
                                    </select>
                            </div>
                            </div>
                            </div>
                            <div class="col-lg-1">
                                <a id="addRowSortie" href="#" class="btn btn-primary">+</a>
                            </div>
                        </div>
                </fieldset>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary" id="Submit_Add_User">
                     اضافة المخزون
                        <i class="icon-arrow-left13 position-right"></i>
                    </button>
                </div>

    </form>
      
      </div>
  </div>
</div>
</div>

