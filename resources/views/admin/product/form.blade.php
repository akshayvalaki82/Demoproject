<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($product->name) ? $product->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
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
    <textarea class="form-control" rows="5" name="meta_description" type="textarea" id="meta_description" >{{ isset($product->meta_description) ? $product->meta_description : ''}}</textarea>
    {!! $errors->first('meta_description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('meta_keywords') ? 'has-error' : ''}}">
    <label for="meta_keywords" class="control-label">{{ 'Meta Keywords' }}</label>
    <textarea class="form-control" rows="5" name="meta_keywords" type="textarea" id="meta_keywords" >{{ isset($product->meta_keywords) ? $product->meta_keywords : ''}}</textarea>
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
    <label><input name="status" type="radio" value="1" {{ (isset($product) && 1 == $product->status) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="status" type="radio" value="0" @if (isset($product)) {{ (0 == $product->status) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
