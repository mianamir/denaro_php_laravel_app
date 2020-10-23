<div class="row margin-bottom-20">
    <div class="panel-heading">Categories</div>
    <ul class="list-group sidebar-nav-v1" id="sidebar-nav-1">
        <?php
        $categories = \App\Models\Admin\Category::whereNull('parent_id')->orWhere('parent_id','=',0)->get();

        ?>

        @foreach($categories as $category)

            <li class="list-group-item list-toggle">
                <a class="side-link" data-toggle="collapse" data-parent="#sidebar-nav-1"
                   href="#collapse-demo-{{$category->id}}"><i
                            class="fa fa-angle-double-down pull-right"></i>{{$category->name}}</a>
                <ul id="collapse-demo-{{$category->id}}" class="collapse">
                    @foreach($category->childs as $subCategory)
                        <li><a class="side-link2" href="{{route('category',[$subCategory->id])}}"> {{$subCategory->name}}</a></li>
                    @endforeach
                </ul>
            </li>
        @endforeach

    </ul>

</div>
