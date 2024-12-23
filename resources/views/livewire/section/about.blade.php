<div>
    <div class="container mb-5">
        <div class="row align-items-center mb-5">
            <div class="col-lg-5 col-md-6 col-12">
                @foreach ($aboutus as $item)
                <div wire:key={{$item->id}} id="carouselExampleControls{{ $item->id }}" class="carousel slide"
                    data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($item->image as $index => $gambar)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <img src="{{ asset('storage/' . $gambar) }}" class="rounded img-fluid mx-auto d-block"
                                alt="...">
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button"
                        data-bs-target="#carouselExampleControls{{ $item->id }}" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button"
                        data-bs-target="#carouselExampleControls{{ $item->id }}" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                @endforeach
                {{-- <div class="position-relative">

                    <img src="images/jingga-about.jpg" class="rounded img-fluid mx-auto d-block" alt="">

                </div> --}}
            </div>
            <!--end col-->

            <div class="col-lg-7 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="ms-lg-5 ms-md-4">
                    <div class="section-title">
                        <span class="badge rounded-pill bg-soft-primary">About us</span>
                        <h4 class="title mt-3 mb-0 text-primary">Jingga</h4>
                        @foreach ($aboutus as $item)
                        <div wire:key={{$item->id}}>
                            <h4>{{$item->title}}</h4>
                            <p>{!! str($item->description)->sanitizeHtml() !!}</p>
                            <button class="btn btn-primary text-uppercase">{{$item->tag}}</button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</div>