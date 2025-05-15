<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="section-title mb-4 pb-2 text-center">
                <span class="alert alert-pills bg-soft-primary">Our Projects</span>
                <p class="text-muted mx-auto para-desc mt-3 mb-0">Our listing <span
                        class="text-primary fw-bold">Jingga</span> projects </p>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
    <div class="container mt-5">
        <div class="row">

            <div class="col-12 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="row">
                    <div class="col-12 filters-group-wrap">
                        <div class="filters-group">
                            <ul class="container-filter list-inline mb-0 filter-options">
                                <li class="list-inline-item categories-name border text-dark rounded active"
                                    data-group="all">All</li>
                                @foreach ($years as $item)
                                <li class="list-inline-item categories-name border text-dark rounded"
                                    data-group="{{ $item }}">
                                    {{$item}}</li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div id="grid" class="row">
                    @foreach($projects as $project)
                    <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["{{ $project->event_year }}"]'>
                        <div class="card border-0 work-container work-classic shadow overflow-hidden">
                            <div class="card-body work-container work-modern p-0">
                                <div class="portfolio-box-img position-relative overflow-hidden">
                                    <div id="galleryControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach ($project->gallery as $index => $image)
                                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                <img src="{{ asset('storage/' . $image) }}" class="d-block w-100" alt="...">
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="icons text-center">
                                        @foreach ($project->gallery as $image)
                                        <a href="storage/{{$image}}"
                                            class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox">
                                            <i data-feather="camera" class="fea icon-sm image-icon"></i>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h6 class="text-muted tag mb-0">{{ $project->event_year }}</h6>
                                    <h5 class="text-dark">{{ $project->event_title }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    @endforeach

                    {{-- <div class="col-lg-4 col-md-6 mt-4 pt-2 picture-item" data-groups='["2019"]'>
                        <div class="section-title sticky-bar position-sticky">
                            <span class="badge rounded-pill bg-soft-primary">2019</span>
                            <h6 class="mt-3 mb-2">Official Contractor</h6>
                            <ul class="text-muted mb-0">
                                <li>ISPE Indonesia Affiliate Conference 2019</li>
                                <li>Pertemuan Ilmiah Tahunan Perhimpunan Dokter Spesialis Bedah
                                    Indonesia Ke-23 (PIT IKABI-23)
                                </li>
                                <li>The 21st International Meeting on Respinatory Care Indonesia 2019</li>
                                <li>The 24th ASEAN Federation Cardiology Congress (AFCC) in conjunction with 28th ASMIHA
                                </li>
                            </ul>
                            <div class="mt-4 d-none d-md-block">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#project2019"
                                    class="btn btn-soft-primary">See More <i data-feather="arrow-right"
                                        class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 pt-2 picture-item" data-groups='["2020"]'>
                        <div class="section-title sticky-bar position-sticky">
                            <span class="badge rounded-pill bg-soft-primary">2020</span>
                            <h6 class="mt-3 mb-2">Official Contractor <br>Virtual Event</h6>
                            <ul class="text-muted mb-0">
                                <li>Perkumpulan Dokter Intervensi Nyeri Indonesia 2020 (PERDINI)</li>
                                <li>the 19th Annual Scientific Meeting of Indonesian Physical Medicine & Rehabilitation
                                    Association (PIT XIX PERDOSRI)</li>
                                <li>Perhimpunan Dokter Spesialis Kedokteran Jiwa Indonesia 2020 (PDSKJI)</li>
                            </ul>
                            <div class="mt-4 d-none d-md-block">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#project2020"
                                    class="btn btn-soft-primary">See More <i data-feather="arrow-right"
                                        class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 pt-2 picture-item" data-groups='["2021"]'>
                        <div class="section-title sticky-bar position-sticky">
                            <span class="badge rounded-pill bg-soft-primary">2021</span>
                            <h6 class="mt-3 mb-2">Official Contractor <br>Virtual Event</h6>
                            <ul class="text-muted mb-0">
                                <li>Pertemuan Ilmiah Tahunan Perhimpunan Spesialis Bedah Saraf
                                    Indonesia XXIV (PIT Perspebsi XXIV)
                                </li>
                                <li>The 5th International Society on minimally in vassive Techniques in
                                    Neurosurgery (ISMINSS)
                                </li>
                                <li>44th Annual Scientific Meeting of Indonesian Urological Association (ASMIUA)</li>
                            </ul>
                            <div class="mt-4 d-none d-md-block">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#project2021"
                                    class="btn btn-soft-primary">See More <i data-feather="arrow-right"
                                        class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 pt-2 picture-item" data-groups='["2022"]'>
                        <div class="section-title sticky-bar position-sticky">
                            <span class="badge rounded-pill bg-soft-primary">2022</span>
                            <h6 class="mt-3 mb-2">Official Contractor</h6>
                            <ul class="text-muted mb-0">
                                <li>Malang Continuing Urology Education 2022 (MCUE)
                                </li>
                                <li>Spine20
                                </li>
                                <li>Perhimpunan Dokter Spesialis Bedah Plastik Rekontruksi dan Estetik
                                    Indonesia 2022 (PERAPI)</li>
                                <li>Perhimpunan Spesialis Bedah Saraf Indonesia (PERSPEBSI)</li>
                            </ul>
                            <div class="mt-4 d-none d-md-block">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#project2022"
                                    class="btn btn-soft-primary">See More <i data-feather="arrow-right"
                                        class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 pt-2 picture-item" data-groups='["2023"]'>
                        <div class="section-title sticky-bar position-sticky">
                            <span class="badge rounded-pill bg-soft-primary">2023</span>
                            <h6 class="mt-3 mb-2">Official Contractor</h6>
                            <ul class="text-muted mb-0">
                                <li>Asian Society of Cardiovascular Imaging (ASCI)</li>
                                <li>Asia Pacific Cervical Spine Society (APCSS)</li>
                                <li>Annual Scientific Meeting of indonesia Urological Association 2023 (ASMIUA)</li>
                                <li>Perhimpunan Dokter Spesialis Bedah Plastik Rekontruksi dan Estetik
                                    Indonesia 2023 (PERAPI)
                                </li>
                            </ul>
                            <div class="mt-4 d-none d-md-block">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#project2023"
                                    class="btn btn-soft-primary">See More <i data-feather="arrow-right"
                                        class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2019"]'>
                        <div class="card border-0 work-container work-classic shadow overflow-hidden">
                            <div class="card-body work-container work-modern p-0">
                                <div class="portfolio-box-img position-relative overflow-hidden">
                                    <img class="item-container img-fluid work-image mx-auto"
                                        src="images/projects/2019-1.jpg" alt="1" />
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="icons text-center">
                                        <a href="images/projects/2019-1.jpg"
                                            class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                                data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                                <div class=" p-4">
                                    <h6 class="text-muted tag mb-0">2019</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2020"]'>
                        <div class="card border-0 work-container work-classic shadow overflow-hidden">
                            <div class="card-body work-container work-modern p-0">
                                <div class="portfolio-box-img position-relative overflow-hidden">
                                    <img class="item-container img-fluid work-image mx-auto"
                                        src="images/projects/2020-1.jpg" alt="1" />
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="icons text-center">
                                        <a href="images/projects/2020-1.jpg"
                                            class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                                data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                                <div class=" p-4">
                                    <h6 class="text-muted tag mb-0">2020</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2019"]'>
                        <div class="card border-0 work-container work-classic shadow overflow-hidden">
                            <div class="card-body work-container work-modern p-0">
                                <div class="portfolio-box-img position-relative overflow-hidden">
                                    <img class="item-container img-fluid work-image mx-auto"
                                        src="images/projects/2019-2.jpg" alt="2" />
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="icons text-center">
                                        <a href="images/projects/2019-2.jpg"
                                            class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                                data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                                <div class=" p-4">
                                    <h6 class="text-muted tag mb-0">2019</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2019"]'>
                        <div class="card border-0 work-container work-classic shadow overflow-hidden">
                            <div class="card-body work-container work-modern p-0">
                                <div class="portfolio-box-img position-relative overflow-hidden">
                                    <img class="item-container img-fluid work-image mx-auto"
                                        src="images/projects/2019-3.jpg" alt="2" />
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="icons text-center">
                                        <a href="images/projects/2019-3.jpg"
                                            class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                                data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                                <div class=" p-4">
                                    <h6 class="text-muted tag mb-0">2019</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2021"]'>
                        <div class="card border-0 work-container work-classic shadow overflow-hidden">
                            <div class="card-body work-container work-modern p-0">
                                <div class="portfolio-box-img position-relative overflow-hidden">
                                    <img class="item-container img-fluid work-image mx-auto"
                                        src="images/projects/2021.jpg" alt="1" />
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="icons text-center">
                                        <a href="images/projects/2021.jpg"
                                            class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                                data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                                <div class=" p-4">
                                    <h6 class="text-muted tag mb-0">2021</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2023"]'>
                        <div class="card border-0 work-container work-classic shadow overflow-hidden">
                            <div class="card-body work-container work-modern p-0">
                                <div class="portfolio-box-img position-relative overflow-hidden">
                                    <img class="item-container img-fluid work-image mx-auto"
                                        src="images/projects/2023-1.jpg" alt="1" />
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="icons text-center">
                                        <a href="images/projects/2023-1.jpg"
                                            class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                                data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                                <div class=" p-4">
                                    <h6 class="text-muted tag mb-0">2023</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2022"]'>
                        <div class="card border-0 work-container work-classic shadow overflow-hidden">
                            <div class="card-body work-container work-modern p-0">
                                <div class="portfolio-box-img position-relative overflow-hidden">
                                    <img class="item-container img-fluid work-image mx-auto"
                                        src="images/projects/2022-1.jpg" alt="1" />
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="icons text-center">
                                        <a href="images/projects/2022-1.jpg"
                                            class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                                data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                                <div class=" p-4">
                                    <h6 class="text-muted tag mb-0">2022</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2023"]'>
                        <div class="card border-0 work-container work-classic shadow overflow-hidden">
                            <div class="card-body work-container work-modern p-0">
                                <div class="portfolio-box-img position-relative overflow-hidden">
                                    <img class="item-container img-fluid work-image mx-auto"
                                        src="images/projects/2023-2.jpg" alt="1" />
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="icons text-center">
                                        <a href="images/projects/2023-2.jpg"
                                            class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                                data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                                <div class=" p-4">
                                    <h6 class="text-muted tag mb-0">2023</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2022"]'>
                        <div class="card border-0 work-container work-classic shadow overflow-hidden">
                            <div class="card-body work-container work-modern p-0">
                                <div class="portfolio-box-img position-relative overflow-hidden">
                                    <img class="item-container img-fluid work-image mx-auto"
                                        src="images/projects/2022-2.jpg" alt="1" />
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="icons text-center">
                                        <a href="images/projects/2022-2.jpg"
                                            class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                                data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                                <div class=" p-4">
                                    <h6 class="text-muted tag mb-0">2022</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2022"]'>
                        <div class="card border-0 work-container work-classic shadow overflow-hidden">
                            <div class="card-body work-container work-modern p-0">
                                <div class="portfolio-box-img position-relative overflow-hidden">
                                    <img class="item-container img-fluid work-image mx-auto"
                                        src="images/projects/2022-3.jpg" alt="1" />
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="icons text-center">
                                        <a href="images/projects/2022-3.jpg"
                                            class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                                data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                                <div class=" p-4">
                                    <h6 class="text-muted tag mb-0">2022</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2023"]'>
                        <div class="card border-0 work-container work-classic shadow overflow-hidden">
                            <div class="card-body work-container work-modern p-0">
                                <div class="portfolio-box-img position-relative overflow-hidden">
                                    <img class="item-container img-fluid work-image mx-auto"
                                        src="images/projects/2023-4.jpg" alt="1" />
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="icons text-center">
                                        <a href="images/projects/2023-4.jpg"
                                            class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                                data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                                <div class=" p-4">
                                    <h6 class="text-muted tag mb-0">2023</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2023"]'>
                        <div class="card border-0 work-container work-classic shadow overflow-hidden">
                            <div class="card-body work-container work-modern p-0">
                                <div class="portfolio-box-img position-relative overflow-hidden">
                                    <img class="item-container img-fluid work-image mx-auto"
                                        src="images/projects/2023-5.jpg" alt="1" />
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="icons text-center">
                                        <a href="images/projects/2023-5.jpg"
                                            class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                                data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                                <div class=" p-4">
                                    <h6 class="text-muted tag mb-0">2023</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mt-4 pt-2 picture-item" data-groups='["2023"]'>
                        <div class="card border-0 work-container work-classic shadow overflow-hidden">
                            <div class="card-body work-container work-modern p-0">
                                <div class="portfolio-box-img position-relative overflow-hidden">
                                    <img class="item-container img-fluid work-image mx-auto"
                                        src="images/projects/2023-6.jpg" alt="1" />
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="icons text-center">
                                        <a href="images/projects/2023-6.jpg"
                                            class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i
                                                data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                                <div class=" p-4">
                                    <h6 class="text-muted tag mb-0">2023</h6>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!--end row-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</div>