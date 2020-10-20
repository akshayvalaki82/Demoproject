<div class="form-group {{ $errors->has('banner_path') ? 'has-error' : ''}}">
    <label for="banner_path" class="control-label">{{ 'Banner Path' }}</label><span style="color: red;" >{{' *'}}</span>
    <br>
    <input class="" name="banner_path" type="file" id="banner_path" value="{{ isset($banner->banner_path) ? $banner->banner_path : old('banner_path') }}" >
    {!! $errors->first('banner_path', '<p class="help-block" style="color: red;">:message</p>') !!}
    @if( isset($banner->banner_path))
    <img src="{{ asset('admin/banner_img/'.$banner->banner_path)}}" alt="" width="100" height="100">
    @endif

</div>
<div class="form-group {{ $errors->has('created_by') ? 'has-error' : ''}}">
    <!-- <label for="created_by" class="control-label">{{ 'Created By' }}</label> -->
    <!-- <input class="form-control" name="created_by" type="number" id="created_by" value="{{ isset($banner->created_by) ? $banner->created_by : ''}}" > -->
    {!! $errors->first('created_by', '<p class="help-block" >:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('updated_by') ? 'has-error' : ''}}">
    <!-- <label for="updated_by" class="control-label">{{ 'Updated By' }}</label> -->
    <!-- <input class="form-control" name="updated_by" type="number" id="updated_by" value="{{ isset($banner->updated_by) ? $banner->updated_by : ''}}" > -->
    {!! $errors->first('updated_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label><span style="color: red;" >{{' *'}}</span>
    <div class="radio">
    <label><input name="status" id="yes" type="radio" value="1" {{ (isset($banner) && 1 == $banner->status) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="status" id="no" type="radio" value="0" @if (isset($banner)) {{ (0 == $banner->status) ? 'checked' : '' }} @endif> No </label>
</div>
    {!! $errors->first('status', '<p class="help-block" style="color: red;">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
