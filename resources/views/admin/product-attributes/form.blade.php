
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($productattribute->name) ? $productattribute->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<label for="name" class="control-label">{{ 'attribute value' }}</label> <br> 
<div class="row">
        <div class="col-lg-12">

                @if(!empty($product__attribute__values))
                @php
                 $i=0;
                @endphp 
                    @foreach($product__attribute__values as $product__attribute__values)
                        <div id="inputFormRow">          
                        <div class="input-group mb-3">
                        <input class="form-control m-input" type="text" id="{{$product__attribute__values->id}}" value="{{$product__attribute__values->attribute_value}}" name="attribute_value[]">
                        <!-- <input type="hidden" id="{{$product__attribute__values->id}}" value="{{$product__attribute__values->id}}" name="attribute_valueoldid[]"> -->
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
                    <input type="text" name="attribute_value[]" class="form-control m-input" placeholder="Enter title" autocomplete="off">
                    </div>
                    </div>
                    @endif
                  
                </div>
            </div>

            <div id="newRow"></div>
            <button id="addRow" type="button" class="btn btn-info">Add Row</button>
        </div>
</div>




    

<div class="form-group {{ $errors->has('created_by') ? 'has-error' : ''}}">
    <!-- <label for="created_by" class="control-label">{{ 'Created By' }}</label> -->
    <input class="form-control" name="created_by" type="hidden" id="created_by" value="{{ isset($productattribute->created_by) ? $productattribute->created_by : ''}}" >
    {!! $errors->first('created_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('updated_by') ? 'has-error' : ''}}">
    <!-- <label for="updated_by" class="control-label">{{ 'Updated By' }}</label> -->
    <input class="form-control" name="updated_by" type="hidden" id="updated_by" value="{{ isset($productattribute->updated_by) ? $productattribute->updated_by : ''}}" >
    {!! $errors->first('updated_by', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
<script type="text/javascript">
    // add row
    $("#addRow").click(function () {
        var html = '';
        html += '<div id="inputFormRow">';
        html += '<div class="input-group mb-3">';
        html += '<input type="text" name="attribute_value[]" class="form-control m-input" placeholder="Enter title" autocomplete="off">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
        html += '</div>';
        html += '</div>';

        $('#newRow').append(html);
    });

    // remove row
    $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });
</script>
