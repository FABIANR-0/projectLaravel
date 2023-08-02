@extends('template')
@section('content')
    <div class="bg-gray-900 px-20 py-16 rounded-lg mb-8 relative overflow-hidden">
       <span class="text-xs uppercase text-gray-700 bg-gray-400 rounded-full px-2 py-1">Programación</span>
        <h1 class="text-3xl text-white mt-4">Blog</h1>
        <p class="text-sm text-gray-400 mt-2">Proyecto de desarrollo web para profesionales</p>
        <img src="{{asset('images/dev.png')}}" class="absolute -right-20 -bottom-20 opacity-20">
    </div>
    <div class="px-4">
        <h1 class="text-2xl mb-8 text-gray-900">Contenido técnico</h1>
        <div class="grid grid-cols-1 gap-4 mb-4">
            @foreach($posts as $post)
                <a href="{{route('post',$post->slug)}}" class="bg-gray-100  rounded-lg px-6 py-4">
                    <p class="text-xs flex items-center gap-2">
                        <span class="uppercase text-gray-700 bg-gray-200 rounded-full px-2 py-1"> Tutorial</span>
                        <span> {{$post->created_at->format('d/m/Y')}}</span>
                    </p>
                    <h2 class="text-lg text-gray-900 mt-2">{{$post->title}}</h2>
                    <div class="text-xs text-gray-900 opacity-75 flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
                        </svg>

                        {{$post->user->name}}
                    </div>
                </a>
            @endforeach
        </div>
        {{$posts->links()}}
    </div>

@endsection

