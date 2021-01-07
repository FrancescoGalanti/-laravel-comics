
       @extends('layout.main')

       @section('content')
         {{-- MAIN SECTION --}}
         <main class="wrap-home">
           {{-- HERO BACKGROUND --}}
           <section class="general-hero">
              <div class="container">
                 <img src="{{asset('images/cover-home.jpg')}}" alt="Teen go lorem">
              </div>
           </section>
           
           <section class="comics mt-3 mb-3">
             <div class="container">
                 {{-- LIST ITEMS --}}
                <ul class="comics-list">
                   @foreach($comics as $item)
                      <li>
                          <a href="">
                            <img src="{{$item['image']}}" alt="{{$item['title']}">
                            <h3>{{$item['title']}}</h3>
                          </a>
                      </li>          
                   @endforeach
                </ul>
             </div>
           </section>
         </main>
       @endsection


    

