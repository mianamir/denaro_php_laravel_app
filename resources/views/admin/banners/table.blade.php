<table class="table table-responsive" id="myTable1" data-order='[[ 0, "desc" ]]'>
    <thead>
       <tr>
           <th>Heading</th>
           <th>Sub Heading</th>
           {{--<th>Description</th>--}}

           <th>Image</th>
{{--           <th>Order</th>--}}
{{--           <th>Status</th>--}}
           <th>Action</th>
       </tr>
    </thead>
    <tbody>
    <?php

    ?>
    @foreach($banners as $banner)
        <tr>
            <td>{!! $banner->title !!}</td>
            <td>{!! $banner->button_text !!}</td>
            {{--<td>{!! $banner->description !!}</td>--}}

            <td><img src="{{asset($banner->image)}}" width="100" height="100"/> </td>
{{--            <td>{!! $banner->order_image !!}</td>--}}
{{--            <td>--}}
{{--                @if($banner->is_active == 1)--}}
{{--                    <span class="label label-success">Active</span>--}}
{{--                @else--}}
{{--                    <span class="label label-info">Not Active</span>--}}
{{--                @endif--}}
{{--            </td>--}}
            <td>
                {!! Form::open(['route' => ['admin.banners.destroy', $banner->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
<!--                    <a href="{!! route('admin.banners.show', [$banner->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>-->
                    <a href="{!! route('admin.banners.edit', [$banner->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                   {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>