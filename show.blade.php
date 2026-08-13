<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $category->Name }} - محسن چمدان</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

@include('partials.navbar')

<div class="container my-5">

    <div class="text-center mb-5">
        <h2 class="fw-bold" data-fa="{{ $category->Name }}" data-en="{{ $category->Name }}">
            {{ $category->Name }}
        </h2>
        <p class="text-muted">{{ $category->Description }}</p>
    </div>

    <div class="row g-4">
        @forelse($products as $product)
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="card h-100 shadow border-0">
                    <img src="{{ asset('assets/images/' . ($product->image ?? 'no-image.jpg')) }}"
                         class="card-img-top"
                         alt="{{ $product->Name }}"
                         style="height: 220px; object-fit: cover;">

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->Name }}</h5>
                        <p class="card-text text-muted">{{ $product->brand ?? '' }}</p>

                        <h4 class="text-warning mt-auto">
                            {{ number_format($product->Price) }}
                            <span data-fa="تومان" data-en="Toman">تومان</span>
                        </h4>

                        <a href="{{ route('product.show', $product->ProductID) }}"
                           class="btn btn-warning w-100 mt-3"
                           data-fa="مشاهده محصول"
                           data-en="View Product">
                            مشاهده محصول
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center text-muted py-5">
                <h5 data-fa="هنوز محصولی در این دسته ثبت نشده است." data-en="No products in this category yet.">
                    هنوز محصولی در این دسته ثبت نشده است.
                </h5>
            </div>
        @endforelse
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>