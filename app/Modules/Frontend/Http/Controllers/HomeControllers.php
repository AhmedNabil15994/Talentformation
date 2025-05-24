<?php namespace App\Http\Controllers;

use App\Entities\Slider;
use App\Entities\Section;
use App\Entities\Category;
use App\Entities\Page;
use App\Entities\Blog;
use App\Entities\Service;
use App\Entities\Client;
use App\Entities\Testimonial;
use Session;
use Illuminate\Http\Request;

class HomeControllers extends Controller {

    use \TraitsFunc;

    public function index(){
        $sliders = Slider::active()->wherePageId(1)->get();
        $approachSections = Section::active()->wherePageId(1)->where('title_en','Our Approach')->get();
        $blogs = Blog::active()->where('category_id',null)->take(5)->inRandomOrder()->get();
        $services = Service::active()->where('category_id','>=',1)->take(5)->inRandomOrder()->get();
        $clients = Client::active()->orderBy('sort','ASC')->get();
        $testimonials = Testimonial::active()->orderBy('id','ASC')->get();
        return view('Frontend::home',compact('sliders','approachSections','services','blogs','clients','testimonials'));
    }

    public function about(){
        $sections = Section::active()->wherePageId(2)->get();
        return view('Frontend::about',compact('sections'));
    }

    public function changeLang(Request $request){
        if(isset($request->lang) && in_array($request->lang, ['ar','en'])){
            if(!Session::has('locale')){
                Session::put('locale', $request->lang);
            }else{
                Session::forget('locale');
                Session::put('locale', $request->lang);
            }
        }
        return redirect()->back();
    }
}
