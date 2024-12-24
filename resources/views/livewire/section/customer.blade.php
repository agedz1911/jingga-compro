<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title mb-4 pb-2 text-center">
                    <h6 class="alert bg-soft-primary alert-pills">Our Customers</h6>
                    <!-- <h4 class="title mt-3 mb-4">Our Customers</h4> -->
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row align-items-center">
            <div class="col-lg-2 col-md-2">
                <h6 class="text-muted mb-0">Trusted by over 100 Companies</h6>
            </div>
            <!--end col-->

            <div class="col-lg-10 col-md-10 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="rounded shadow bg-white-50 p-4">
                    <div class="row justify-content-center">
                        <div class="tiny-four-item py-3 px-0">
                            @foreach ($customers as $customer)
                            <div wire:key={{$customer->id}} class="tiny-slide" >
                                <a href="{{$customer->url ? $customer->url : 'javascript:void(0)' }}"
                                    target="{{$customer->url ? '_blank' : '_self'}}" class="customers logo"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="{{$customer->company}}">
                                    <img src="{{ asset('storage/' . $customer->image) }}" class="avatar avatar-medium"
                                        alt="{{$customer->company}}">
                                </a>
                            </div>
                            @endforeach
                        </div>

                    </div>
                    <!--end row-->
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</div>