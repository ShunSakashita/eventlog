<x-layout>
    <h2>{{$member}}さんに関する投稿の検索結果</h2>
    @forelse($result as $r)
        <div class="show_database">
        id:{{$r->id}}作成日時:{{$r->created_at}} メンバー名:<a href="{{route('list',$r->name)}}">{{$r->name}}</a><br>
        握手した日時{{$r->date}}　握手会会場:{{$r->place}}<br>
        会話内容:{!! nl2br(e($r->content))!!}<br>
        いいね数:{{$r->like}}
        </div>
    @empty
    <h3>{{$member}}さんに関する投稿はありませんでした。</h3>
    @endforelse
    &laquo; <a href="{{ route('index') }}">戻る</a>
</x-layout>
