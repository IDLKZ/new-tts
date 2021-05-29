<div class="table-responsive-sm">
    <table class="table table-striped" id="structures-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Content</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($structures as $structure)
            <tr>
                <td>{{ $structure->title }}</td>
            <td>{{ $structure->content }}</td>
                <td>
                    {!! Form::open(['route' => ['structures.destroy', $structure->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('structures.show', [$structure->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('structures.edit', [$structure->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>