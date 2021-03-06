@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row justify-content-center">

                <div class="col-md-8">

                    <div class="card">

                        <div class="panel-heading">
                            <h1>My Blog</h1>
                        </div>

                        <div class="panel-body">
                            @foreach($posts as $post)
                                <article>
                                    <h3><a href="/blog/{{ $post->id }}">{{ $post->title }}</a></h3>
                                    <div class="body">{{ $post->body }}</div>
                                </article>
                            @endforeach
                        </div>

                    </div>

                </div>



        </div>

    </div>


@endsection