@section('title')
    My Coding Journey | Presentation
@endsection

@section('body')
    <iframe class="presentation-iframe" src="https://mycodingjourney.iran.liara.run/prs/{{ $slug }}" title="{{ $title }}"></iframe>
@endsection
