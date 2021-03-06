@extends('templates.default.layout')
@section('title', $data['pages'][$slug]['mainCaption'])
@section('content')

    <section class="bg-half d-table w-100" style="background: url({{ $data['pages'][$slug]['coverSrc'] }});">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level title-heading">
                        <h1 class="text-white title-dark"> {{ $data['pages'][$slug]['mainCaption'] }} </h1>
                        @if ($data['pages'][$slug]['description']['show'])
                            <p class="text-white-50 para-desc mb-0 mx-auto">
                                {{ $data['pages'][$slug]['description']['caption'] }}</p>
                        @endif


                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    @foreach ($data['pages'][$slug]['components'] as $component)
        @include('templates.default.components.'.$component['file'],['data'=>$data['pages'][$slug][$component['name']]])
    @endforeach





@stop
