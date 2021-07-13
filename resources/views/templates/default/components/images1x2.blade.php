@if ($data['show'])
    <div class="container my-4">
        <div class="row justify-content-center">
            @foreach ($data['items'] as $card)
                <div class="col-md-6 text-center">
                    <a href="{{ $card['image'] }}" target="_blank">
                        <img src="{{ $card['image'] }}" class="img-thumbnail" alt="">
                    </a>

                </div>
            @endforeach
        </div>
    </div>
@endif
