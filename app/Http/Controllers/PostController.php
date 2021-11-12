<?php
//MVCモデルのController部分

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
        public function index(){
            $id = Post::select('id','name','place','date','place','created_at','content','like')->get();
            return view('index')
                ->with(['post'=>$id]);
       }

    // public function list(Post $post){
    //     $name = $post->name;
    //     $show = Post::where('name',$name)
    //             ->select('id','name','place','date','place','created_at','content','like')
    //             ->get();
    //     return view('list')
    //         ->with(['name'=>$name,'show'=>$show]);
    // }

    public function list($member){
        $show = Post::where('name',$member)
                    ->select('id','name','place','date','place','created_at','content','like')
                    ->get();
            return view('list')
                ->with(['show'=>$show,'member'=>$member]);
    }
    public function post(){
        return view('post');
    }
    public function submit(Request $request){
        $request->validate([
            'name'=>'required',
            'place'=>'required',
            'date'=>'required',
            'content'=>'required',
            'pass'=>'integer',
            'pass'=>'required|size:4',
        ],[
            'name.required'=>'メンバー名は必須です。',
            'place.required'=>'場所は必須です。',
            'date.required'=>'日付は必須です。',
            'content.required'=>'内容は必須です。',
            'pass.integer'=>'パスコードは４桁の数字を入れてください',
            'pass.required'=>'パスコードは必須です。',
            'pass.size'=>'パスコードは４桁の数字を入れてください。'
        ]);

        $post = new Post();
        $post->name = $request->name;
        $post->place = $request->place;
        $post->date = $request->date;
        $post->content = $request->content;
        $post->like = 0;
        $post->pass = $request->pass;
        $post->save();

        return redirect()
            ->route('index');
    }
    public function delete(Post $id){
        $id->delete();

        return view('delete')
            ->with(['id'=>$id]);
    }
    public function edit(Post $post){
        return view('edit')
            ->with(['post'=>$post]);
    }
    public function update(Request $request,Post $id){
        $request->validate([
            'name'=>'required',
            'place'=>'required',
            'date'=>'required',
            'content'=>'required'
        ],[
            'name.required'=>'メンバー名は必須です。',
            'place.required'=>'場所は必須です。',
            'date.required'=>'日付は必須です。',
            'content.required'=>'内容は必須です。',
        ]);
        if($request->pass != $id->pass){
            return view('errorpage')
                        ->with(['post'=>$id]);
        }else{
            $id->name = $request->name;
            $id->place = $request->place;
            $id->date = $request->date;
            $id->content = $request->content;
            $id->save();

            return view('update')
                ->with(['id'=>$id]);
        }
    }
    public function like(Request $request,Post $id){
        $id->like = $request->like;
        $id->like++;
        $id->save();

        return redirect()
            ->route('index');
    }
    public function sort_like(Request $request,Post $id){
        $id = Post::orderBy('like','desc')->get();

        return view('index')
            ->with(['post'=>$id]);
    }
    public function errorpage(Post $post){
        return view('errorpage')
            ->with(['post'=>$post]);
    }
}
