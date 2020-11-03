<div class="card-body">
 <!-- <a href="{{ url('/admin/coupon') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a> -->
    <div class="form-group">
        <label for="inputName">Code</label>
        <input type="text" id="code" name="code" id="code" class="form-control" value="{{isset($coupon->code) ? $coupon->code : old('code')}}">
    </div>
    <div class="form-group">
        <label for="inputName">percent_off</label>
        <input type="text" name="percent_off" id="percent_off" class="form-control" value="{{isset($coupon->percent_off) ? $coupon->percent_off : old('percent_off')}}">
    </div>
    <div class="form-group">
        <label for="inputName">no_of_uses</label>
        <input type="text" name="no_of_uses" id="no_of_uses" class="form-control" value="{{isset($coupon->no_of_uses) ? $coupon->no_of_uses : old('no_of_uses')}}">
    </div>
    <div class="row">
    <div class="col-12">
        <a href="#" class="btn btn-secondary">Cancel</a>
        <!-- <input type="submit" value="Create new Porject" class="btn btn-success float-right"> -->
        <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
    </div>
 </div>

<script src="{{asset('admin/js/couponformvalidation.js')}}"> </script>