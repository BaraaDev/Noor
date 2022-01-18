
<!-- Start tab content input -->
<div class="tab-content">
    <!-- Start name input -->
    @php $inputname = "name"; @endphp
    <div class="form-group row">
        <label class="col-form-label col-lg-3">الإسم<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <div class="form-group-feedback form-group-feedback-right">
                <div class="input-group">
                    <span class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-cog3"></i></span>
                    </span>
                    <input type="text" name="{{$inputname}}" id="{{$inputname}}" class="form-control" placeholder="اكتب العنوان" value="{{Request::old($inputname) ? Request::old($inputname) : $model->$inputname}}" required>
                </div>
            </div>
        </div>
    </div><!-- End name input -->

    <!-- Start description ar input -->
    @php $content = "content"; @endphp
    <div class="form-group row">
        <label class="col-form-label col-lg-3">وصف الموقع <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea name="{{$content}}" id="{{$content}}" class="form-control"  rows="4" cols="4">{!! Request::old($content) ? Request::old($content) : $model->$content !!}</textarea>
        </div>
    </div><!-- End description ar input -->

    <!-- Start phone input -->
    @php $inputphone = "phone"; @endphp
    <div class="form-group row">
        <label class="col-form-label col-lg-3">الهاتف<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <div class="form-group-feedback form-group-feedback-right">
                <div class="input-group">
                    <input type="tel" name="{{$inputphone}}" id="{{$inputphone}}" class="form-control" placeholder="اكتب رقم الهاتف" value="{{Request::old($inputphone) ? Request::old($inputphone) : $model->$inputphone}}" required>
                </div>
            </div>
        </div>
    </div><!-- End phone input -->


    <!-- Start location input -->
    @php $inputlocation = "location"; @endphp
    <div class="form-group row">
        <label class="col-form-label col-lg-3">الموقع<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <div class="form-group-feedback form-group-feedback-right">
                <div class="input-group">
                    <input type="text" name="{{$inputlocation}}" id="{{$inputlocation}}" class="form-control" placeholder="اكتب الموقع" value="{{Request::old($inputlocation) ? Request::old($inputlocation) : $model->$inputlocation}}" required>
                </div>
            </div>
        </div>
    </div><!-- End location input -->


    <!-- Start facebook input -->
    @php $inputfacebook = "facebook"; @endphp
    <div class="form-group row">
        <label class="col-form-label col-lg-3">الفيسبوك<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <div class="form-group-feedback form-group-feedback-right">
                <div class="input-group">
                    <input type="text" name="{{$inputfacebook}}" id="{{$inputfacebook}}" class="form-control" placeholder="اكتب اسم المستخدم للفيسبوك" value="{{Request::old($inputfacebook) ? Request::old($inputfacebook) : $model->$inputfacebook}}" required>
                </div>
            </div>
        </div>
    </div><!-- End facebook input -->


    <!-- Start twitter input -->
    @php $inputtwitter = "twitter"; @endphp
    <div class="form-group row">
        <label class="col-form-label col-lg-3">التويتر<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <div class="form-group-feedback form-group-feedback-right">
                <div class="input-group">
                    <input type="text" name="{{$inputtwitter}}" id="{{$inputtwitter}}" class="form-control" placeholder="اكتب اسم مستخدم تويتر" value="{{Request::old($inputtwitter) ? Request::old($inputtwitter) : $model->$inputtwitter}}" required>
                </div>
            </div>
        </div>
    </div><!-- End twitter input -->


    <!-- Start linkedin input -->
    @php $inputlinkedin = "linkedin"; @endphp
    <div class="form-group row">
        <label class="col-form-label col-lg-3">لينكد ان<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <div class="form-group-feedback form-group-feedback-right">
                <div class="input-group">
                    <input type="text" name="{{$inputlinkedin}}" id="{{$inputlinkedin}}" class="form-control" placeholder="اكتب اسم المستخدم للينكد ان" value="{{Request::old($inputlinkedin) ? Request::old($inputlinkedin) : $model->$inputlinkedin}}" required>
                </div>
            </div>
        </div>
    </div><!-- End linkedin input -->


    <!-- Start youtube input -->
    @php $inputyoutube = "youtube"; @endphp
    <div class="form-group row">
        <label class="col-form-label col-lg-3">اليوتيوب<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <div class="form-group-feedback form-group-feedback-right">
                <div class="input-group">
                    <input type="text" name="{{$inputyoutube}}" id="{{$inputyoutube}}" class="form-control" placeholder="اكتب رابط اليوتيوب" value="{{Request::old($inputyoutube) ? Request::old($inputyoutube) : $model->$inputyoutube}}" required>
                </div>
            </div>
        </div>
    </div><!-- End youtube input -->

    <!-- Start instagram input -->
    @php $inputinstagram = "instagram"; @endphp
    <div class="form-group row">
        <label class="col-form-label col-lg-3">انستجرام<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <div class="form-group-feedback form-group-feedback-right">
                <div class="input-group">
                    <input type="text" name="{{$inputinstagram}}" id="{{$inputinstagram}}" class="form-control" placeholder="اكتب اسم مسخدم انستجرام" value="{{Request::old($inputinstagram) ? Request::old($inputinstagram) : $model->$inputinstagram}}" required>
                </div>
            </div>
        </div>
    </div><!-- End instagram input -->

    <!-- Start telegram input -->
    @php $inputtelegram = "telegram"; @endphp
    <div class="form-group row">
        <label class="col-form-label col-lg-3">التيلجرام<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <div class="form-group-feedback form-group-feedback-right">
                <div class="input-group">
                    <input type="text" name="{{$inputtelegram}}" id="{{$inputtelegram}}" class="form-control" placeholder="اكتب اسم المستخدم " value="{{Request::old($inputtelegram) ? Request::old($inputtelegram) : $model->$inputtelegram}}" required>
                </div>
            </div>
        </div>
    </div><!-- End telegram input -->


    <!-- Start whatsApp input -->
    @php $inputwhatsApp = "whatsApp"; @endphp
    <div class="form-group row">
        <label class="col-form-label col-lg-3">الواتساب<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <div class="form-group-feedback form-group-feedback-right">
                <div class="input-group">
                    <input type="text" name="{{$inputwhatsApp}}" id="{{$inputwhatsApp}}" class="form-control" placeholder="اكتب رقم الواتساب" value="{{Request::old($inputwhatsApp) ? Request::old($inputwhatsApp) : $model->$inputwhatsApp}}" required>
                </div>
            </div>
        </div>
    </div><!-- End whatsApp input -->


    <!-- Start email input -->
    @php $inputemail = "email"; @endphp
    <div class="form-group row">
        <label class="col-form-label col-lg-3">البريد الإلكتروني<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <div class="form-group-feedback form-group-feedback-right">
                <div class="input-group">
                    <input type="email" name="{{$inputemail}}" id="{{$inputemail}}" class="form-control" placeholder="اكتب رقم البريد الإلكتروني" value="{{Request::old($inputemail) ? Request::old($inputemail) : $model->$inputemail}}" required>
                </div>
            </div>
        </div>
    </div><!-- End email input -->

    <!-- Start image input -->
    <div class="form-group row">
        <label class="col-form-label col-lg-3">إختار صورة</label>
        <div class="col-lg-9">
            <input type="file" name="image" class="form-control-uniform" data-fouc>
        </div>
    </div><!-- End image input -->

</div><!-- End tab content input -->

