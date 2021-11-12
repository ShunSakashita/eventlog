<x-layout>
    &laquo; <a href="{{ route('index') }}">戻る</a>
    <h3>{{$member}}の握手会</h3>


    @forelse ($show as $content)
    <div class="show_database">
    id:{{$content->id}}作成日時:{{$content->created_at}} メンバー名:<a href="{{route('list',$content->name)}}">{{$content->name}}</a><br>
    握手した日時{{$content->date}}　握手会会場:{{$content->place}}<br>
    会話内容:{!! nl2br(e($content->content))!!}<br>
    いいね数:{{$content->like}}
    <div class="button">
    <form action="{{route('edit',$content->id)}}" method="GET">
    @csrf
    <button>編集する</button>
    </form>
    <form action="{{route('delete',$content->id)}}" method="post" id="delete_btn">
    @method('DELETE')
    @csrf
    <button>削除する</button>
    </form>
    <form action="{{route('like',$content->id)}}" method="post">
    @csrf
    <button>いいね！</button>
    </form>
    </div>
    </div>
    @empty
        <h3>まだ投稿はありません</h3>
    @endforelse
</x-layout>
