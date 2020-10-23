<?php

$images = \App\Models\Admin\Gallery::where('published', 1)->groupBy('category')->get();

?>
<div class="col-md-12">
    <div class="row grid-space-0">
        <div class="gallery-page">
            <div class="row margin-bottom-20">
                @foreach($images as $image)
                    <div class="col-md-4 col-sm-4">
                        <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="Project Title"
                           href="{{route('gallery.category',[$image->category])}}">
                                                        <span class="overlay-zoom">
                                                            <img alt=""
                                                                 src="{{asset($image->image)}}"
                                                                 class="img-responsive">
                                                            <span class="zoom-icon"></span>
                                                        </span>
                        </a>
                        <h5 align="center">{{$image->name}}</h5>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

