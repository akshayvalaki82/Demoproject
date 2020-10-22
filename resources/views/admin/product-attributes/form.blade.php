<script>
    var i=1;
    $(function(){
        $('.ck').click(function(){
            $('.divetext').append("<input type='text' name='attribute_value[]' class='cl"+ i +"' value=''/>");
            i= i+1;
        })
    })
</script>


<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($productattribute->name) ? $productattribute->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'attribute value' }}</label> <br> 
    <div class="divetext"></div> <input type="button" class="ck" value="click me"/>
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
