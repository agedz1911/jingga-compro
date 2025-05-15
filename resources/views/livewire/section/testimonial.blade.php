<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="section-title mb-4 pb-2 text-center">
                <h6 class="alert bg-soft-primary alert-pills">Testimonials</h6>
                <!-- <p class="text-muted para-desc mx-auto mb-0">The Latest Updates <span class="text-primary fw-bold">Jingga</span> Projects</p> -->
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row">
        <div class="col-12 mt-4">
            <div class="tiny-three-item">
                @foreach ($testimonials as $testi)
                <div class="tiny-slide text-center">
                    <div class="client-testi rounded shadow m-2 p-4">
                        <img src="{{ asset('storage/'. $testi->logo)}}" class="img-fluid mx-auto" alt="">
                        <p class="text-muted mt-4">" {{$testi->description}} "</p>
                        <h6 class="text-primary">- {{$testi->name}}</h6>
                    </div>
                </div>
                @endforeach

            </div>
        </div><!--end col-->
    </div><!--end row-->
</div><!--end container-->