<form action="{{ route('article.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Tieu de</label>
        <br>
        <input type="text" name="title">
        @error('title')

        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
        <br>

    </div>
    <div>
        <label for="content">Noi dung</label>
        <br>
        <textarea name="content" id="" cols="10" rows="10"></textarea>
    </div>
    <div>
        <button type="submit">Dang bai</button>
    </div>
    <div>
        <button type="submit"><a href="{{route('article.index')}}">List</a></button>
    </div>

</form>