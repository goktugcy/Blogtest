<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Article;
use App\Models\Category;
use App\Models\Contact;

class HomeController extends Controller
{
  
    public function index()
    {
        
        $data['articles']=Article::with('getCategory')->where('status',1)->whereHas('getCategory',function($query){
        $query->where('status',1); })->orderBy('created_at','DESC')->paginate(4);
        $data['articles']->withPath(url('sayfa'));
        view()->share('categories',Category::where('status',1)->get());
        return view('front.home',$data);

    }

    public function single($category,$slug)
    {
    $category=Category::whereSlug($category)->first() ?? abort(403,'Böyle bir kategori bulunamadı.');
    $data['article']=Article::whereSlug($slug)->whereCategoryId($category->id)->first() ?? abort(403,'Böyle bir yazı
    bulunamadı.');
     view()->share('categories',Category::where('status',1)->get());
    return view('front.single',$data);
    }
    
    public function category($slug)
    {
    $category=Category::whereSlug($slug)->first() ?? abort(403,'Böyle bir kategori bulunamadı.');
    $data['category']=$category;
    $data['articles']=Article::where('category_id',$category->id)->where('status',1)->orderBy('created_at','DESC')->paginate(10);
     view()->share('categories',Category::where('status',1)->get());
    return view('front.category',$data);
    }

   public function contactpost(Request $request)
   {
       $rules=
       [
       'name'=>'required|min:5',
       'email'=>'required|email',
       'title'=>'required',
       'message'=>'required|min:10'
       ];
       $validate=Validator::make($request->post(),$rules);

       if($validate->fails())
       {
       toastr()->error('Hata!', 'Mesaj Gönderilemedi.');
       return redirect()->back()->withErrors($validate)->withInput();
       }
       $contact = new Contact();
       $contact->name=$request->name;
       $contact->email=$request->email;
       $contact->title=$request->title;
       $contact->message=$request->message;
       $contact->save();
       toastr()->success('Başarılı!', 'Mesajınız başarıyla gönderildi.');
       return redirect()->back();

       
   }  
   
}

