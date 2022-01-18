@extends('layouts.app')
@section('title')
    خدماتنا /
@endsection
@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url(website/images/background/16.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>خدماتنا</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{route('home')}}">الرئيسية</a></li>
                    <li>خدماتنا</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

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

@endsection