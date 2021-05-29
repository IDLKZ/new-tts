<div class="table-responsive-sm">
    <table class="table table-striped" id="advantageBlocks-table">
        <thead>
            <tr>
                <th>Icon</th>
        <th>Content</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($advantageBlocks as $advantageBlock)
            <tr>
                <td><img src="{{ $advantageBlock->getImage() }}" width="45" height="45"></td>
            <td>{{ $advantageBlock->content }}</td>
                <td>
                    {!! Form::open(['route' => ['advantageBlocks.destroy', $advantageBlock->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('advantageBlocks.show', [$advantageBlock->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('advantageBlocks.edit', [$advantageBlock->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
