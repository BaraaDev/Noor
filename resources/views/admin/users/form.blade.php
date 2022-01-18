<!-- Start name input -->
@php $inputname = "name"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">{{__('admin/user.name')}}<span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <div class="form-group-feedback form-group-feedback-right">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>
                <input type="text" name="{{$inputname}}" id="name" class="form-control @error($inputname) border-danger-400 @enderror" placeholder="{{__('admin/user.name_enter')}}" value="{{Request::old($inputname) ? Request::old($inputname) : $model->$inputname}}">
                @error($inputname)
                <div class="form-control-feedback text-danger-400">
                    <i class="icon-cancel-circle2"></i>
                </div>
                @enderror
            </div>
        </div>
        @error($inputname)
        <span class="form-text text-danger-400">{{ $message }}</span>
        @enderror
    </div>
</div><!-- End name input -->

<!-- Start email field -->
@php $input_email = "email"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">{{__('admin/admin.email')}}<span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <div class="form-group-feedback form-group-feedback-right">
            <div class="input-group">
                <span class="input-group-text bg-primary border-primary text-white">
                    $
                </span>
                <input type="email" name="{{$input_email}}" class="form-control @error($input_email) border-danger-400 @enderror" id="email" placeholder="{{__('admin/admin.email_enter')}}" value="{{Request::old($input_email) ? Request::old($input_email) : $model->$input_email}}">
                @error($input_email)
                <div class="form-control-feedback text-danger-400">
                    <i class="icon-cancel-circle2"></i>
                </div>
                @enderror
            </div>
        </div>
        @error($input_email)
        <span class="form-text text-danger-400">{{ $message }}</span>
        @enderror
    </div>
</div><!-- /email field -->

<!-- Password field -->
@php $input_password = "password"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">{{__('admin/user.password')}}<span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <div class="input-group group-indicator">
            <input type="password" name="password" id="password" class="form-control" placeholder="{{__('admin/user.password_enter')}}" >
        </div>
    </div>
</div><!-- /password field -->


<!-- Repeat password -->
<div class="form-group row">
    <label class="col-form-label col-lg-3">{{__('admin/user.password_renter')}}<span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <div class="form-group-feedback form-group-feedback-right">
            <input type="password" name="password_confirmation" class="form-control" placeholder="{{__('admin/user.password_renter')}}">
        </div>
    </div>
</div> <!-- /repeat password -->

<!-- Start image input -->
<div class="form-group row">
    <label class="col-form-label col-lg-3">{{__('admin/admin.image')}}</label>
    <div class="col-lg-9">
        <input type="file" name="image" class="form-control-uniform" data-fouc>
    </div>
</div><!-- End image input -->

<!-- Start phone input -->
@php $phone = "phone"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">{{__('admin/user.phone')}}<span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <div class="form-group-feedback form-group-feedback-right">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-phone"></i></span>
                </span>
                <input type="tel" name="{{$phone}}" id="{{$phone}}" class="form-control @error($phone) border-danger-400 @enderror" placeholder="{{__('admin/user.phone_enter')}}" value="{{Request::old($phone) ? Request::old($phone) : $model->$phone}}">
                @error($phone)
                <div class="form-control-feedback text-danger-400">
                    <i class="icon-cancel-circle2"></i>
                </div>
                @enderror
            </div>
        </div>
        @error($phone)
        <span class="form-text text-danger-400">{{ $message }}</span>
        @enderror
    </div>
</div><!-- End phone input -->

<!-- Start jub input -->
@php $jub = "jub"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">{{__('admin/user.jub')}}<span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <div class="form-group-feedback form-group-feedback-right">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-jub"></i></span>
                </span>
                <input type="text" name="{{$jub}}" id="{{$jub}}" class="form-control @error($jub) border-danger-400 @enderror" placeholder="{{__('admin/user.jub_enter')}}" value="{{Request::old($jub) ? Request::old($jub) : $model->$jub}}">
                @error($jub)
                <div class="form-control-feedback text-danger-400">
                    <i class="icon-cancel-circle2"></i>
                </div>
                @enderror
            </div>
        </div>
        @error($jub)
        <span class="form-text text-danger-400">{{ $message }}</span>
        @enderror
    </div>
</div><!-- End jub input -->

<!-- Start facebook input -->
@php $facebook = "facebook"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">{{__('admin/user.facebook')}}<span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <div class="form-group-feedback form-group-feedback-right">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-facebook"></i></span>
                </span>
                <input type="text" name="{{$facebook}}" id="{{$facebook}}" class="form-control @error($facebook) border-danger-400 @enderror" placeholder="{{__('admin/user.userName_enter')}}" value="{{Request::old($facebook) ? Request::old($facebook) : $model->$facebook}}">
                @error($facebook)
                <div class="form-control-feedback text-danger-400">
                    <i class="icon-cancel-circle2"></i>
                </div>
                @enderror
            </div>
        </div>
        @error($facebook)
        <span class="form-text text-danger-400">{{ $message }}</span>
        @enderror
    </div>
</div><!-- End facebook input -->

<!-- Start twitter input -->
@php $twitter = "twitter"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">{{__('admin/user.twitter')}}<span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <div class="form-group-feedback form-group-feedback-right">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-twitter"></i></span>
                </span>
                <input type="text" name="{{$twitter}}" id="{{$twitter}}" class="form-control @error($twitter) border-danger-400 @enderror" placeholder="{{__('admin/user.userName_enter')}}" value="{{Request::old($twitter) ? Request::old($twitter) : $model->$twitter}}">
                @error($twitter)
                <div class="form-control-feedback text-danger-400">
                    <i class="icon-cancel-circle2"></i>
                </div>
                @enderror
            </div>
        </div>
        @error($twitter)
        <span class="form-text text-danger-400">{{ $message }}</span>
        @enderror
    </div>
</div><!-- End twitter input -->

<!-- Start YouTube input -->
@php $youtube = "youtube"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">{{__('admin/user.youtube')}}<span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <div class="form-group-feedback form-group-feedback-right">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-youtube"></i></span>
                </span>
                <input type="text" name="{{$youtube}}" id="{{$youtube}}" class="form-control @error($youtube) border-danger-400 @enderror" placeholder="{{__('admin/user.userName_enter')}}" value="{{Request::old($youtube) ? Request::old($youtube) : $model->$youtube}}">
                @error($youtube)
                <div class="form-control-feedback text-danger-400">
                    <i class="icon-cancel-circle2"></i>
                </div>
                @enderror
            </div>
        </div>
        @error($youtube)
        <span class="form-text text-danger-400">{{ $message }}</span>
        @enderror
    </div>
</div><!-- End YouTube input -->

<!-- Start instagram input -->
@php $instagram = "instagram"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">{{__('admin/user.instagram')}}<span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <div class="form-group-feedback form-group-feedback-right">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-instagram"></i></span>
                </span>
                <input type="text" name="{{$instagram}}" id="{{$instagram}}" class="form-control @error($instagram) border-danger-400 @enderror" placeholder="{{__('admin/user.userName_enter')}}" value="{{Request::old($instagram) ? Request::old($instagram) : $model->$instagram}}">
                @error($instagram)
                <div class="form-control-feedback text-danger-400">
                    <i class="icon-cancel-circle2"></i>
                </div>
                @enderror
            </div>
        </div>
        @error($instagram)
        <span class="form-text text-danger-400">{{ $message }}</span>
        @enderror
    </div>
</div><!-- End instagram input -->

<!-- Select2 select -->
@php $input_is_admin = "is_admin"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">{{__('admin/admin.job')}}<span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <select name="{{$input_is_admin}}" data-placeholder="{{__('admin/user.choose_user_job')}}" class="form-control select" required data-fouc>
            <option></option>
                <option value="user" {{ isset($model) && $model->{$input_is_admin} == 'user' ? 'selected'  : '' }}>{{__('admin/user.user')}}</option>
                <option value="admin" {{ isset($model) && $model->{$input_is_admin} == 'admin' ? 'selected'  : '' }}>{{__('admin/user.admin')}}</option>
        </select>
    </div>
</div> <!-- /select2 select -->

<!-- Select2 select -->
@php $input = "status"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-3">{{__('admin/user.status')}}<span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <select name="{{$input}}" data-placeholder="{{__('admin/user.status')}}" class="form-control select"  {{Request::old('required') ? Request::old('required') : $model->required}} data-fouc>
            <option></option>
            <option value="1" {{ isset($model) && $model->{$input} == '1' ? 'selected'  : '' }}>{{__('admin/user.active')}}</option>
            <option value="0" {{ isset($model) && $model->{$input} == '0' ? 'selected'  : '' }}>{{__('admin/user.deject')}}</option>
        </select>
    </div>
</div> <!-- /select2 select -->
