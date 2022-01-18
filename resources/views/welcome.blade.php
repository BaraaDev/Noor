@extends('layouts.app')
@section('content')
    <!-- Banner Section -->
    <section class="banner-section style-one">
        <div class="banner-carousel owl-carousel owl-theme">
            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(website/images/background/1.jpeg);">
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(website/images/background/2.jpeg);">
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(website/images/background/3.jpeg);">
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(website/images/background/4.jpeg);">
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(website/images/background/5.jpeg);">
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(website/images/background/6.jpeg);">
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(website/images/background/7.jpeg);">
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!-- About Us -->
    <section class="about-us" style="background-image: url(website/images/background/1.jpg);">
        <div class="auto-container">
            <div class="row">
                <!-- Info Column -->
                <div class="info-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <span class="title">- من نحن -</span>
                            <h2>شركة نور للاستثمار</h2>
                        </div>

                        <div class="text"><strong>هي شركة استثمار تأسست عام 2007 م في مدينة بورصا التي تعد رابع أكبر مدن تركيا، تعمل الشركة في عده مجالات رئيسية:</strong></div>

                        <div class="row features">
                            @foreach($icons as $icon)
                            <!-- Feature Block -->
                            <div class="feature-block">
                                <div class="inner-box">
                                    <span class="{{$icon->icon}}"></span>
                                    <h4>{!! $icon->title !!}</h4>
                                    <div class="text">{!! $icon->text !!}</div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <!-- Video Column -->
                <div class="video-column col-xl-6 col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div>
                            <figure class="image"></figure>
                            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/1MTTsl9Uh4s?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us -->

    <!-- Real Estate Section -->
    <section class="property-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">ابحث الآن عن منزل أحلامك</span>
                <h2>العقارات المتاحة</h2>
            </div>

            <div class="row">
                @foreach($real_estates as $real_estate)
                <!-- Property Block -->
                <div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="single-item-carousel owl-carousel owl-theme">
                                @foreach($real_estate->photo as $key => $value)
                                <figure class="image"><img src="{{asset('media'.'/'.$value->id.'/'.$value->file_name)}}" alt="{{$real_estate->title}}"></figure>
                                @endforeach
                            </div>
                            <span class="for">{{$real_estate->building}}</span>

                        </div>
                        <div class="lower-content">
                            <ul class="tags">
                                <li>{{$real_estate->category->name}}</li>
                            </ul>
                            <h3><a>{{$real_estate->title}}</a></h3>
                            <div class="lucation"><i class="la la-map-marker"></i>{{$real_estate->location->name}}</div>
                            <ul class="property-info clearfix">
                                <li><i class="flaticon-dimension"></i>المساحة: {{$real_estate->Area}}</li>
                                <li><i class="flaticon-bed"></i>غرف نوم: {{$real_estate->bedroom}}</li>
                                <li><i class="flaticon-car"></i>جراج: {{$real_estate->garage}}</li>
                                <li><i class="flaticon-bathtub"></i>حمام: {{$real_estate->bathroom}}</li>
                            </ul>
                            <div class="property-price clearfix">
                                <div class="read-more"><a href="{{route('real_estateShow',$real_estate->id)}}" class="theme-btn">تفاصيل أكثر</a></div>
                                <div class="price"><a style="color: #fff;" href="contact/" class="theme-btn">تواصل معنا</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--End Real Estate Section -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">تعمل الشركة على تقديم أفضل الخدمات في مجال العقارات والاستثمار العقاري لكافة الأخوة العرب والأجانب المهتمين بشراء العقارات أو الاستثمار في تركيا.</span>
                <h2>خدماتنا المقدمة للعملاء العقاريين:</h2>
            </div>

            <div class="row">
                @foreach($services as $service)
                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-buildings"></span></div>
                        <h4>{{$service->name}}</h4>
                        <div class="link-box"><a href="#service{{$loop->iteration}}">معرفة المزيد ></a></div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </section>
    <!--End Services Section -->

    <!-- FAQ's Section -->
    <section class="faq-section">
        <div class="auto-container">
            <!--Product Info Tabs-->
            <div class="faq-tabs">
                <!--Product Tabs-->
                <div class="tabs-box">
                    <!--Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#tab-01" class="tab-btn active-btn">خدماتنا المقدمة للعملاء العقاريين</li>
                        <li data-tab="#tab-04" class="tab-btn">خدماتنا المقدمة للمستثمرين في الانشاءات والمشاريع العقارية</li>
                    </ul>

                    <!--Tabs Container-->
                    <div class="tabs-content">
                        <!--Tab / Active tab-->
                        <div class="tab active-tab" id="tab-01">
                            <div class="content">
                                <ul class="accordion-box">
                                @foreach($services as $service)
                                    <!--Block-->
                                    <li class="accordion block @if($loop->first)active-block @endif">
                                        <div id="service{{$loop->iteration}}" class="acc-btn @if ($loop->first) active @endif">{{$loop->iteration}} - {{$service->name}}<div class="icon la la-arrow-circle-o-right"></div></div>
                                        <div class="acc-content @if($loop->first)current @endif">
                                            <div class="content">
                                                <div class="text">{{$service->description}}</div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="tab-02">
                            <div class="content">
                                <ul class="accordion-box">
                                    <!--Block-->
                                    <li class="accordion block  active-block">
                                        <div class="acc-btn active">الأوراق والوثائق المطلوبة للتسجيل العقاري بالنسبة للأجنبي: الوثائق اللازمة لتسجيل العقارات في “الطابو”:<div class="icon la la-arrow-circle-o-right"></div></div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <div class="text">1- جواز السفر الاصلي  مع الترجمة<br>2. استخراج رقم ضريبي تركي .<br>3- وثيقة تأمين إجباري ضد الزلازل للعقار .<br>4. تقرير مثمن الاجانب .<br>5- صورتين شخصية حديثة التاريخ للمشتري .<br>6. سند تسديد رسوم البيع أو الشراء من دائرة الضريبة.</div>
                                            </div>
                                        </div>
                                    </li>

                                    <!--Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn">الحدود القانونية الخاصة بتملك الأشخاص العاديين الأجانب في تركيا:<div class="icon la la-arrow-circle-o-right"></div></div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">1ـ يحق للشخص العادي في تركيا فقط امتلاك 30 ألف متر مربع ، ولا يحق له امتلاك أكثر من ذلك .<br>2ـ لا يحق للأجانب التملك في المناطق القريبة من المراكز الأمنية والمواقع العسكرية، كما لا يحق للأجانب حتى الاستئجار في تلك المناطق .<br>3ـ إذا كان الشخص العادي يملك سجلًا تجاريًا خاصًا به وصادرًا من دولته، فإن الحدود العقارية التي ينصها القانون، لا تنطبق عليه ويحق له التملك بقدر ما يريد دون أي شرط أو قيد .<br>4ـ يتم مصادرة العقارات الأرضية التي يتم تطوير مشاريع فوقها ولا يتم إعلام الوزرات الخاصة بهذه المشاريع .</div>
                                            </div>
                                        </div>
                                    </li>

                                    <!--Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn">الأمور التي يجب على المستثمر الأجنبي أن يوليها انتباهه قبل الشراء:<div class="icon la la-arrow-circle-o-right"></div></div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">1ـ  عدم وجود حجز أو قضايا قانونية على العقار الذي يريد الاستثمار فيه، للتأكد يمكن مراجعة مؤسسة الطابو.<br>2ـ  حال تم رفض طلب التملك، يمكن تقديم طلب اعتراض لأقرب مديرية طابو موجودة في المنطقة المُراد التملك فيها.4ـ حال أراد الأجنبي التملك في تركيا لا يُسأل إذا كانت معه إقامة أم لا ، جواز السفر كافي للاتمام المعامله .<br>5ـ  إذا حدث أي نزاع أو خلاف بين البائع والمشتري يجب نقل الخلاف على الفور للمحاكم العدلية.\\</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="tab-03">
                            <div class="content">
                                <ul class="accordion-box">
                                    <!--Block-->
                                    <li class="accordion block  active-block">
                                        <div class="acc-btn active">رسوم وضرائب العقارات:<div class="icon la la-arrow-circle-o-right"></div></div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <div class="text"> رسوم تسجيل وضرائب نقل ملكية العقار في تركيا<br>ترجمة وتصديق جواز سفر مشتري العقار للغة التركية:<br>رسم الحصول على سند ملكية العقار (Tapu) باسم المالك الجديد:<br>ضريبة تملّك عقار في الجمهورية التركية هي بنسبة: 0,04% من القيمة الإجمالية للعقارمتغير حسب ما تصدره الدوله .<br>رسوم استدعاء مترجم مُحلّف “إنجليزي – تركي” ومسجّل لدى نقابة المترجمين في تركيا.<br>رسوم تقديم طلب نقل ملكية العقار (تُدفع لمكتب الخرائط في دائرة الأراضي والسجّل العقاري):<br>رسوم البلدية السنوية وهي بنسبة:  مابين 0,0001   - 0,0003% من قيمة العقار ، تُدفع للبلدية التابع لها العقار في المدينة ، وذلك مقابل خدمات مرتب: ضريبة تملك العقار:<br>وتجدر الإشارة إلى أن ضريبة تملّك عقار في تركيا لايشترط ان تدفع سنويا  .</div>
                                            </div>
                                        </div>
                                    </li>

                                    <!--Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn">مصاريف أخرى تُدفع لجهات رسمية مختلفة بعد إتمام عملية تسجيل العقار<div class="icon la la-arrow-circle-o-right"></div></div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">• تسجيل عداد المياه باسم المالك الجديد.<br>• تسجيل عداد الكهرباء باسم المالك الجديد.<br>• تسجيل عداد الغاز جديد باسم المالك الجديد.<br>• (DASK) التأمين الإلزامي السنوي ضد الزلازل والكوارث الطبيعية.<br>• الرسوم الشهرية للمجمع السكني وفواتير المياه والكهرباء الشهرية، يمكن للمالك الأجنبي ربطها في حسابه البنكي في تركيا، على أن يتم تحويل المبلغ إلى حساب لجنة اتحاد السكان في المجمع السكني، بشكل تلقائي وشهري خلال فترة ابتعاد المالك عن الشقة في تركيا.<br>• رسوم الوكيل العقاري:-<br>(وكلاء العقارات المسجلون والمرخصون مخولين بالحصول على 3٪ + ضريبة القيمة المضافة “فات” رسوم خدمة على سعر البيع الفعلي للعقار من كل طرف).<br>• التأمين ضد الزلازل (لاقدر الله):-<br>(التأمين ضد أخطار الزلازل، وهو إلزامي على ملاك العقارات، حيث تفرض قيمة وطنية ثابتة لهذا التأمين، وتدفع لإحدى شركات التأمين المرخصة).</div>
                                            </div>
                                        </div>
                                    </li>

                                    <!--Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn">رسوم تشغيل شهرية (( العائدات )) على العقارات السكنية :<div class="icon la la-arrow-circle-o-right"></div></div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">نظراً للخدمات العديدة المتوفرة في المجمعات السكنية، من مسابح وملاعب وحدائق، ونظام مراقبة وكاميرات…الخ<br>او الخدمات المحدودة في الابنيه السكنية من تنظيف دوري وعقود صيانه الاصنصيرات و فواتير كهرباء المداخل ... الخ<br>يشترك جميع الملاك، في رسوم شهرية ثابتة، تدفع للشركة القائمة على تشغيل المجمع، لأعمال صيانة جميع الخدمات، والمحافظة عليها، وأعمال النظافه وغيرها، حتى تجد المجمع على أكمل صورة.<br>وتختلف هذه الرسوم من مشروع لآخر او من بناء الى اخر . حسب الخدمات المقدمة والتكاليف الشهرية .</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="tab-04">
                            <div class="content">
                                <ul class="accordion-box">
                                    <!--Block-->
                                    <li class="accordion block  active-block">
                                        <div class="acc-btn active">خدماتنا المقدمة للمستثمرين في الانشاءات والمشاريع العقارية:<div class="icon la la-arrow-circle-o-right"></div></div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <div class="text">سهلت تركيا من خلال القوانين التي أصدرتها و التي منحت من خلالها قانون التملك و إمكانية الاستثمار على كامل الأراضي التركية بالإضافة إلى تسهيلات قدمتها لحصول المستثمر على الإقامة و جواز السفر التركي و بالتالي تساعد على تقديم الأوراق للحصول على الجنسية التركية.<br><b>انواع الاستثمار العقاري الذي تقدمه شركة نور للاستثمار العقاري للمستثمرين /</b><br>الاستثمار في شراء الارض وتقوم شركة الانشاءات بانشاء المشروع عليها  .<br>الاستثمار في شراء حصه من ارض المشروع + في تكلفة الانشاءات   .<br>الاستثمار بالكامل في ارض المشروع + تكلفة الانشاءات عائد للمستثمر .<br>شراء محال تجارية في مكان متميز وحيوي بالقرب من المواصلات وتأجيرها للغير بأسعار مناسبة وتحقيق الربح.<br>شراء الشـقق في المناطق الحيوية في تركيا وبيعها للغير أو تأجيرها، وذلك بفضـل ارتفاع أسـعار العقارات بشكل مستمر في تركيا.<br>شراء أراضي عقارية للاستفادة منها في البناء أو الزراعة والاستثمار الزراعي.<br>التسهيلات العقاريـة التي تمنحها الحكومـة في تـركيا للمستثمريـن.<br>اهتمام تركيا بالقطاع العقاري و ذلك لاستقطاب المستثمرين الأجانب مع تقديم التسهيلات و المزايا لهم المساعدة على الاستثمار.<br>الجغرافية المميزة التي تملكها تركيا من حيث الموقع المتوسط بين آسيا و أوروبا و تنوع تضاريسها و طبيعتها المتجددة.<br>السعي الكبير لتطوير البنية التحتية و تهيئة الطريق أمام الاستثمـارات الخارجية والداخلية.<br>اعتمادها على مشاريع تنموية و اقتصادية في مختلف مدنها و التي بدورها تجذب المستثمرين للتملك العقاري و لاستثمار الاقتصادي فيها.<br>انخفاض العملة في تركيا التي تؤدي إلى انخفاض تكاليف الاعمال الاستثماريـة بصفة عامة وفي مجال العقارات بصفة خاصة مع مقارنة الاستثمـارات مع دول أوروبية والـدول العربية الأخرى.<br>مع تزايد المستمر للسكان في تركيا خاصة إسطنبول و التي تعد الأولى في مجال التسويق و التملك العقاري يجعل استثمار العقارات في تركيا أحد افضل الخيارات التجارية الناجحة و القرارات المربحة.<br>عائد الاستثمار العقاري في تركيا<br>تتحقق المشاريع العقارية في تركيا عائد كبير للمستثمرين على مدار العديد من السنوات و قد تصل ل 20 سنة سواء كانت هذه المشاريع تجارية أو سكنية.<br>يتم حساب العائد الاستثماري للعقارات بطريقة تختلف عن الاستثمارات الأخرى ذلك نتيجة الاحتفاظ بقيمة رأس المال المستثمـر في العقار دون تغيير، فعند الاستثمار في عقار مضمون بنسبة 6% لمدة 5 سنوات سيحصل المستثمر على 30% من قيمة العقار و في حال قام المستثمر الاستثمار في موقع يحتمل فيه ارتفاع أسعار العقـارات فيه يحصل المستثمر على عائد استثمار يتراوح بين 70% إلى 100% من قيمة الاستثمار الأصلي</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End FAQ's Section -->

    <!--Clients Section-->
    <section class="clients-section style-two">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a><img src="{{asset('website/images/clients/1.jpeg')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a><img src="{{asset('website/images/clients/2.jpeg')}}" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section-->

    <!-- Nationality -->
    <section id="nationality" class="about-us style-two">
        <div class="auto-container">
            <div class="row">
                <!-- Info Column -->
                <div class="info-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">الجنسية التركية من خلال الاستثمار العقاري...</span>
                            <h2>الجنسية التركية:</h2>
                        </div>
                        <div class="row features">
                            <!-- Feature Block -->
                            <div class="feature-block">
                                <div class="inner-box">
                                    <p><b>فرصة لتصبح مواطنًا تركيًا خلال مدة لا تتجاوز من 90 الي 120 يوم<br>قد تستفيد الأسرة بأكملها ، بما في ذلك الزوج والأطفال والتمتع بجميع الحقوق الاجتماعية من حيث العمل والتعليم والصحة .<br>تم اتخاذ آخر قرار بشأن حصول المستثمرين الأجانب على الجنسية التركية في عام 2018. ووفقًا لذلك ، تم تسهيل العملية بشكل أكبر من خلال تقليل حجم الاستثمار الذي يجب على المستثمرين الأجانب القيام به من أجل الحصول على الجنسية من مليون دولار إلى 250 ألف دولار. يحق للأجانب الذين اشتروا عقارات بقيمة 250 ألف دولار في تركيا التقدم بطلب للحصول على الجنسية التركية. لا ينطبق هذا الحق على المستثمر فحسب ، بل ينطبق أيضًا على الزوج / الزوجة والأطفال الذين تقل أعمارهم عن 18 عامًا.<br>بحصول المستثمر وعائلاتهم على الجنسية التركية عن طريق الاستثمار، سيُمَكنهم من الاستفادة من العديد من المميزات فيما يخص الحياة الاجتماعية والفرص المالية وسهولة السفر . كما تضمن لهم تركيا الرفاهية ومستقبلا مليئا بخدمات الرعاية الصحية والتعليم المجاني المقدمة لمواطنيها.<br>يمكن للمستثمرين الأجانب شراء العقارات كممتلكات سكنية أو كأصل محتمل مع إمكانية تحقيق عائد مرتفع على الاستثمار. تمتلك تركيا مجموعة واسعة من المساكن المريحة والفيلات الفاخرة المطلة على البحر بتكلفة مناسبة لجميع الميزانيات. قد يحصل المستثمرون الأجانب أيضًا على دخل إيجار من استثماراتهم العقارية أو بيعها بعد فترة 3 سنوات من التقييد.</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Video Column -->
                <div class="video-column col-xl-6 col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="video-box">
                            <figure class="image"><img src="{{asset('website/images/turk-cit.jpg')}}" alt=""></figure>
                        </div>
                    </div><br><br>
                    <!-- Load More -->
                    <div class="load-more-btn text-center">
                        <a href="nationality/" class="theme-btn btn-style-two"><b style="color: #ffffff;">- لمزيد من المعلومات -</b></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Nationality -->

    <!-- Portfolio -->
    <section class="about-us" style="background-image:url(website/images/background/6.jpg);">
        <div class="auto-container">
            <div class="row">
                <!-- Info Column -->
                <div class="info-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <span class="title">من أعمالنا:</span>
                            <p style="color: white;">المشاريع التي قامت بها شركة نور للاستثماروالانشاءات مع المستثمرين . مدينة بورصا - تركيا</p>
                        </div>
                        <div class="row features">
                            @foreach($projects as $project)
                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-house-5"></span>
                                    <h4>{{$project->title}}</h4>
                                </div>
                            </div>
                                @endforeach
                        </div>
                    </div>
                </div>

                <!-- Video Column -->
                <div class="video-column col-xl-6 col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div>
                            <figure class="image"></figure>
                            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/HOQ_GewMImU?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio -->

    <!-- Insta Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">آخر أخبارنا من حسابنا الرسمي على إنستجرام</span>
                <h2>إنستجرام</h2>
            </div>

            <div class="row">
                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="images/instagram/insta-1.jpg class="lightbox-image" data-fancybox="images"><img src="{{asset('website/images/instagram/insta-1.jpg')}}" alt=""></a></figure>
                            <div class="icon-box"><span class="icon la la-photo"></span></div>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{asset('website/images/instagram/insta-2.jpg')}}" class="lightbox-image" data-fancybox="images"><img src="{{asset('website/images/instagram/insta-2.jpg')}}" alt=""></a></figure>
                            <div class="icon-box"><span class="icon la la-photo"></span></div>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{asset('website/images/instagram/insta-3.jpg')}}" class="lightbox-image" data-fancybox="images"><img src="{{asset('website/images/instagram/insta-3.jpg')}}" alt=""></a></figure>
                            <div class="icon-box"><span class="icon la la-photo"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Insta Section -->

    <!--Popular Places Section-->
    <section class="popular-places-section-two" style="background-image: url(website/images/background/7.jpg);">
        <div class="auto-container">
            <div class="sec-title light">
                <h2>الفئات العقارية</h2>
            </div>
        </div>

        <div class="popular-places-carousel owl-carousel owl-theme">
            @foreach($categories as $category)
            <!-- Popular item two -->
            <div class="popular-item-two">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="{{$category->photo}}" alt="{{$category->name}}"></figure>
                        <div class="overlay-box">
                            <h3 class="place">{{$category->name}}</h3>
                        </div>
                    </div>
                    <div class="info-box">
                        <h4 class="category">{{$category->name}}</h4>
                    </div>
                </div>
            </div>
                @endforeach

        </div>
    </section>
    <!--End Popular Places Section-->

    <!-- Agents Section -->
    <div class="agents-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">أعضاء فريق العمل</span>
                <h2>فريقنا</h2>
            </div>

            <div class="agents-carousel owl-carousel owl-theme">
                @foreach($users as $user)
                <!-- Agent Block -->
                <div class="agent-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a><img src="{{$user->photo}}" alt="{{$user->name}}"></a></figure>
                            <ul class="social-links">
                                <li><a href="https://facebook.com/{{$user->facebook}}"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="https://instagram.com/{{$user->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://linkedin.com/in/{{$user->linkedin}}"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="https://twitter.com/{{$user->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://youtube.com/c/{{$user->youtube}}"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h4 class="name">{{$user->name}}</h4>
                            <span class="designation">{{$user->job}}</span>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </div>
    <!-- End Agents Section -->

    <!-- Call To Action -->
    <section class="call-to-action" style="background-image: url(website/images/background/2.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Title Column -->
                <div class="title-column">
                    <div class="sec-title light">
                        <span class="title">شركة نور للاستثمار:</span>
                        <h2>30 عاماً من الخبرة في مجال الانشاءات...</h2>
                    </div>
                </div>

                <!-- Button Column -->
                <div class="button-column">
                    <a href="contact/" class="theme-btn btn-style-one"><b>- تواصل معنا الآن -</b></a>
                </div>
            </div>
        </div>
    </section>
    <!--End Call To Action -->

    <!-- Contact Section -->
    <section class="call-back-section" style="background-image: url(website/images/background/12.jpg);">

        <div class="auto-container clearfix">
            <div class="column">
                <div class="sec-title">
                    @include('admin.layouts.messages.message')
                    <span class="title">نسعى دائماً لخدمتك...</span>
                    <h2>اتصل بنا الآن</h2>
                </div>
                <div class="request-form">
                    <p>من فضلك ادخل بياناتك بشكل صحيح حتى نتمكن من التواصل معك ومساعدتك.</p>
                    <form action="{{route('contact.post')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" placeholder="الاسم الكامل" required autocomplete="off">
                        </div>

                        <div class="form-group">
                            <input type="email" name="mail" placeholder="البريد الإلكتروني" required autocomplete="off">
                        </div>

                        <div class="form-group">
                            <input type="text" name="phone" placeholder="رقم الهاتف" required autocomplete="off">
                        </div>

                        <div class="form-group">
                            <input type="text" name="subject" placeholder="موضوع الرسالة" required autocomplete="off">
                        </div>

                        <div class="form-group">
                            <textarea name="message" placeholder="اكتب رسالتك هنا..." required autocomplete="off"></textarea>
                        </div>

                        <div class="form-group">
                            <button class="theme-btn btn-style-two" type="submit"><b>- ارسل رسالتك الآن -</b></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section -->
@endsection
