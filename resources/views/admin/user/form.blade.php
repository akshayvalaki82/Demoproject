@foreach ($errors as $error)
      <li>{{ $error }}</li>
@endforeach

<script>
  $(document).ready(function() {
      $('.js-example-basic-multiple').select2();
  });
</script> 

<div class="form-group {{ $errors->has('firstname') ? 'has-error' : ''}}">
    <label for="firstname" class="control-label">{{ 'Firstname' }}</label>   
    <input class="form-control" name="firstname" type="text" id="firstname" value="{{ isset($userss->firstname) ? $userss->firstname : old('firstname') }} " >
    {!! $errors->first('firstname', '<p style="color:red;" class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('lastname') ? 'has-error' : ''}}">
    <label for="lastname" class="control-label">{{ 'Lastname' }}</label>
    <input class="form-control" name="lastname" type="text" id="lastname" value="{{ isset($userss->lastname) ? $userss->lastname : old('lastname' )}}" >
    {!! $errors->first('lastname', '<p style="color:red;" class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="email" id="email" value="{{ isset($userss->email) ? $userss->email : old('email')}}" >
    {!! $errors->first('email', '<p style="color:red;" class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="control-label">{{ 'Password' }}</label>
    <input class="form-control" name="password" type="password" id="password" >
    {!! $errors->first('password', '<p style="color:red;" class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('Confirm_password') ? 'has-error' : ''}}">
    <label for="Confirm_password" class="control-label">{{ 'Confirm Password' }}</label>
    <input class="form-control" name="Confirm_password" type="password" id="Confirm_password" >
    {!! $errors->first('Confirm_password', '<p style="color:red;" class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <div class="radio">
    <label><input name="status" type="radio" value="Active" {{ (isset($userss) && 1 == $userss->status) ? 'checked' : '' }}> Active</label>
</div>

<div class="radio">
    <label><input name="status" type="radio" value="Inactive" @if (isset($userss)) {{ (0 == $userss->status) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Inactive</label>
</div>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('role') ? 'has-error' : ''}}">
    <label for="role" class="control-label">{{ 'Role' }}</label>
   
    <!-- <select multiple name="role" class="form-control" id="role" > -->
    <select class="js-example-basic-multiple form-control custom-select" name="role[]" multiple="multiple">    
    <option value="select">select</option>
    
    @foreach($roles as $rs) 
    <option value="{{$rs->id}}" {{(in_array($rs->id, $role_user)) ? "selected" : '' }} >{{$rs->name}}</option>
    @endforeach
        
    </select>
    {!! $errors->first('role', '<p style="color:red;" $optionValueclass="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
