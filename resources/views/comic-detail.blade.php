@extends('layout.main')

@section('content')
  <main class="comic-detail">
     <section class="general-hero">
        <div class="container">
            <img src="{{asset('images/cover-home.jpg')}}" alt="teen go Lorem">
        </div>
     </section>

     <section class="comics mt-3 mb-3">
       <div class="container">
           <div class="price">{{$comic['price']}}</div>
           <div class="text">{!! $comic['body'] !!}</div>
       </div>
     </section>



  </main>
@endsection