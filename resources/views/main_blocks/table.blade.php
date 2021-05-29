<div class="table-responsive-sm">
    <table class="table table-striped" id="mainBlocks-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Content</th>
        <th>Url Video</th>
        <th>Bg</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mainBlocks as $mainBlock)
            <tr>
                <td>{{ $mainBlock->title }}</td>
            <td>{{ $mainBlock->content }}</td>
            <td>{{ $mainBlock->url_video }}</td>
            <td>{{ $mainBlock->bg }}</td>
                <td>
                    {!! Form::open(['route' => ['mainBlocks.destroy', $mainBlock->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mainBlocks.show', [$mainBlock->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('mainBlocks.edit', [$mainBlock->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>