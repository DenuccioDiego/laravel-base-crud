<header>

     <div id="top_header">

          <div class="text-end container">

               <span>
                    DC POWER VISA 
               </span>

               <span class="ps-4">
                    ADDITIONAL DC SITES
               </span>

          </div>

     </div>

     <nav class="container">

          <div class="row justify-content-between align-items-center py-3">

               <div class="col-1">
                    <img src="{{asset('img/dc-logo.png')}}" alt="">
               </div>

               <div class="col-8 text-center">
                    @foreach (config('db_comics_header') as $item)

                         <span class="{{ Route::currentRouteName() === $item['name_route'] ? 'active' : '' }}">
                              <a href="{{route($item['name_route'])}}">
                                   {{$item['text']}}
                              </a>
                         </span>

                    @endforeach
               </div>

               <div class="col-2 text-end">
                    <input class="text-end"  type="text" placeholder="Search..">
               </div>
               
          </div>

     </nav>

</header>