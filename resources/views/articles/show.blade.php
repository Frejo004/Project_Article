<h1>{{ $article->title }}</h1>
@if ($article->content)
    <p>{{ $article->content }}</p>
@elseif ($article->file_path)
    <iframe src="{{ Storage::url($article->file_path) }}" width="100%" height="500px"></iframe>
@endif
