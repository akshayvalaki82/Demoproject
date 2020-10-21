<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($category->name) ? $category->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('parent_id') ? 'has-error' : ''}}">
    <label for="parent_id" class="control-label">{{ 'Parent' }}</label> <br>
    <select class="js-example-basic-multiple form-control custom-select" name="parent_id" id="parent_id">
        <option value="select">select</option>
        @foreach($perentid as $pid)
        <option value="{{$pid->id}}">{{$pid->name}}</option>
        @endforeach
    </select>
    <!-- <input class="form-control" name="parent_id" type="number" id="parent_id" value="{{ isset($category->parent_id) ? $category->parent_id : ''}}" > -->
    {!! $errors->first('parent_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('created_by') ? 'has-error' : ''}}">
    <!-- <label for="created_by" class="control-label">{{ 'Created By' }}</label> -->
    <input class="form-control" name="created_by" type="hidden" id="created_by" value="{{ isset($category->created_by) ? $category->created_by : ''}}" >
    {!! $errors->first('created_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('updated_by') ? 'has-error' : ''}}">
    <!-- <label for="updated_by" class="control-label">{{ 'Updated By' }}</label> -->
    <input class="form-control" name="updated_by" type="hidden" id="updated_by" value="{{ isset($category->updated_by) ? $category->updated_by : ''}}" >
    {!! $errors->first('updated_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <div class="radio">
    <label><input name="status" type="radio" value="1" {{ (isset($category) && 1 == $category->status) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="status" type="radio" value="0" @if (isset($category)) {{ (0 == $category->status) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
