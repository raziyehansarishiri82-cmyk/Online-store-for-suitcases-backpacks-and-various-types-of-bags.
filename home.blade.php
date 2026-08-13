<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- SEO Primary Meta --}}
    <title>محسن چمدان | خرید چمدان، کوله‌پشتی و کیف مسافرتی با بهترین قیمت</title>
    <meta name="description" content="فروشگاه محسن چمدان؛ تخصصی‌ترین مرکز فروش چمدان مسافرتی، کوله‌پشتی و کیف دستی. جدیدترین مدل‌ها با کیفیت عالی و قیمت مناسب. ارسال به سراسر کشور.">
    <meta name="keywords" content="چمدان, خرید چمدان, کوله‌پشتی, کیف مسافرتی, محسن چمدان, چمدان مسافرتی, کیف دستی, فروشگاه چمدان">
    <meta name="author" content="محسن چمدان">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    
    {{-- Canonical --}}
    <link rel="canonical" href="{{ url('/') }}">
    
    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="محسن چمدان | خرید چمدان و کوله‌پشتی">
    <meta property="og:description" content="فروشگاه تخصصی چمدان، کوله‌پشتی و کیف مسافرتی با بهترین قیمت و کیفیت. جدیدترین محصولات را همین حالا ببینید.">
    <meta property="og:image" content="{{ asset('assets/images/1.jpg') }}">
    <meta property="og:locale" content="fa_IR">
    <meta property="og:site_name" content="محسن چمدان">
    
    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="محسن چمدان | خرید چمدان و کوله‌پشتی">
    <meta name="twitter:description" content="فروشگاه تخصصی چمدان، کوله‌پشتی و کیف مسافرتی با بهترین قیمت و کیفیت.">
    <meta name="twitter:image" content="{{ asset('assets/images/1.jpg') }}">
    
    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    
    {{-- Bootstrap & Custom CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
    {{-- ==================== Structured Data (Schema) ==================== --}}
    
    {{-- 1. Store Schema --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Store",
        "name": "محسن چمدان",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('assets/images/logo.png') }}",
        "description": "فروشگاه تخصصی چمدان، کوله‌پشتی و کیف مسافرتی",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "IR"
        },
        "priceRange": "$$"
    }
    </script>

    {{-- 2. Product List Schema (ItemList) --}}
    @if(isset($products) && $products->count() > 0)
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ItemList",
        "name": "جدیدترین محصولات محسن چمدان",
        "itemListElement": [
            @foreach($products as $index => $product)
            {
                "@type": "ListItem",
                "position": {{ $index + 1 }},
                "item": {
                    "@type": "Product",
                    "name": "{{ $product->Name }}",
                    "image": "{{ asset('assets/images/' . ($product->image ?? 'no-image.jpg')) }}",
                    "description": "{{ $product->Name }} - فروشگاه محسن چمدان",
                    "sku": "{{ $product->ProductID }}",
                    "brand": {
                        "@type": "Brand",
                        "name": "{{ $product->brand ?? 'محسن چمدان' }}"
                    },
                    "offers": {
                        "@type": "Offer",
                        "url": "{{ url('product/' . $product->ProductID) }}",
                        "priceCurrency": "IRR",
                        "price": "{{ $product->Price }}",
                        "availability": "https://schema.org/InStock",
                        "seller": {
                            "@type": "Organization",
                            "name": "محسن چمدان"
                        }
                    }
                }
            }@if(!$loop->last),@endif
            @endforeach
        ]
    }
    </script>
    @endif

    {{-- 3. FAQ Schema --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "چمدان‌های محسن چمدان گارانتی دارند؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "بله، تمامی چمدان‌ها و محصولات فروشگاه محسن چمدان دارای گارانتی معتبر هستند. مدت گارانتی بسته به مدل محصول متفاوت است."
                }
            },
            {
                "@type": "Question",
                "name": "هزینه ارسال چمدان چقدر است؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "هزینه ارسال بسته به وزن و مقصد متفاوت است. برای سفارش‌های بالای مبلغ مشخص، ارسال رایگان در نظر گرفته می‌شود. جزئیات دقیق در صفحه تسویه حساب نمایش داده می‌شود."
                }
            },
            {
                "@type": "Question",
                "name": "آیا امکان تعویض یا مرجوع کردن محصول وجود دارد؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "بله، در صورت وجود مشکل یا عدم رضایت، تا ۷ روز پس از دریافت کالا امکان تعویض یا مرجوع کردن محصول وجود دارد (به شرط سالم بودن کالا و بسته‌بندی)."
                }
            },
            {
                "@type": "Question",
                "name": "چمدان‌ها در چه سایزهایی موجود هستند؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "چمدان‌ها در سایزهای کوچک (کابین)، متوسط و بزرگ موجود هستند و برای انواع سفرهای داخلی و خارجی مناسب می‌باشند."
                }
            },
            {
                "@type": "Question",
                "name": "آیا کوله‌پشتی‌ها مناسب مدرسه و دانشگاه هستند؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "بله، کوله‌پشتی‌های فروشگاه محسن چمدان در مدل‌های مختلف مناسب مدرسه، دانشگاه و سفر طراحی شده‌اند و دارای فضای کافی و بندهای راحت هستند."
                }
            }
        ]
    }
    </script>
</head>
<body>
{{-- Navbar --}}
@include('partials.navbar')

<main>
    {{-- اسلایدر --}}
    <div class="container mt-4">
        <div id="slider" class="carousel slide rounded overflow-hidden shadow" data-bs-ride="carousel" aria-label="اسلایدر تصاویر محصولات">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/1.jpg') }}" 
                         class="d-block w-100" 
                         style="height:500px;object-fit:cover;"
                         alt="چمدان مسافرتی باکیفیت - فروشگاه محسن چمدان"
                         width="1200" height="500"
                         loading="eager">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/2.jpg') }}" 
                         class="d-block w-100" 
                         style="height:500px;object-fit:cover;"
                         alt="کوله‌پشتی و کیف مسافرتی - محسن چمدان"
                         width="1200" height="500"
                         loading="lazy">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/3.jpg') }}" 
                         class="d-block w-100" 
                         style="height:500px;object-fit:cover;"
                         alt="جدیدترین مدل‌های چمدان و کیف - محسن چمدان"
                         width="1200" height="500"
                         loading="lazy">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev" aria-label="اسلاید قبلی">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next" aria-label="اسلاید بعدی">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>

    {{-- جدیدترین محصولات --}}
    <section class="container my-5" aria-labelledby="latest-products-heading">
        <div class="text-center mb-5">
            <h1 id="latest-products-heading" class="fw-bold" data-fa="جدیدترین محصولات" data-en="Latest Products">
                جدیدترین محصولات
            </h1>
            <p class="text-muted" data-fa="جدیدترین محصولات فروشگاه محسن چمدان" data-en="Latest products from Mohsen Suitcase Store">
                جدیدترین محصولات فروشگاه محسن چمدان
            </p>
        </div>

        <div class="row g-4">
            @forelse($products as $product)
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <article class="card h-100 shadow border-0">
                        <img src="{{ asset('assets/images/' . ($product->image ?? 'no-image.jpg')) }}"
                             class="card-img-top"
                             alt="{{ $product->Name }} - خرید از محسن چمدان"
                             loading="lazy"
                             width="400" height="300">
                        <div class="card-body d-flex flex-column">
                            <h2 class="card-title h5">{{ $product->Name }}</h2>
                            <p class="card-text text-muted">{{ $product->brand ?? '' }}</p>
                            <p class="text-warning mt-auto mb-0 fs-4 fw-bold">
                                {{ number_format($product->Price) }}
                                <span data-fa="تومان" data-en="Toman">تومان</span>
                            </p>
                            <a href="{{ url('product/' . $product->ProductID) }}"
                               class="btn btn-warning w-100 mt-3"
                               data-fa="مشاهده محصول"
                               data-en="View Product"
                               title="مشاهده جزئیات {{ $product->Name }}">
                                مشاهده محصول
                            </a>
                        </div>
                    </article>
                </div>
            @empty
                <div class="col-12 text-center text-muted"
                     data-fa="هنوز محصولی ثبت نشده است."
                     data-en="No products have been added yet.">
                    هنوز محصولی ثبت نشده است.
                </div>
            @endforelse
        </div>
    </section>

    {{-- دسته‌بندی‌ها --}}
    <section class="container my-5" aria-labelledby="categories-heading">
        <h2 id="categories-heading" class="visually-hidden">دسته‌بندی محصولات</h2>
        <div class="row g-4">
            {{-- چمدان --}}
            <div class="col-lg-4 col-md-6 col-12">
                <a href="{{ url('category/1') }}" class="text-decoration-none text-dark" title="مشاهده انواع چمدان مسافرتی">
                    <article class="card border-0 shadow h-100">
                        <img src="{{ asset('assets/images/p1.jpg') }}" 
                             class="card-img-top" 
                             alt="انواع چمدان مسافرتی در سایزهای مختلف - محسن چمدان"
                             loading="lazy"
                             width="400" height="250">
                        <div class="card-body text-center">
                            <h3 class="fw-bold h4" data-fa="چمدان" data-en="Suitcases">چمدان</h3>
                            <p class="text-muted" data-fa="انواع چمدان مسافرتی در سایزهای مختلف" data-en="Various travel suitcases in different sizes">
                                انواع چمدان مسافرتی در سایزهای مختلف
                            </p>
                            <span class="btn btn-warning" data-fa="مشاهده محصولات" data-en="View Products">مشاهده محصولات</span>
                        </div>
                    </article>
                </a>
            </div>

            {{-- کوله پشتی --}}
            <div class="col-lg-4 col-md-6 col-12">
                <a href="{{ url('category/2') }}" class="text-decoration-none text-dark" title="مشاهده کوله‌پشتی‌های مدرسه، دانشگاه و سفر">
                    <article class="card border-0 shadow h-100">
                        <img src="{{ asset('assets/images/p2.jpg') }}" 
                             class="card-img-top" 
                             alt="کوله‌پشتی مناسب مدرسه، دانشگاه و سفر - محسن چمدان"
                             loading="lazy"
                             width="400" height="250">
                        <div class="card-body text-center">
                            <h3 class="fw-bold h4" data-fa="کوله پشتی" data-en="Backpacks">کوله پشتی</h3>
                            <p class="text-muted" data-fa="مناسب مدرسه، دانشگاه و سفر" data-en="Suitable for school, university and travel">
                                مناسب مدرسه، دانشگاه و سفر
                            </p>
                            <span class="btn btn-warning" data-fa="مشاهده محصولات" data-en="View Products">مشاهده محصولات</span>
                        </div>
                    </article>
                </a>
            </div>

            {{-- کیف دستی --}}
            <div class="col-lg-4 col-md-6 col-12">
                <a href="{{ url('category/3') }}" class="text-decoration-none text-dark" title="مشاهده کیف‌های دستی شیک و اسپورت">
                    <article class="card border-0 shadow h-100">
                        <img src="{{ asset('assets/images/p3.jpg') }}" 
                             class="card-img-top" 
                             alt="کیف دستی شیک و اسپورت - محسن چمدان"
                             loading="lazy"
                             width="400" height="250">
                        <div class="card-body text-center">
                            <h3 class="fw-bold h4" data-fa="کیف دستی" data-en="Handbags">کیف دستی</h3>
                            <p class="text-muted" data-fa="کیف‌های شیک و اسپورت" data-en="Stylish and sporty bags">
                                کیف‌های شیک و اسپورت
                            </p>
                            <span class="btn btn-warning" data-fa="مشاهده محصولات" data-en="View Products">مشاهده محصولات</span>
                        </div>
                    </article>
                </a>
            </div>
        </div>
    </section>

    {{-- بخش سؤالات متداول (FAQ) --}}
    <section class="container my-5" aria-labelledby="faq-heading">
        <div class="text-center mb-5">
            <h2 id="faq-heading" class="fw-bold">سؤالات متداول</h2>
            <p class="text-muted">پاسخ به پرتکرارترین سؤالات مشتریان محسن چمدان</p>
        </div>

        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                        چمدان‌های محسن چمدان گارانتی دارند؟
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        بله، تمامی چمدان‌ها و محصولات فروشگاه محسن چمدان دارای گارانتی معتبر هستند. مدت گارانتی بسته به مدل محصول متفاوت است.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                        هزینه ارسال چمدان چقدر است؟
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        هزینه ارسال بسته به وزن و مقصد متفاوت است. برای سفارش‌های بالای مبلغ مشخص، ارسال رایگان در نظر گرفته می‌شود. جزئیات دقیق در صفحه تسویه حساب نمایش داده می‌شود.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                        آیا امکان تعویض یا مرجوع کردن محصول وجود دارد؟
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        بله، در صورت وجود مشکل یا عدم رضایت، تا ۷ روز پس از دریافت کالا امکان تعویض یا مرجوع کردن محصول وجود دارد (به شرط سالم بودن کالا و بسته‌بندی).
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                        چمدان‌ها در چه سایزهایی موجود هستند؟
                    </button>
                </h3>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        چمدان‌ها در سایزهای کوچک (کابین)، متوسط و بزرگ موجود هستند و برای انواع سفرهای داخلی و خارجی مناسب می‌باشند.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                        آیا کوله‌پشتی‌ها مناسب مدرسه و دانشگاه هستند؟
                    </button>
                </h3>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        بله، کوله‌پشتی‌های فروشگاه محسن چمدان در مدل‌های مختلف مناسب مدرسه، دانشگاه و سفر طراحی شده‌اند و دارای فضای کافی و بندهای راحت هستند.
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>