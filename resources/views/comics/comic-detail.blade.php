@extends('layout.main')

@section('content')
  <main class="comic-detail">
     <section class="general-hero" style="background-image: url({{$comic['image-hero']}});">
        <div class="container">
            <img src="{{$comic['image-cover']}}" alt="{{$comic['title']}}">
        </div>
     </section>

     <section class="comics mt-3 mb-3">
       <div class="container">
            <h1>{{$comic['title']}}</h1>
           <div class="price">{{$comic['price']}}</div>
           <div class="text">{!! $comic['body'] !!}</div>
       </div>
     </section>



  </main>
@endsection