<div class="form-group {{ $errors->has('conf_key') ? 'has-error' : ''}}">
    <label for="conf_key" class="control-label">{{ 'Conf Key' }}</label><span style="color: red;" >{{' *'}}</span>
    <input class="form-control" name="conf_key" type="text" id="conf_key" value="{{ isset($configuration->conf_key) ? $configuration->conf_key : old('conf_key')}}" >
    {!! $errors->first('conf_key', '<p style="color:red;" class="help-block ">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('conf_value') ? 'has-error' : ''}}">
    <label for="conf_value" class="control-label">{{ 'Conf Value' }}</label><span style="color: red;" >{{' *'}}</span>
    <input class="form-control" name="conf_value" type="text" id="conf_value" value="{{ isset($configuration->conf_value) ? $configuration->conf_value : old('conf_value')}}" >
    {!! $errors->first('conf_value', '<p style="color:red;" class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('created_by') ? 'has-error' : ''}}">
    <!-- <label for="created_by" class="control-label">{{ 'Created By' }}</label> -->
    <input class="form-control" name="created_by" type="hidden" id="created_by" value="{{ isset($configuration->created_by) ? $configuration->created_by : ''}}" >
    {!! $errors->first('created_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('modify_by') ? 'has-error' : ''}}">
    <!-- <label for="modify_by" class="control-label">{{ 'Modify By' }}</label> -->
    <input class="form-control" name="modify_by" type="hidden" id="modify_by" value="{{ isset($configuration->modify_by) ? $configuration->modify_by : ''}}" >
    {!! $errors->first('modify_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <div class="radio">
    <label><input name="status" type="radio" value="1" {{ (isset($configuration) && 1 == $configuration->status) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="status" type="radio" value="0" @if (isset($configuration)) {{ (0 == $configuration->status) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
