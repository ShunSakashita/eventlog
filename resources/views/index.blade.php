{{-- トップページ --}}
<x-layout>
    <h1 id="welcome">ようこそ</h1>
    <a href="{{route('post')}}"><div class="post">&lt;&lt;投稿する&gt;&gt;</div></a>
    <div class="top">
    <div class="m_search">
    <h2>メンバーを検索</h2>
    <div class="aaa">
    <h3>グループ名:</h3>
    <select name="teamname" id="teamname" onchange="update_options()">
        <option>選択してください</option>
        <option value="hinata">日向坂46</option>
        <option value="sakura">櫻坂46</option>
    </select>
    </div>
    <div class="bbb">
    <h3>メンバー名:</h3>
    <form action="{{route('member_search')}}" method="POST">
    <select name="name" id="name">
        <option value="">グループを選択してください</option>
        </select>
        @csrf
        <input type="submit" name="" value="検索">
    </form>
    </div>
    </div>
    <h2>投稿を検索</h2>
    <form action="{{route('search')}}" method="POST" id="search">
        @csrf
        <input type="text" name="search">
        <input type="submit" name="" id="" value="検索">
    </form>
    <div id="show_top">
    <h1>過去の投稿</h1>
            <form action="{{route('sort_like')}}" method="POST" id="sort">
            @csrf
            <button id="likebtn">いいね順に並び替え</button>
            <p>※メンバー名をクリックするとメンバーごとに表示できます。</p>
    </div>
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
            <script src="{{asset('/js/show_memberlist.js')}}"></script>
</x-layout>
