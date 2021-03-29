@extends('layouts/default')

@section('title', 'Mon super blog')

@section('content')
<section id="about" class="mt-5">
    <div class="container">

        <header class="section-header">
            <h3>Articles</h3>
            <p>Tous les articles du blog</p>
        </header>

        <div class="row about-cols">
            @foreach ($posts as $post)
            <div class="col-md-4">
                <div class="about-col">
                    <h2 class="title pt-3"><a href="{{ route('show', ['post' => $post->id])}}">{{ $post->title }}</a></h2>
                    <p>{{ $post->body }}</p>
                    <div class="text-right">
                        <em style="color: #18d26e; font-size: 12px; padding: 15px; font-weight: bold;">Published At: {{ date('Y M d H:i:s', strtotime($post->published_at)) }}</em>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endsection