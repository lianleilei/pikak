<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = null;
        $data['meta'] = DB::table('cms_website')->where('siteid',1)->first();
        $data['type'] = DB::table('cms_type')->where('display',1)->limit(6)->get();
        $data['news'] = DB::table('cms_news')->where('status',1)->where('typeid',3)->orderBy('id','desc')->limit(9)->get();
        $data['product'] = DB::table('cms_product')->where('display',1)->orderBy('click','desc')->limit(6)->get();
        return view('home.index',compact('data'));
    }

    /**
     * 新闻资讯栏目路由
     * $name 要访问的栏目id
     * @return \Illuminate\Http\Response
     */
    public function type($name)
    {

        $data = null;
        $result = DB::table('cms_news');
        $typeinfo = DB::table('cms_type')->where('english',$name)->first();
        if($name == 'news'){
            $data['news'] = $result->where('status',1)->where('typeid',3)->orderBy('id','desc')->paginate(9);
        }else{
            $data['news'] = $result->where('typeid',$typeinfo->id)->where('status',1)->where('typeid',3)->orderBy('id','desc')->paginate(9);
        }
        return view('home.blog_list',compact('data','typeinfo','name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about($name)
    {
        $data['page'] = DB::table('cms_page')->where('type',$name)->first();
        return view('home.page_show',compact('data'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name,$id)
    {
        $data = null;
        $res = DB::table('cms_news');
        $data['type'] = DB::table('cms_type')->where('display',1)->limit(6)->get();
        $data['news'] = $res->where('id',$id)->first();
        $data['news_click'] = $res->where('status',1)->orderBy('click','desc')->limit(5)->get();

        $data['news_up'] = $res->where('status',1)->orderBy('id','desc')->limit(5)->get();
        $res->where('id',$id)->increment('click');
        return view('home.blog_show',compact('data'));
    }


    /**
     * 产品中心主页
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function product()
    {
        return view('home.product_list');
    }

    /**
     * 产品分类
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function products($name)
    {
        return view('home.product_list');
    }
    
    /**
     * 产品详情
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        return view('home.show_product');
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
