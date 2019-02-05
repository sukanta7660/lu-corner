@section('msg')
    @if(Session::has('msg'))
        {!! Session::get('msg')  !!}
    @endif
@endsection