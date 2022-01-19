
@extends('layouts.app')

@section('page-title', 'comic page')

@section('content')

     <section id="one_card_section">

          <div id="top_bar">
               <div class="container">
                    
               </div>
          </div>
          
          <div class="container-card pt-4 position-relative">

               
                         
               <img class="position-absolute" src="{{$comic->thumb}}" alt="">
                              
               

               <div class="row">

                    <div class="col-8">
                         <h2 class="fw-bolder">
                              {{$comic->title}}
                         </h2>
                         <div class="price_bar row gx-0 border-bottom color_border fw-bold my-3">

                              <div class="row col-9 border-end p-3 color_border">

                                   <div class="col-6">
                                            <span class="color_price_info">U.S.Price:</span>
                                            <span class="text-white">
                                                 ${{$comic->price}}
                                             </span> 
                                   </div>

                                   <div class="col-6 text-end">
                                        <span class="color_price_info">
                                             AVALIABLE
                                        </span>
                                        
                                   </div>

                              </div>
                                   
                              <span class="text-white col-3 text-center p-3">
                                        Check Availability
                              </span>
                         </div>
                         <p>
                              {{$comic->description}}
                         </p>
                    </div>

                    <div class="col-4 text-end">
                         <span>
                              ADVERTISEMENT
                         </span>
                         <img src="../img/adv.jpg" alt="">
                    </div>

               </div>
          </div>

          <div id="details_comics" class="mt-4 pt-2 border-top">
               <div class="container-card pt-2">
                    <div class="row gx-5">

                         <div class="col-6">
                              <h4 class="mb-4 fw-bolder">Talent</h4>
                              <div class="row gx-0 border-top border-bottom p-2">
                                   <div class="col-2">
                                        <span class="color_info">Art by:</span>
                                   </div>
                                   <div class="col-10 ps-5 color_talent_info">
                                        <span>
                                             @for ($i = 0; $i < 10; $i++ )

                                                  artista n{{ $i }}

                                             @endfor
                                        </span>
                                   </div>
                              </div>
                              <div class="row gx-0 border-top border-bottom p-2">
                                   <div class="col-2">
                                        <span class="color_info">
                                             Written by:
                                        </span>
                                   </div>
                                   <div class="col-10 ps-5 color_talent_info">
                                   @for ($i = 0; $i < 10; $i++ )

                                        artista n{{ $i }}

                                   @endfor
                                   </div>
                              </div>
                         </div>

                         <div class="col-6">
                              <h4 class="mb-4 fw-bolder">Specs</h4>

                              <div class="row gx-2 border-top border-bottom p-2">
                                   <div class="col-3">
                                        <span class="color_info">Series:</span>
                                   </div>
                                   <div class="col-9 ps-4 color_talent_info">
                                        <span>
                                             {{$comic->series}}
                                        </span>
                                   </div>
                              </div>

                              <div class="row gx-2 border-top border-bottom p-2">
                                   <div class="col-3">
                                        <span class="color_info">U.S. Price</span>
                                   </div>
                                   <div class="col-9 ps-4">
                                        <span>
                                             ${{$comic->price}}
                                        </span>
                                   </div>
                              </div>

                              <div class="row gx-2 border-top border-bottom p-2">
                                   <div class="col-3">
                                        <span class="color_info">On Sale Date:</span>
                                   </div>

                                   <div class="col-9 ps-4">
                                        <span>
                                             2022/12/12
                                        </span>
                                   </div>
                              </div>

                         </div>


                    </div>
               </div>
          
          </div>

     </section>


@endsection