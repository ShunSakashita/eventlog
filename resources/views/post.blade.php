{{-- 投稿ページ --}}
<x-layout>
    &laquo; <a href="{{ route('index') }}">戻る</a>
    <h3>投稿ページ</h3>
    <form action="{{route('submit')}}" method="POST" id="post_form">
        @csrf
        <div class="memberName" id="posts">メンバー名:<p>※必須</p><label><input type="text" name="name" value="{{old('name')}}"></label></div>
        @error('name')
        <div class="error" id="posts">{{$message}}</div>
        @enderror
        <div class="place" id="posts">場所:<p>※必須</p><label><input type="text" name="place" value="{{old('place')}}"></label></div>
        @error('place')
        <div class="error" id="posts">{{$message}}</div>
        @enderror
        <div class="dates" id="posts">日付:<p>※必須</p><label><input type="date" name="date" value="{{old('date')}}"></label></div>
        @error('date')
        <div class="error" id="posts">{{$message}}</div>
        @enderror
        <div class="contents" id="posts">内容:<p>※必須</p><label><textarea name="content" id="" cols="30" rows="10">{{old('content')}}</textarea></label></div>
        @error('content')
        <div class="error" id="posts">{{$message}}</div>
        @enderror
        <div class="pass" id="posts">編集用パスコード:(４桁の数字)<p>※必須</p><label><input type="text" name="pass" value="{{old('pass')}}"></label></div>
        @error('pass')
        <div class="error" id="posts">{{$message}}</div>
        @enderror
        <button name="submit">投稿する</button>
    </form>
</x-layout>
