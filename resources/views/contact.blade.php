@extends('layouts.base')


@section('content')

<h1>contact page</h1>

    @if(count($people))

        <ul>
        @foreach($people as $persone)
        <li>{{$persone}}</li>
        @endforeach

    @endif

        </ul>
@endsection


@section('footer')

{{--<script>alert('zaba');</script>--}}

@stop