<div>
    <x-menu.parent-navigation />
    <div class="container-fluid">
        <div class="row justify-content-center mt-100 mt-60">
            <div class="col-12">
                <div class="section-title mb-4 pb-2 text-center">
                    <a href="/news-update"><h6 class="alert bg-soft-primary alert-pills">Jingga Updates</h6></a>
                    <p class="text-muted para-desc mx-auto mb-0">The Latest Updates <span
                            class="text-primary fw-bold">Jingga</span> Projects</p>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="card blog blog-detail border-0 shadow rounded">
                        <img src="{{asset('storage/' . $news->image)}}" class="img-fluid rounded-top" alt="">
                        <div class="card-body content">
                            <h5 class="text-primary"><i class="mdi mdi-tag text-primary me-1"></i> {{$news->title}}</h5>
                            <div class="text-muted mt-3">
                                {!! str($news->description)->markdown()->sanitizeHtml() !!}
                            </div>

                            {{-- <div class="post-meta mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)"
                                            class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"
                                            class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>

                    <div class="card shadow rounded border-0 mt-4">
                        <div class="card-body">
                            <h5 class="card-title mb-0">Comments :</h5>

                            {{-- <ul class="media-list list-unstyled mb-0">
                                <li class="mt-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <a class="pe-3" href="#">
                                                <img src="images/client/01.jpg"
                                                    class="img-fluid avatar avatar-md-sm rounded-circle shadow"
                                                    alt="img">
                                            </a>
                                            <div class="commentor-detail">
                                                <h6 class="mb-0"><a href="javascript:void(0)"
                                                        class="text-dark media-heading">Lorenzo Peterson</a></h6>
                                                <small class="text-muted">15th August, 2019 at 01:25 pm</small>
                                            </div>
                                        </div>
                                        <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                    </div>
                                    <div class="mt-3">
                                        <p class="text-muted fst-italic p-3 bg-light rounded">" There are many
                                            variations of passages of Lorem Ipsum available, but the majority have
                                            suffered alteration in some form, by injected humour "</p>
                                    </div>
                                </li>
                            </ul> --}}
                        </div>
                    </div>

                    <div class="card shadow rounded border-0 mt-4 mb-5">
                        <div class="card-body">
                            <h5 class="card-title mb-0">Leave A Comment :</h5>

                            {{-- <form class="mt-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Your Comment</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                <textarea id="message" placeholder="Your Comment" rows="5"
                                                    name="message" class="form-control ps-5" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Name <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input id="name" name="name" type="text" placeholder="Name"
                                                    class="form-control ps-5" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input id="email" type="email" placeholder="Email" name="email"
                                                    class="form-control ps-5" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="send d-grid">
                                            <button type="submit" class="btn btn-primary">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 sidebar sticky-bar rounded shadow">
                        <div class="card-body">
                            <!-- SEARCH -->
                            <div class="widget">
                                
                                    <div class="input-group mb-3 border rounded">
                                        <input type="text" wire:model.live.debounce.500ms='search' id="search" name="search" class="form-control text-dark border-0"
                                            placeholder="Search Keywords...">
                                        
                                    </div>
                                
                            </div>
                            <!-- SEARCH -->

                            <!-- RECENT POST -->
                            <div class="widget mb-4 pb-2">
                                <h5 class="widget-title">Recent Post</h5>
                                <div class="mt-4">
                                    @foreach ($newsUpdates as $post)
                                    <div class="clearfix post-recent">
                                        <div class="post-recent-thumb float-start"> <a href="{{url('news-update', ['id' => $post->id])}}"> <img
                                                    alt="img" src="{{asset('storage/' . $post->image)}}"
                                                    class="img-fluid rounded"></a>
                                        </div>
                                        <div class="post-recent-content float-start">
                                            <a href="{{url('news-update', ['id' => $post->id])}}">{{$post->title}} <br>
                                                <span class="text-muted">{{$post->created_at->isoFormat('Do MMMM,
                                                    YYYY')}}</span>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- RECENT POST -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>