<div>
     <x-menu.navigation />

    <section class="swiper-slider-hero position-relative d-block vh-100" id="home">
        <livewire:section.slider />
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="features-absolute rounded bg-white shadow">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 my-4">
                                <div class="row">
                                    <div class=" col-12">
                                        <div class="d-flex features justify-content-center align-items-center p-4">
                                            <div class="icon text-center rounded-circle text-primary me-3 ">
                                                <i class="uil uil-crosshair align-middle h4 mb-0"></i>
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="title">We are not the First, but we strive for the BEST</h4>
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class=" col-12">
                                        <div class="d-flex features p-4 justify-content-center align-items-center">
                                            <div class="icon text-center rounded-circle text-primary me-3">
                                                <i class="uil uil-constructor align-middle h4 mb-0"></i>
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="title"> Experiences in designing and building tasteful special and custom booths</h4>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end col-->

                            <div class="col-lg-4 d-none d-lg-block position-relative">
                                <img src="images/slider/expo.png" class="img-fluid mx-auto d-block construction-img" alt="">
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end col-->

                <div class="col-12 mt-4 pt-2 text-center">
                    <p class="text-muted mb-0">Our list of services does not end here. <a href="#contact-us" class="text-primary h6">Click here</a>, and We’ll come up with more solution</p>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->

    <section class="section" id="about-us">
        <livewire:section.about />
    </section>

    <section class="section bg-cta" style="background: url('images/bg02.jpg') center center;" id="flow">
        <div class="bg-overlay-dark"></div>
        <livewire:section.flow />
    </section>

    <section class="section bg-light" id="projects">
        <livewire:section.project />
    </section>

    <section class="section" id="customers">
        <livewire:section.customer />
    </section>

    <section class="section bg-light" id="news">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title mb-4 pb-2 text-center">
                        <h6 class="alert bg-soft-primary alert-pills">Jingga Updates</h6>
                        <p class="text-muted para-desc mx-auto mb-0">The Lates News <span class="text-primary fw-bold">Jingga</span> Updates</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                @foreach ($newsUpdates as $news)
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="{{asset('storage/' . $news->image)}}" class="card-img-top rounded-top" alt="...">
                            <div class="overlay rounded-top bg-dark"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="javascript:void(0)" class="card-title title text-dark">{{$news->title}}</a></h5>
                            <div class="post-meta  mt-3">
                                <p>{!! str(str($news->description)->limit(40))->markdown()->sanitizeHtml() !!}</p>
                                <a href="{{url('news-update', ['id' => $news->id])}}" class="text-muted readmore float-end">Read More <i class="uil uil-angle-right-b"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="text-light date"><i class="uil uil-calendar-alt"></i> {{$news->created_at->diffForHumans()}}</small>
                            <small class="text-light user d-block"><i class="uil uil-map-marker"></i> {{$news->location}}</small>
                        </div>
                    </div>
                </div><!--end col-->

                @endforeach
            </div><!--end row-->
            <div class="row justify-content-center mt-5">
                <div class="col-12">
                    <div class="section-title mb-4 pb-2 text-center">
                        <a href="{{route('news-update')}}" class="btn btn-primary">Read More Updates</a>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </section>

    <section class="section mb-5" id="testimonial">
        <livewire:section.testimonial />
    </section>

    <footer id="contact-us">
        <livewire:section.contact-us />

    </footer>


</div>