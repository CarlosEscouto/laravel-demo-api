@extends('layouts.app')

@section('content')
<div class="container">
    @if(auth('api')->check())
        <h1>hjkhkj</h1>
    @endif
</div>
@endsection
