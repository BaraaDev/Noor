<div class="tab-content">
    <!-- Start name input -->
    @php $inputName = "name"; @endphp
    <div class="form-group row">
        <label class="col-form-label col-lg-3">{{__('admin/category.category')}}<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <div class="form-group-feedback form-group-feedback-right">
                <div class="input-group">
                    <span class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-grid6"></i></span>
                    </span>
                    <input type="text" name="{{$inputName}}" id="{{$inputName}}" class="form-control maxlength-badge-position @error($inputName) border-danger-400 @enderror" placeholder="{{__('admin/category.name_category')}}" value="{{Request::old($inputName) ? Request::old($inputName) : $model->$inputName}}" required autocomplete="off">
                    @error($inputName)
                    <div class="form-control-feedback text-danger-400">
                        <i class="icon-cancel-circle2"></i>
                    </div>
                    @enderror
                </div>
            </div>
            @error($inputName)
            <span class="form-text text-danger-400">{{ $message }}</span>
            @enderror
        </div>
    </div><!-- End name input -->


    @php $inputUserId = "user_id"; @endphp
    <div class="form-group row">
        <div class="col-lg-9">
            <div class="form-group-feedback form-group-feedback-left">
                <div class="input-group">
                    <input type="hidden" name="{{$inputUserId}}"  value="{{Auth()->user()->id}}" required>
                </div>
            </div>

        </div>
    </div>

    <!-- Start image input -->
    <div class="form-group row">
        <label class="col-form-label col-lg-3">{{__('admin/news.photo')}}</label>
        <div class="col-lg-9">
            <input type="file" name="image" class="form-control-uniform" data-fouc>
        </div>
    </div><!-- End image input -->


    <!-- Select-->
    @php $input = "status"; @endphp
    <div class="form-group row">
        <label class="col-form-label col-lg-3">{{__('admin/admin.status')}}<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <select name="{{$input}}" data-placeholder="{{__('admin/admin.choose_status')}}" class="form-control select" required data-fouc>

                <option value="1" {{ isset($model) && $model->{$input} == '1' ? 'selected'  : '' }}>{{__('admin/admin.active')}}</option>
                <option value="0" {{ isset($model) && $model->{$input} == '0' ? 'selected'  : '' }}>{{__('admin/admin.deactive')}}</option>
            </select>
        </div>
    </div> <!-- /select-->
</div>

