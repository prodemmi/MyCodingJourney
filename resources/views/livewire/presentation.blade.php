@section('title')
    My Coding Journey | Presentation
@endsection

@section('body')
    <iframe class="presentation-iframe" src="/prs/{{ $slug }}" title="{{ $title }}"></iframe>
@endsection
