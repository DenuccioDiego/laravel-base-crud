<div class="col-2">

     <a href="{{ route('comic', $comic->id) }}">

          <div class="">

               <img class="mb-3" src="{{ $comic->thumb }}" alt="">
               <span class="text-white mt-5">
                    {{ $comic->series }}
               </span>
               
          </div>
     </a>   
</div>