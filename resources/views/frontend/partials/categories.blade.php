<div class="row">


    <?php

    $categories = \App\Models\Admin\Category::all();
    ?>

    @foreach($categories as $category)
        <div class="col-md-3">
            <div class="box-2">
                <p>
                    <a href="{{route('category',[$category->id])}}"><img src="{{asset($category->image)}}" alt="Image" class="img-responsive img-center-xs"></a>
                </p>
                <h5 class="sub-heading-1 tiny text-normal text-center-xs"><a href="#">{!! $category->name !!}</a></h5>
                <p class="text-grey-color"><a
                            href="{{route('category',[$category->id])}}"> {!! $product->details !!} </a>
                </p>
            </div>
        </div>
    @endforeach


</div>
