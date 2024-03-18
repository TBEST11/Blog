
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
    @foreach ($comments as $item)
        
            <div>

                <h4 class="text-gray-700 font-bold text-5xl pb-4 " >
                    {{$item->comment}}

                </h4>
                <span class="text-gray-500">
                    By <span class="font-bold italic text-gray-800"> {{$item->user->name}}</span>, Created On {{date('js M Y', strtotime($comment->created_at))}}
                </span>
               
                @if (isset(Auth::user()->id) && Auth::user()->id==$item->user_id)
                <div class="row">
                    <a href="{{route('comment.edit', $item->id)}}" class="btn btn-small btn-secondary col">Edit</a>
                    <form action="{{ route('comment.destroy', $item->id) }}" method="POST" class="col">
                      <button class="btn btn-danger">Delete</button>
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                  </form>
                  </div>
                    
                @endif
            </div>

        </div>
    @endforeach
    
@endsection