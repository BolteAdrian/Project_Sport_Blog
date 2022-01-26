<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use DB;
use App\Category;




class CategoryController extends Controller
{
    public function __construct()
    {
    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        // display a view of all of our categories
        // it will also have a form to create a new category

        $categories = Category::all();
        return view('categories.index')->withCategories($categories);

    }


    public function football()
    {
        // display a view of all of our categories
        // it will also have a form to create a new category

        $categories = Category::all();
        
        
        
        $post_football= DB::table('posts')
        ->join('category_post', 'posts.id', '=', 'category_post.post_id')
        ->join('categories', 'categories.id', '=', 'category_post.category_id')
        ->select('posts.id', 'posts.title', 'posts.body','posts.created_at','posts.updated_at','posts.user_id','posts.cover_image','category_post.category_id','categories.name')
        ->get();
        
        return view('categories.football')->with('post_football', $post_football);
    }



    public function default($name)
    {
        // display a view of all of our categories
        // it will also have a form to create a new category

        $categories = Category::all();
        
        
        
        $post_default= DB::table('posts')
        ->join('category_post', 'posts.id', '=', 'category_post.post_id')
        ->join('categories', 'categories.id', '=', 'category_post.category_id')
        ->select('posts.id', 'posts.title', 'posts.body','posts.created_at','posts.updated_at','posts.user_id','posts.cover_image','category_post.category_id','categories.name')
        ->where('categories.name','=',$name)->get();
    


        return view('categories.default')->with('post_default', $post_default)->with('name',$name);
    }






    public function handball()
    {
        // display a view of all of our categories
        // it will also have a form to create a new category

        $categories = Category::all();
        
        
        
        $post_handball= DB::table('posts')
        ->join('category_post', 'posts.id', '=', 'category_post.post_id')
        ->join('categories', 'categories.id', '=', 'category_post.category_id')
        ->select('posts.id', 'posts.title', 'posts.body','posts.created_at','posts.updated_at','posts.user_id','posts.cover_image','category_post.category_id','categories.name')
        ->get();
        
        return view('categories.handball')->with('post_handball', $post_handball);
    }


    public function tennis()
    {
        // display a view of all of our categories
        // it will also have a form to create a new category

        $categories = Category::all();
        
        
        $post_tennis= DB::table('posts')
        ->join('category_post', 'posts.id', '=', 'category_post.post_id')
        ->join('categories', 'categories.id', '=', 'category_post.category_id')
        ->select('posts.id', 'posts.title', 'posts.body','posts.created_at','posts.updated_at','posts.user_id','posts.cover_image','category_post.category_id','categories.name')
        ->get();
        
        return view('categories.tennis')->with('post_tennis', $post_tennis);
    }


    public function olimpics()
    {
        // display a view of all of our categories
        // it will also have a form to create a new category

        $categories = Category::all();
        
        
        $post_olimpics= DB::table('posts')
        ->join('category_post', 'posts.id', '=', 'category_post.post_id')
        ->join('categories', 'categories.id', '=', 'category_post.category_id')
        ->select('posts.id', 'posts.title', 'posts.body','posts.created_at','posts.updated_at','posts.user_id','posts.cover_image','category_post.category_id','categories.name')
        ->get();
        
        return view('categories.olimpics')->with('post_olimpics', $post_olimpics);
    }

 
      
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Save a new category and then redirect back to index
        $this->validate($request, array(
            'name' => 'required|max:255'
            ));

        $category = new Category;

        $category->name = $request->name;
        $category->save();

        Session::flash('success', 'New Category has been created');

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Display the category and all the posts in that category
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
    }


}
