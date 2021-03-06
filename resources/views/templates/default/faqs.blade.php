@extends('templates.default.layout')
@section('title', $data['faqs']['mainCaption'])
@section('content')

<!-- Hero Start -->
<section class="bg-half bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h1 class="title"> {{ $data['faqs']['mainCaption'] }} </h1>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Hero End -->

<!-- Start Section -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-5 col-12 d-none d-md-block">
                <div class="rounded shadow p-4 sticky-bar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-8 col-md-7 col-12">
                @foreach ($data['faqs']['sections'] as $sections)


                    <div class="section-title mt-4" id="{{ $sections['id'] }}">
                        <h4>{{ $sections['caption'] }}</h4>
                    </div>
                    @foreach ($sections['faqCaptions'] as $item)



                        <div class="accordion mt-2 pt-2" id="{{ $item['id'] }}">
                            <div class="accordion-item rounded">
                                <h2 class="accordion-header" id="q-{{ $item['id'] }}">
                                    <button class="accordion-button border-0 bg-light" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#a-{{ $item['id'] }}"
                                        aria-expanded="false" aria-controls="a-{{ $item['id'] }}">
                                        {{ $item['qCaption'] }}
                                    </button>
                                </h2>
                                <div id="a-{{ $item['id'] }}" class="accordion-collapse border-0 collapse"
                                    aria-labelledby="q-{{ $item['id'] }}" data-bs-parent="#{{ $item['id'] }}">
                                    <div class="accordion-body text-muted bg-white">
                                        {{ $item['aCaption'] }}
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                @endforeach

            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->



</section>
<!--end section-->
<!-- End Section -->




@stop
