<script src="https://cdn.tailwindcss.com"></script>

@extends('layout')
@section('content')
{{-- @php --}}
{{-- @endphp --}}

<h1 class="text-3xl">
    {{$heading}}
</h1>
<div
                class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
            >
@if(count($listings)==0)
<p class="text-red-400">no listings</p>
@endif
@foreach ($listings as $listing)
                <!-- Item 1 -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="{{asset('images/acme')}}.png"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl">
                                <a href="show.html">{{$listing->title}}</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
                            <ul class="flex">
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Laravel</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">API</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Backend</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Vue</a>
                                </li>
                            </ul>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                            </div>
                        </div>
                    </div>
                </div>
@endforeach
</div>
@endsection