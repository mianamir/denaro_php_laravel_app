<table class="table table-responsive" id="contacts-table">
    <thead>
        <th>Title</th>
        <th>Address</th>
        <th>Email</th>
        <th>Phone1</th>
        <th>Phone2</th>
        <th>Phone3</th>
        <th>Phone4</th>
        <th>Fax</th>
        <th>Website</th>
        {{--<th>Created At</th>--}}
        {{--<th>Updated At</th>--}}
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($contacts as $contact)
        <tr>
            <td>{!! $contact->title !!}</td>
            <td>{!! $contact->address !!}</td>
            <td>{!! $contact->email !!}</td>
            <td>{!! $contact->phone1 !!}</td>
            <td>{!! $contact->phone2 !!}</td>
            <td>{!! $contact->phone3 !!}</td>
            <td>{!! $contact->phone4 !!}</td>
            <td>{!! $contact->fax !!}</td>
            <td>{!! $contact->website !!}</td>
            {{--<td>{!! $contact->created_at !!}</td>--}}
            {{--<td>{!! $contact->updated_at !!}</td>--}}
            <td>
                {!! Form::open(['route' => ['admin.contacts.destroy', $contact->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.contacts.show', [$contact->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.contacts.edit', [$contact->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>