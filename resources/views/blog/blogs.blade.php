    
@extends('layouts.app')

@section('content')
<div class="jumbotron text-center mt-8">
    <h1>Tbest Blog</h1>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('TBest Blogs') }}</div>

                <div class="card-body">
                    @if (session()->has('message'))
                    <div class=" w-4/5 m-auto mt-10 pl-2">
                        <p class=" w-1/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                            {{session()->get('message')}}
                
                        </p>
                
                    </div>
                    @endif
                    @if(Auth::check())
                    <div class="pt-15 w-4/5 m-auto">
                        <a href="/blog/create" class=" bg-blue-500 uppercase bg-transparent text-grar-100 text-xs font-extrabold py-3 px-3 rounded-3xl"> 
                            Create Post
                        </a>
                
                    </div>
                    @endif
                    @foreach ($blogs as $blog)
                        
                
                        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
                            <div>
                                <img src="{{ asset('uploads/'. $blog->image) }}" width="1000" alt="image">
                            </div>
                            <div>
                
                                <h2 class="text-gray-700 font-bold text-5xl pb-4 " >
                                    {{$blog->title}}
                
                                </h2>
                                <span class="text-gray-500">
                                    By <span class="font-bold italic text-gray-800"> {{$blog->user->name}}</span>, Created On {{date('js M Y', strtotime($blog->created_at))}}
                                </span>
                                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                                    {{$blog->content}}
                                </p>
                                <a href="/blog/{{$blog->slug}}" class=" uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                                    keep Reading
                                </a>
                                @if (isset(Auth::user()->id) && Auth::user()->id==$blog->user_id)
                                <span class="float-right">
                                    <a href="/blog/{{$blog->slug}}/edit" class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                                        Edit
                                    </a>
                
                                </span>
                                <span class="float-right">
                                    <form action="/blog/{{$blog->slug}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class=" text-red-500 pr-3" type="submit">Delete</button>
                                    </form>
                
                                </span>
                                    
                                @endif
                            </div>
                            <div>
                                <a href="{{route('comment.create')}}" class="btn btn-small btn-secondary col">Comment</a>
                            </div>
                            {{-- @include('comment/comments') --}}
                            
                
                        </div>
                    @endforeach
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


