@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card text-center ">
                <div>
                    @if (substr($post->post_image, 0, 4) === 'http')
                        <img src="{{ $post->post_image }}" class="card-img-top" alt="{{ $post->title }}">                    
                    @else
                        <img src="{{ asset('storage/' . $post->post_image) }}" class="card-img-top" alt="">
                    @endif
                </div>
                <div class="card-body">
                    <span class="badge text-white" 
                        @if (isset($post->category))
                            style="background-color: {{ $post->category->color }}">
                            {{ $post->category->name }}
                        @else
                            style="background-color: red">
                            -
                        @endif
                    </span>
                    <span>  
                        {{-- @if (isset($post->tags))
                            @foreach ($post->tags as $tag)
                                #{{ $tag->name }}
                            @endforeach
                        @else
                            no tag
                        @endif --}}
                        @forelse ($post->tags as $tag)
                            <span>
                                #{{ $tag->name }}
                            </span>
                        @empty
                            <span>
                                no tag
                            </span>
                        @endforelse
                    </span>
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <span>{{ $post->user->name }}</span>
                    <span>{{ $post->post_date }}</span>
                    
                    <p class="card-text">{{ $post->post_content }}</p>
                </div>
                
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-success">
                    Edit
                </a>
                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="d-inline delete-comics">
                    @csrf
                    @method('DELETE')
                    
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection