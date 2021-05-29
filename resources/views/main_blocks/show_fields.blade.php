<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $mainBlock->title }}</p>
</div>

<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    <p>{{ $mainBlock->content }}</p>
</div>

<!-- Url Video Field -->
<div class="form-group">
    {!! Form::label('url_video', 'Url Video:') !!}
    <p>{{ $mainBlock->url_video }}</p>
</div>

<!-- Bg Field -->
<div class="form-group">
    {!! Form::label('bg', 'Bg:') !!}
    <p>{{ $mainBlock->bg }}</p>
</div>

