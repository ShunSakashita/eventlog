{{-- 編集ページ --}}
<x-layout>
    &laquo; <a href="{{ route('index') }}">戻る</a>
<form action="{{route('update',$post->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="memberName">メンバー名:<p>※必須</p><label><input type="text" name="name" value="{{old('name',$post->name)}}"></label></div>
        @error('name')
        <div class="error">{{$message}}</div>
        @enderror
        <div class="place">場所:<p>※必須</p><label><input type="text" name="place" value="{{old('place',$post->place)}}"></label></div>
        @error('place')
        <div class="error">{{$message}}</div>
        @enderror
        <div class="dates">日付:<p>※必須</p><label><input type="date" name="date" value="{{old('date',$post->date)}}"></label></div>
        @error('date')
        <div class="error">{{$message}}</div>
        @enderror
        <div class="contents">内容:<p>※必須</p><label><textarea name="content" id="" cols="30" rows="10">{{old('content',$post->content)}}</textarea></label></div>
        @error('content')
        <div class="error">{{$message}}</div>
        @enderror
        <div class="pass" id="posts">編集用パスコード:<p>※必須</p><label><input type="text" name="pass" value="{{old('pass')}}"></label></div>
        @error('pass')
        <div class="error" id="posts">{{$message}}</div>
        @enderror
        <button name="submit">編集する</button>
</form>
</x-layout>
