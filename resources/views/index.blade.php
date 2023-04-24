@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Домашняя страница</h1>

        <section class="articles">
            @foreach($posts as $post)
                <article>
                    <div class="article-wrapper">
                        <figure>
                            <img src="https://picsum.photos/id/1011/800/450" alt="" />
                        </figure>
                        <div class="article-body">
                            <h2>{{ $post->title }}</h2>
                            <p>
                                {{$post->description}}
                            </p>
                            <a href="/post/{{ $post->id }}" class="read-more">
                                Read more <span class="sr-only">about this is some title</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach

        </section>
    </div>
@endsection
