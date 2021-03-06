<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $posts = DB::select('SELECT * FROM posts');

        $posts = DB::table('posts')->get();

        // $posts = Post::all();
        $posts = Post::get();
        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // DB::insert('INSERT INTO posts(title,content,created_at,updated_at)VALUES(?,?,?,?)',[
        //     $request->title,
        //     $request->content,
        //     now(),
        //     now()
        // ]);

        // DB::table('posts')->insert([
        //     'title'     => $request->title,
        //     'content'   => $request->content,
        //     'created_at'=> now(),
        //     'updated_at'=> now()
        // ]);

        // $post = new Post;
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save();
        
        // $post = new Post;
        // $post->fill($request->all());
        // $post->fill([
        //     'title' => $request->title,
        //     'content' => $request->content
        // ]);
        // $post->save();

        $request -> validate([
            'title' => 'required | max:10',
            'content' => 'required | max: 10'
        ]);
        Post::create($request->all());
        // Post::create([
        //     'title'=>$request->title,
        // ]);

        return redirect('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $posts = DB::select('SELECT * FROM posts WHERE id = ?',[$id]);
        // $post = DB::table('posts')->where('id',$id)->first();
        // $post = DB::table('posts')->find($id);
        
        // $post = Post::find($id);
        // $post = Post::findOrFail($id);
        // $post = Post::where('id',$id)->first();
        $post = Post::where('id',$id)->firstOrFail();
        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // $posts = DB::select('SELECT * FROM posts WHERE id = ?',[$id]);
        // $post = DB::table('posts')->find($id);
        // $post = DB::table('posts')->where('id',$id)->first();
        $post = Post::findOrFail($id);
        return view('post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // DB::update('UPDATE posts SET title=?,content=?,updated_at=? WHERE id = ?',[
        //     $request->title,
        //     $request->content,
        //     now(),
        //     $id
        // ]);

        // DB::table('posts')->where('id',$id)->update([
        //     'title'     => $request->title,
        //     'content'   => $request->content,
        //     'updated_at'=> now()
        // ]);
        
        $post = Post::findOrFail($id);
        $post->fill($request->all());
        // $post->fill([
        //     'title'=>$request->title
        // ]);
        $post->save();
        
        return redirect('post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // DB::delete('DELETE FROM posts WHERE id = ?',[$id]);
        // DB::table('posts')->where('id',$id)->delete();
        
        // $post = Post::findOrFail($id);
        // $post->delete();

        Post::destroy($id);

        return redirect('post');
    }
}
