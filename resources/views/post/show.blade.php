@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row justify-content-center">

                <div class="col-md-8">

                    <div class="card">

                        <div class="panel-heading">
                            <h1>{{ $post->title }}</h1>
                        </div>

                        <div class="panel-body">
                            <article>
                                <div class="body">{{ $post->body }}</div>
                            </article>
                        </div>

                    </div>

                </div>

            </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @foreach ($post->comment as $comment)
                        <div class="panel-heading"><h3>Comment</h3></div>
                        <div class="panel-heading">Updated At: <b>{{ $comment->created_at->diffForHumans() }}</b></div>
                        <div class="panel-body">
                            <article>
                                <div class="body">{{ $comment->body }}</div>
                            </article>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>


    </div>



@endsection