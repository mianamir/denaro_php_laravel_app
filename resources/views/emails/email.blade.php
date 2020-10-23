Email Recieved From WebSite <br>



@foreach($data['form'] as $key => $value)

    {{$key}}: {{$value}} <br/>

@endforeach


{{--Products--}}

{{--@foreach(\Cart::content() as $row)--}}
    {{--<table class="table table-hover">--}}
        {{--<thead>--}}
        {{--<tr>--}}
            {{--<th>Product</th>--}}
            {{--<th>Quantity</th>--}}
            {{--<th class="text-center">Price</th>--}}
            {{--<th class="text-center">Total</th>--}}
            {{--<th> </th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}

        {{--@foreach(\Cart::content() as $row)--}}
            {{--<tr>--}}
                {{--<td class="col-sm-8 col-md-6">--}}
                    {{--<div class="media">--}}

                        {{--<div class="media-body">--}}
                            {{--<h4 class="media-heading"><a href="#">{{$row->name}}</a></h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</td>--}}




                {{--<td class="col-sm-1 col-md-1" style="text-align: center">--}}
                    {{--<input type="number" name="qty" class="form-control" id="exampleInputEmail1"--}}
                           {{--value="{{$row->qty}}">--}}
                {{--</td>--}}
                {{--<td class="col-sm-1 col-md-1 text-center">--}}
                    {{--<strong>{{$row->price}}</strong>--}}
                {{--</td>--}}
                {{--<td class="col-sm-1 col-md-1 text-center">--}}
                    {{--<strong>{{$row->total}}</strong>--}}
                {{--</td>--}}
                {{--<td class="col-sm-1 col-md-1">--}}
                                        {{--<span>--}}
                                            {{--<button type="submit" class="btn btn-primary">--}}
                                                {{--Update--}}
                                            {{--</button>--}}
                                        {{--</span>--}}
                {{--</td>--}}





            {{--</tr>--}}

        {{--@endforeach--}}

        {{--<tr>--}}
            {{--<td>  </td>--}}
            {{--<td>  </td>--}}
            {{--<td>  </td>--}}
            {{--<td><h5>total</h5></td>--}}
            {{--<td class="text-right"><h5><strong>{{\Cart::total()}}</strong></h5></td>--}}
        {{--</tr>--}}


        {{--</tbody>--}}
    {{--</table>--}}



{{--@endforeach--}}