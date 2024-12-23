<div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide d-flex align-items-center overflow-hidden">
                @foreach ($sliders as $slider)
                <h1>{{$slider->title}}</h1>
                {{-- <div class="slide-inner slide-bg-image d-flex align-items-center" style="background: center center;"
                    data-background="images/slider/3.jpg">
                    <div class="bg-overlay"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="title-heading text-center">
                                    <h1 class="heading text-primary title-dark mb-4">{{$slider->title}}</h1>
                                    <p class="para-desc mx-auto text-white title-dark">{{$slider->description}}</p>

                                    <div class="mt-4 pt-2">
                                        <a href="#about-us" class="btn btn-primary">{{$slider->tage}}</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div> --}}
                @endforeach
            </div> <!-- end swiper-slide -->
        </div>
        <!-- end swiper-wrapper -->

        <!-- swipper controls -->
        <!-- <div class="swiper-pagination"></div> -->
        <div class="swiper-button-next border rounded-circle text-center"></div>
        <div class="swiper-button-prev border rounded-circle text-center"></div>
    </div>
    <!--end container-->



</div>