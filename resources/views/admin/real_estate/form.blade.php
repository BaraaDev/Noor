<div class="tab-content">
    <!-- Start name input -->
    @php $inputName = "title"; @endphp
    <div class="form-group row">
        <label class="col-form-label col-lg-3">{{__('admin/real_estate.real_estate')}}<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <div class="form-group-feedback form-group-feedback-right">
                <div class="input-group">
                    <span class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-home7"></i></span>
                    </span>
                    <input type="text" name="{{$inputName}}" id="{{$inputName}}" class="form-control @error($inputName) border-danger-400 @enderror" placeholder="{{__('admin/real_estate.name_real_estate')}}" value="{{Request::old($inputName) ? Request::old($inputName) : $model->$inputName}}" required autocomplete="off">
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

    <!-- Start content input -->
    @php $content = "content"; @endphp
    <div class="form-group row">
        <label class="col-form-label col-lg-3">{{__('admin/real_estate.content')}}<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea name="{{$content}}" class="form-control summernote" rows="4" cols="4">{{Request::old($content) ? Request::old($content) : $model->$content}}</textarea>
        </div>
    </div><!-- End content input -->

    <!-- Start Area input -->
    @php $inputArea = "Area"; @endphp
    <div class="form-group row">
        <label class="col-form-label col-lg-3">{{__('admin/real_estate.Area')}}<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <div class="form-group-feedback form-group-feedback-right">
                <div class="input-group">
                    <span class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-map"></i></span>
                    </span>
                    <input type="text" name="{{$inputArea}}" id="{{$inputArea}}" class="form-control @error($inputArea) border-danger-400 @enderror" placeholder="{{__('admin/real_estate.AreaType')}}" value="{{Request::old($inputArea) ? Request::old($inputArea) : $model->$inputArea}}" required autocomplete="off">
                    @error($inputArea)
                    <div class="form-control-feedback text-danger-400">
                        <i class="icon-cancel-circle2"></i>
                    </div>
                    @enderror
                </div>
            </div>
            @error($inputArea)
            <span class="form-text text-danger-400">{{ $message }}</span>
            @enderror
        </div>
    </div><!-- End Area input -->


    @php $Bedroom = "bedroom"; @endphp
    <div class="form-group row">
        <label class="col-form-label col-lg-3">{{__('admin/real_estate.bedrooms')}}</label>
        <div class="col-lg-9">
            <div class="form-group-feedback form-group-feedback-right">
                <div class="input-group">
                    <span class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-bed2"></i></span>
                    </span>
                    <input type="number" name="{{$Bedroom}}" id="{{$Bedroom}}" class="form-control @error($Bedroom) border-danger-400 @enderror" placeholder="{{__('admin/real_estate.number_bedrooms')}}" value="{{Request::old($Bedroom) ? Request::old($Bedroom) : $model->$Bedroom}}" required autocomplete="off">
                    @error($Bedroom)
                    <div class="form-control-feedback text-danger-400">
                        <i class="icon-cancel-circle2"></i>
                    </div>
                    @enderror
                </div>
            </div>
            @error($Bedroom)
            <span class="form-text text-danger-400">{{ $message }}</span>
            @enderror
        </div>
    </div><!-- End Area input -->


    @php $Bathroom = "bathroom"; @endphp
    <div class="form-group row">
        <label class="col-form-label col-lg-3">{{__('admin/real_estate.bathrooms')}}</label>
        <div class="col-lg-9">
            <div class="form-group-feedback form-group-feedback-right">
                <div class="input-group">
                    <span class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-accessibility2"></i></span>
                    </span>
                    <input type="number" name="{{$Bathroom}}" id="{{$Bathroom}}" class="form-control @error($Bathroom) border-danger-400 @enderror" placeholder="{{__('admin/real_estate.number_bathrooms')}}" value="{{Request::old($Bathroom) ? Request::old($Bathroom) : $model->$Bathroom}}" required autocomplete="off">
                    @error($Bathroom)
                    <div class="form-control-feedback text-danger-400">
                        <i class="icon-cancel-circle2"></i>
                    </div>
                    @enderror
                </div>
            </div>
            @error($Bathroom)
            <span class="form-text text-danger-400">{{ $message }}</span>
            @enderror
        </div>
    </div><!-- End Area input -->



    @php $Garage = "garage"; @endphp
    <div class="form-group row">
        <label class="col-form-label col-lg-3">{{__('admin/real_estate.garages')}}</label>
        <div class="col-lg-9">
            <div class="form-group-feedback form-group-feedback-right">
                <div class="input-group">
                    <span class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-car"></i></span>
                    </span>
                    <input type="number" name="{{$Garage}}" id="{{$Garage}}" class="form-control @error($Garage) border-danger-400 @enderror" placeholder="{{__('admin/real_estate.number_garages')}}" value="{{Request::old($Garage) ? Request::old($Garage) : $model->$Garage}}" required autocomplete="off">
                    @error($Garage)
                    <div class="form-control-feedback text-danger-400">
                        <i class="icon-cancel-circle2"></i>
                    </div>
                    @enderror
                </div>
            </div>
            @error($Garage)
            <span class="form-text text-danger-400">{{ $message }}</span>
            @enderror
        </div>
    </div><!-- End Area input -->


    @php $Building = "building"; @endphp
    <div class="form-group row">
        <label class="col-form-label col-lg-3">{{__('admin/real_estate.building')}}</label>
        <div class="col-lg-9">
            <div class="form-group-feedback form-group-feedback-right">
                <div class="input-group">
                    <span class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-city"></i></span>
                    </span>
                    <input type="text" name="{{$Building}}" id="{{$Building}}" class="form-control @error($Building) border-danger-400 @enderror" placeholder="{{__('admin/real_estate.type_building')}}" value="{{Request::old($Building) ? Request::old($Building) : $model->$Building}}" required autocomplete="off">
                    @error($Building)
                    <div class="form-control-feedback text-danger-400">
                        <i class="icon-cancel-circle2"></i>
                    </div>
                    @enderror
                </div>
            </div>
            @error($Building)
            <span class="form-text text-danger-400">{{ $message }}</span>
            @enderror
        </div>
    </div><!-- End Area input -->

    <!-- Start select category -->
    <div class="form-group row">
        <label class="col-form-label col-lg-3">{{__('admin/category.category')}}<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            @inject('category','App\Models\Category')

            {!! Form::select('category_id',$category->status(1)->pluck('name','id'),Request::old('category_id') ? Request::old('category_id') : $model->category_id,[
                'placeholder' => __('admin/admin.select'),
                'class'       => 'form-control select',
                'required'    => 'required'
            ]) !!}
        </div>
    </div>
    <!-- End select category -->


    <!-- Start select location -->
    <div class="form-group row">
        <label class="col-form-label col-lg-3">{{__('admin/location.location')}}<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            @inject('location','App\Models\Location')

            {!! Form::select('location_id',$location->status(1)->pluck('name','id'),Request::old('location_id') ? Request::old('location_id') : $model->location_id,[
                'placeholder' => __('admin/admin.select'),
                'class'       => 'form-control select',
                'required'    => 'required'
            ]) !!}
        </div>
    </div>
    <!-- End select location -->


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
        <label class="col-form-label col-lg-3">إختار صورة</label>
        <div class="col-lg-9">
            <input type="file" name="image[]" class="form-control-uniform" multiple data-fouc>
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

