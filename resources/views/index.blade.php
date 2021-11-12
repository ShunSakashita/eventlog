{{-- トップページ --}}
<x-layout>
    <h1>ようこそ</h1>
    <a href="{{route('post')}}"><div class="post">&lt;&lt;投稿する&gt;&gt;</div></a>
    <div class="top">
    <h1>過去の投稿</h1>
            <form action="{{route('sort_like')}}" method="POST" id="sort">
            @csrf
            <button id="likebtn">いいね順に並び替え</button>
    </div>
            </form>
            @forelse ($post as $content)
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
            <script>
                'use strict';

                {
                    document.getElementById('delete_btn').addEventListener('submit', e => {
                        e.preventDefault();

                        if (!confirm('本当に削除しますか？')) {
                            return;
                        }

                        e.target.submit();
                    });
                }
            </script>
</x-layout>
