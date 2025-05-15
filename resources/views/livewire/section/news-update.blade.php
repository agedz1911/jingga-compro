<div>
    <x-menu.parent-navigation />
    <div class="container-fluid">
        <div class="row justify-content-center mt-100 mt-60">
            <div class="col-12">
                <div class="section-title mb-4 pb-2 text-center">
                    <h6 class="alert bg-soft-primary alert-pills">Jingga Updates</h6>
                    <p class="text-muted para-desc mx-auto mb-0">The Latest Updates <span
                            class="text-primary fw-bold">Jingga</span> Projects</p>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="container">

            <div class="row">
                <!-- BLog Start -->
                <div class="col-lg-8 col-md-6">
                    <div class="row">
                        @foreach ($newsUpdates as $news)
                        <div class="col-lg-6 col-md-12 pt-2">
                            <div class="card blog rounded border-0 shadow">
                                <div class="position-relative">
                                    <img src="{{asset('storage/' . $news->image)}}" class="card-img-top rounded-top"
                                        alt="...">
                                    <div class="overlay rounded-top bg-dark"></div>
                                </div>
                                <div class="card-body content">
                                    <h5><a href="javascript:void(0)"
                                            class="card-title title text-dark">{{$news->title}}</a>
                                    </h5>
                                    <div class="post-meta  mt-3">
                                        <p>{!! str(str($news->description)->limit(40))->markdown()->sanitizeHtml() !!}
                                        </p>
                                        <a href="{{url('news-update', ['id' => $news->id])}}" class="text-muted readmore float-end">Read More <i
                                                class="uil uil-angle-right-b"></i></a>
                                    </div>
                                </div>
                                <div class="author">
                                    <small class="text-light date"><i class="uil uil-calendar-alt"></i>
                                        {{$news->created_at->diffForHumans()}}</small>
                                    <small class="text-light user d-block"><i class="uil uil-map-marker"></i>
                                        {{$news->location}}</small>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        @endforeach
                        <div class="mt-4 mb-5">
                            {{ $newsUpdates->links() }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 sidebar sticky-bar rounded shadow mb-5">
                        <div class="card-body">
                            <!-- SEARCH -->
                            <div class="widget">
                                <div class="input-group mb-3 border rounded">
                                    <input wire:model.live.debounce.500ms="search" type="text" id="search" name="search"
                                        class="form-control text-dark border-0" placeholder="Search Keywords...">
                                </div>
                            </div>
                            <!-- SEARCH -->

                            <!-- RECENT POST -->
                            <div class="widget mb-4 pb-2">
                                <h5 class="widget-title">Older Post</h5>
                                <div class="mt-4">
                                    @foreach ($olderPosts as $post)
                                    <div class="clearfix post-recent">
                                        <div class="post-recent-thumb float-start"> <a href="{{url('news-update', ['id' => $news->id])}}"> <img
                                                    alt="img" src="{{asset('storage/' . $post->image)}}"
                                                    class="img-fluid rounded"></a>
                                        </div>
                                        <div class="post-recent-content float-start">
                                            <a href="{{url('news-update', ['id' => $news->id])}}">{{$post->title}} <br>
                                                <span class="text-muted">{{$post->created_at->isoFormat('Do MMMM,
                                                    YYYY')}}</span>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                {{ $olderPosts->links() }}
                            </div>
                            <!-- RECENT POST -->
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
        </div>
    </div>
</div>