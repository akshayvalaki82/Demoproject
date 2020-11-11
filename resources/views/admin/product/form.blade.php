<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($product->name) ? $product->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<label for="name" class="control-label">{{ 'Product Image' }}</label>
<span id="errorforimage" style="color: red; visibility: hidden;"><b> **Required</b></span>
<div class="row">
        <div class="col-lg-12">
            @if(!empty($product_images_name))
            @php
                 $i=0;
                @endphp 
                    @foreach($product_images_name as $product_images_name)
                        <div id="inputFormRow">          
                    <img src="{{ asset('admin/product_image/'.$product_images_name->image_name)}}" alt=""width="100" height="100">
                        <div class="input-group mb-3">
                        <input class="form-control m-input" type="file"  value="" name="product_image_name[]">
                        <input type="hidden" id="{{$product_images_name->id}}" value="{{$product_images_name->id}}" name="product_imageoldid[{{$i}}]">
                        @if($i>0)
                        <div class="input-group-append">                
                        <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                        </div>
                        @endif
                        @php
                        $i++;
                        @endphp
                        </div>
                    </div>
                    @endforeach  
                    @else 
                    <div id="inputFormRow">
                        <div class="input-group mb-3">
                            <input type="file" id="product_image_name" name="product_image_name[]" class=" m-input"  autocomplete="off">
                           
                            <p id="output"></p> 
                        </div>
                    </div>
            @endif
                <!-- </div>    
            </div> -->
            <div id="newRow"></div>
            <button id="addRow" type="button" class="btn btn-info">Add Image</button>
        </div>
</div>

<div class=""><table style="width:100%">
    <tr><th> <label for="" class="control-label"> Product Attribute</label> </th>
    <th><label for="" class="control-label">Product Attribute Value</label></th> 
    <th> </th></tr>
    @php
    $q = 1;
    @endphp
    @if(!empty($Product_Attributes_Assoc))
        @foreach($Product_Attributes_Assoc as $Product_Attributes_Assoc)
            <tr class="remove_value_{{$Product_Attributes_Assoc->id}} removeatbfiled " ><td style="width:33.33%"> <select class="js-example-basic-multiple form-control custom-select product_attribute" name="ProductAttribute[]" id="ProductAttribute">
            <option value="">select</option>
            @foreach($ProductAttribute as $pa)
            <option value="{{$pa->id}}" {{isset($Product_Attributes_Assoc->product_attribute_id) && $pa->id == $Product_Attributes_Assoc->product_attribute_id ? 'selected':'' }} >{{$pa->name}}</option>
            @endforeach
            </select></td>
            <td style="width:33.33%"><select class="js-example-basic-multiple form-control custom-select productattributevalue" name="productattributevalue[]" id="productattributevalue">
            <option value="" >select</option>
            @if(isset($Product_Attributes_Assoc->product_attribute_id) && array_key_exists($Product_Attributes_Assoc->product_attribute_id,$product_atb_value))
                @foreach($product_atb_value[$Product_Attributes_Assoc->product_attribute_id] as $pavid)
                    <option value="{{$pavid['id']}}" {{isset($Product_Attributes_Assoc->product_attribute_value_id) && $pavid['id'] == $Product_Attributes_Assoc->product_attribute_value_id ? 'selected': '' }} > {{$pavid['attribute_value']}}</option>
                @endforeach
            @endif
            </select> </td>
            @if($q!=1)
            <td style="width:20.33%"><button type="button" id="remove_attribute" name="remove_attribute" class="btn btn-info">-</button></td>
            @endif
            @php
            $q++;
            @endphp
        @endforeach    
    
    @else
    <tr><td style="width:33.33%"> <select class="js-example-basic-multiple form-control custom-select product_attribute" name="ProductAttribute[]" id="ProductAttribute">
    <option value="">select</option>
    @foreach($ProductAttribute as $pa)
    <option value="{{$pa->id}}">{{$pa->name}}</option>
    @endforeach
    </select></td>
    
    <td style="width:33.33%"><select class="js-example-basic-multiple form-control custom-select productattributevalue" name="productattributevalue[]" id="productattributevalue">
    <option value="">select</option>      
    </select> </td>
    <td></td>
    <!-- <label for="productattributevalue" class="error" style="display: none;float: left;"></label> -->
    @endif
    </tr>      
</table>
</div>
<table>
<div id="rowproductatb"></div>
</table>
<button type="button" id="addproductatb" name="addproductatb" class="btn btn-info">+</button>

<div class="form-group {{ $errors->has('categorys') ? 'has-error' : ''}}">
    <label for="categorys" class="control-label">{{ 'categorys' }}</label> <br>
    <select class="js-example-basic-multiple form-control custom-select" name="categorys" id="categorys">
        <option value="">select</option>
        @foreach($Category as $cat)
        <option value="{{$cat->id}}" {{ isset($categoryid) && $cat->id == $categoryid ? 'selected':'' }} > {{$cat->name}} </option>
        @endforeach
    </select>
    {!! $errors->first('categorys', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('sku') ? 'has-error' : ''}}">
    <label for="sku" class="control-label">{{ 'Sku' }}</label>
    <input class="form-control" name="sku" type="text" id="sku" value="{{ isset($product->sku) ? $product->sku : ''}}" >
    {!! $errors->first('sku', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('short_description') ? 'has-error' : ''}}">
    <label for="short_description" class="control-label">{{ 'Short Description' }}</label>
    <input class="form-control" name="short_description" type="text" id="short_description" value="{{ isset($product->short_description) ? $product->short_description : ''}}" >
    {!! $errors->first('short_description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('long_description') ? 'has-error' : ''}}">
    <label for="long_description" class="control-label">{{ 'Long Description' }}</label>
    <textarea class="form-control" rows="5" name="long_description" type="textarea" id="long_description" >{{ isset($product->long_description) ? $product->long_description : ''}}</textarea>
    {!! $errors->first('long_description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">{{ 'Price' }}</label>
    <input class="form-control" name="price" type="number" id="price" value="{{ isset($product->price) ? $product->price : ''}}" >
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('special_price') ? 'has-error' : ''}}">
    <label for="special_price" class="control-label">{{ 'Special Price' }}</label>
    <input class="form-control" name="special_price" type="number" id="special_price" value="{{ isset($product->special_price) ? $product->special_price : ''}}" >
    {!! $errors->first('special_price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('special_price_from') ? 'has-error' : ''}}">
    <label for="special_price_from" class="control-label">{{ 'Special Price From' }}</label>
    <input class="form-control" name="special_price_from" type="date" id="special_price_from" value="{{ isset($product->special_price_from) ? $product->special_price_from : ''}}" >
    {!! $errors->first('special_price_from', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('special_price_to') ? 'has-error' : ''}}">
    <label for="special_price_to" class="control-label">{{ 'Special Price To' }}</label>
    <input class="form-control" name="special_price_to" type="date" id="special_price_to" value="{{ isset($product->special_price_to) ? $product->special_price_to : ''}}" >
    {!! $errors->first('special_price_to', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('quanity') ? 'has-error' : ''}}">
    <label for="quanity" class="control-label">{{ 'Quanity' }}</label>
    <input class="form-control" name="quanity" type="number" id="quanity" value="{{ isset($product->quanity) ? $product->quanity : ''}}" >
    {!! $errors->first('quanity', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('meta_title') ? 'has-error' : ''}}">
    <label for="meta_title" class="control-label">{{ 'Meta Title' }}</label>
    <input class="form-control" name="meta_title" type="text" id="meta_title" value="{{ isset($product->meta_title) ? $product->meta_title : ''}}" >
    {!! $errors->first('meta_title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('meta_description') ? 'has-error' : ''}}">
    <label for="meta_description" class="control-label">{{ 'Meta Description' }}</label>
    <textarea class="form-control ckeditor_field" rows="5" name="meta_description" type="textarea" id="meta_description" >{{ isset($product->meta_description) ? $product->meta_description : ''}}</textarea>
    {!! $errors->first('meta_description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('meta_keywords') ? 'has-error' : ''}}">
    <label for="meta_keywords" class="control-label">{{ 'Meta Keywords' }}</label>
    <textarea class="form-control ckeditor_field" rows="5" name="meta_keywords" type="textarea" id="meta_keywords" >{{ isset($product->meta_keywords) ? $product->meta_keywords : ''}}</textarea>
    {!! $errors->first('meta_keywords', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('created_by') ? 'has-error' : ''}}">
    <!-- <label for="created_by" class="control-label">{{ 'Created By' }}</label> -->
    <!-- <input class="form-control" name="created_by" type="number" id="created_by" value="{{ isset($product->created_by) ? $product->created_by : ''}}" > -->
    {!! $errors->first('created_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('updated_by') ? 'has-error' : ''}}">
    <!-- <label for="updated_by" class="control-label">{{ 'Updated By' }}</label> -->
    <!-- <input class="form-control" name="updated_by" type="number" id="updated_by" value="{{ isset($product->updated_by) ? $product->updated_by : ''}}" > -->
    {!! $errors->first('updated_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <div class="radio">
    <label><input name="status" type="radio" value="1" {{ (isset($product) && 1 == $product->status) ? 'checked' : '' }}> Yes <br></label>
</div>
<div class="radio">
    <label><input name="status" type="radio" value="0" @if (isset($product)) {{ (0 == $product->status) ? 'checked' : '' }}  @endif> No</label>
</div>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" id="createsubmit" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

<script type="text/javascript">    
var abc = [];
    <?php foreach($Product_Attributes_Assoc as $key => $val){ ?>
        abc.push('<?php echo $val; ?>');
    <?php } ?>
console.log(abc); 

    // add row for image
    $("#addRow").click(function () {
        var html = '';
        html += '<div id="inputFormRow ">';
        html += '<div class="input-group mb-3">';
        html += '<input type="file" name="product_image_name[]" class="form-control m-input" placeholder="Enter title" autocomplete="off">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
        html += '</div>';
        html += '</div>';
        $('#newRow').append(html);
    });
    // remove row for image
    $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });

    
    // for product attribute select button
    $(document).on('click', '#Row', function () {
        $(this).closest('#inputFormRow').remove();
    });
   // $("#remove_attribute").click(function () {
    $(document).on('click', '#remove_attribute', function () {
        $(this).closest('.removeatbfiled').remove();
    });

    // for attribte value
    $(document).on('change','.product_attribute',function(){  
    var productatbid = $(this).val();
  
     var current = $(this);
     console.log(current);
    $.ajax({
               type:'POST',
               url:'{{url("/admin/product/get-attribute-value") }}',
               dataType: 'json',
               data: {
                "_token": "{{ csrf_token() }}",
                "product_attribute_id": productatbid,
                },
               success:function(data) {
                // $("#data").html(data.msg);
                  console.log(data);
                //  console.log(data.attribute_value);
                var html = '';
                html +='<option value="">select</option>';
                $.each(data.attribute_value, function(val, text) {
                    html +='<option value="'+text.id+'" >'+text.attribute_value+'</option>'
                 console.log(text);
                });
                // for all product attribute value
                current.parent().next().find('.productattributevalue').html(html);
                // console.log(parent.next.find('productattributevalue'));
                // for single product attribute value
                // $('#productattributevalue').html(html)               
                }
            });
    })

    // for storeing the value of phpvarible to javascript variable
    var productjattribute = [];
    <?php foreach($ProductAttribute as $key => $val){ ?>
        productjattribute.push('<?php echo $val; ?>');
    <?php } ?>
    //  console.log(productjattribute);
    
    // on click boutton of add
        $("#addproductatb").click(function () {
        var html ='';
        html +='<table style="width:100%" >';
        html +='<tr colspan="2" class="removeatbfiled" >';
        html +='<td style="width:33.33%"><select name="ProductAttribute[]" class="js-example-basic-multiple form-control custom-select product_attribute"><option value="">select</option>';
        $.each(productjattribute, function(val, text) {
                    var x = JSON.parse(text);
                    html +='<option value="'+x.id+'">'+x.name+'</option>'
                //  console.log(x.name);
                });
        html +='</select></td>';
        html +='<td style="width:33.33%"><select name="productattributevalue[]" class="js-example-basic-multiple form-control custom-select productattributevalue" id="productattributevalue" ><option value="">select</option> </select></td>';
        html +='<td><button type="button" id="remove_attribute" name="remove_attribute" class="btn btn-info">-</button></td>';
        html +='</tr>';
        html +='</table>';
        $('#rowproductatb').append(html);
        
        
        });
    
// CKEDITOR.replace('ckeditor_field');

</script>

<script src="{{asset('admin/js/product_form_validation.js')}}"> </script>
<script src="{{asset('admin/js/ckeditor.js')}}"></script>
<script>
    
    // $(".ckeditor_field").ckeditor();
    // var desc = CKEDITOR.instances['.ckeditor_field'].getData();
        // CKEDITOR.replace( 'meta_description' );
</script>
