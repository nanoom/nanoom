    <form action="{{ route('articles.store') }}" method="POST">
      {!! csrf_field() !!}

        <input type="text" name="title" id="title" value="{{ old('title', $article->title) }}"/>
        {!! $errors->first('title', '<span class="form-error">:message</span>') !!}

        <textarea name="content" rows="10">{{ old('content', $article->content) }}</textarea>
        {!! $errors->first('content', '<span class="form-error">:message</span>') !!}

          <a href="{{ route('articles.create') }}" class="btn btn-default">
             Reset
          </a>
          <button type="submit" class="btn btn-primary my-submit">
             Post
          </button>
    </form>
 