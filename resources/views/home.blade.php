@extends('layouts.app')

@section('content')
@include('sweetalert::alert')

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="card">
            <form action="{{ asset('createPost') }}" method="POST" >
                @csrf
                <div class="post">
                    <input type="text" name="text" id="text">
                    <button type="submit">submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="card">
            @foreach ($posts as $post)
                <div class="card">
                    {{ $post->text }}
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
