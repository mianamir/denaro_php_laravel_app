<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\Access\User\User;
use App\Models\Admin\Author;
use App\Models\Admin\Book;
use App\Models\Admin\BookType;
use App\Models\Admin\Brand;
use App\Models\Admin\Car;
use App\Models\Admin\CarDoor;
use App\Models\Admin\Category;
use App\Models\Admin\Chapter;
use App\Models\Admin\Contact;
use App\Models\Admin\Employee;
use App\Models\Admin\Gallery;
use App\Models\Admin\HomeGallery;
use App\Models\Admin\Page;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Admin\CourseToTeach;
use Flash;

/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */

    public function index()
    {
        $content = Page::where('name', 'home')->first();
        \Meta::set('title', $content->title);
        \Meta::set('description', $content->meta_description);
        \Meta::set('image', asset($content->image));
        return view('frontend.site.index', compact('content'));
    }

    public function chairmanMessage()
    {
        $content = Page::where('name', 'chairman_message')->first();
        \Meta::set('title', $content->title);
        \Meta::set('description', $content->meta_description);
        \Meta::set('image', asset($content->image));
        return view('frontend.site.chairman-message', compact('content'));
    }
    public function coreValues()
    {
        $content = Page::where('name', 'core_values')->first();
        \Meta::set('title', $content->title);
        \Meta::set('description', $content->meta_description);
        \Meta::set('image', asset($content->image));
        return view('frontend.site.core-values', compact('content'));
    }

    public function ourDedicatedStaff()
    {
        $content = Page::where('name', 'our_dedicated_staff')->first();
        \Meta::set('title', $content->title);
        \Meta::set('description', $content->meta_description);
        \Meta::set('image', asset($content->image));
        return view('frontend.site.our-dedicated-staff', compact('content'));
    }

//    public function imageGalleryCategory()
//    {
//        $content = Page::where('name', 'image_gallery')->first();
//        \Meta::set('title', $content->title);
//        \Meta::set('description', $content->meta_description);
//        \Meta::set('image', asset($content->image));
//        return view('frontend.site.image-gallery-category', compact('content'));
//    }

//    public function imageGallery($id)
//    {
//        $content = Page::where('name', 'image_gallery')->first();
//        \Meta::set('title', $content->title);
//        \Meta::set('description', $content->meta_description);
//        \Meta::set('image', asset($content->image));
//        $galleries = Gallery::where('cat_id', $id)->orderBy('order_image','ASC')->get();
//        $category = HomeGallery::find($id);
//        return view('frontend.site.image-gallery', compact('content','galleries', 'category'));
//    }

    public function video_gallery_search()
    {
        $content = Page::where('name', 'video_gallery')->first();
        return view('frontend.site.video-gallery-search', compact('content'));
    }

    public function about()
    {
        $content = Page::where('name', 'about')->first();
        return view('frontend.site.about', compact('content'));
    }

    public function faq()
    {
        $content = Page::where('name', 'faq')->first();
        return view('frontend.site.faq', compact('content'));
    }

    public function client()
    {
        $content = Page::where('name', 'client')->first();

        return view('frontend.site.client', compact('content'));
    }

    public function exclusive_partners()
    {
        $content = Page::where('name', 'exclusive_partners')->first();

        return view('frontend.site.exclusive-partners', compact('content'));
    }

    public function image_gallery_category1()
    {
        $content = Page::where('name', 'image_gallery_category1')->first();
        return view('frontend.site.image-gallery-category1', compact('content'));
    }

    public function image_gallery1($image_gallery_category_id)
    {
        $content = Page::where('name', 'image_gall')->first();
        $image_galleries = Brand::where('brand_type_id', $image_gallery_category_id)->get();
        return view('frontend.site.image-gallery1', compact('content', 'image_galleries'));
    }

    public function sectors_we_deals_search($id)
    {
        $content = Page::where('name', 'sectors_we_deals_search')->first();
        $sectors_we_deals_projects = Category::where('parent_id', (int)$id)->get();
        return view('frontend.site.sectors-we-deals-search', compact('content', 'sectors_we_deals_projects'));
    }

    public function industrial_solutions_search($id)
    {
        $content = Page::where('name', 'industrial_solutions_search')->first();
        $industrial_solutions_search_projects = Category::where('parent_id', (int)$id)->get();
        return view('frontend.site.industrial-solutions-search', compact('content', 'industrial_solutions_search_projects'));
    }

    public function products_services_search($id)
    {
        $content = Page::where('name', 'products_services_search')->first();
        $products_services_search_projects = Category::where('parent_id', (int)$id)->get();
        return view('frontend.site.products-services-search', compact('content', 'products_services_search_projects'));
    }


    public function service()
    {
        $content = Page::where('name', 'service')->first();

        return view('frontend.site.service', compact('content'));
    }

    public function whatWeDo()
    {
        $content = Page::where('name', 'what-we-do')->first();

        return view('frontend.site.what-we-do', compact('content'));
    }
    public function download()
    {
        $content = Page::where('name', 'downloads')->first();

        return view('frontend.site.download', compact('content'));
    }

    public function new_logout(Request $request){
        dd('ok');
            \Auth::logout();
            \Session::flush();
            return redirect(route('frontend.index'));

        }

    public function contact()
    {
        $content = Page::where('name', 'contact_form')->first();

        $contact = Contact::first();

        return view('frontend.site.contact', compact('content', 'contact'));
    }

    public function terms_of_service()
    {
        $content = Page::where('name', 'terms_of_service')->first();
//        dd($content);
        \Meta::set('title', $content->title);
        \Meta::set('description', $content->meta_description);
        \Meta::set('image', asset($content->image));

        return view('frontend.site.terms_of_service', compact('content'));
    }

    public function privacy_policy()
    {
        $content = Page::where('name', 'privacy_policy')->first();
//        dd($content);
        \Meta::set('title', $content->title);
        \Meta::set('description', $content->meta_description);
        \Meta::set('image', asset($content->image));

        return view('frontend.site.privacy_policy', compact('content'));
    }

    public function vision()
    {
        $content = Page::where('name', 'vision_mission')->first();


        return view('frontend.site.vision-mission', compact('content'));
    }

    public function director_message()
    {
        $content = Page::where('name', 'director_message')->first();


        return view('frontend.site.director-message', compact('content'));
    }

    public function careers()
    {
        $content = Page::where('name', 'careers')->first();

        return view('frontend.site.careers', compact('content'));
    }

    public function news($slug)
    {

        $page = \App\Models\Admin\News::findBySlug($slug);
        \Meta::set('title', $page->title);
        \Meta::set('description', $page->meta_description);

        return view('frontend.site.news')->with('page', $page);

    }


    public function emailSend(Request $request)
    {

        $fullname = $request->get("fullname");
        $email = $request->get("email");
        $website = $request->get("website");
        $website = $request->get("website");
        // Get Email from User Table
        $user = User::find(1);

        \Mail::send('emails.contact_form',
            [
                'fullname' => $request->get("fullname"),
                'email' => $request->get("email"),
                'website' => $request->get("website"),
                'comment' => $request->get("comment")
            ], function ($m) use ($user) {

            $m->to($user->email, 'DENARO International Traders');
            $m->subject('New Inquiry From DENARO');
            $m->from($user->email,'DENARO International Traders');

        });


        $fail = Mail::failures();
        if(!empty($fail)) throw new \Exception('Could not send message to '.$fail[0]);



        $request->session()->flash('flash_message', 'Your message was successfully sent!');
        return redirect()->back();
    }

    public function galleryCategory($category)
    {

        $images = Gallery::where('category', '=', $category)->get();
        $page = \App\Models\Admin\Page::whereName('gallery')->first();
        \Meta::set('title', $page->title);
        \Meta::set('description', $page->meta_description);
        \Meta::set('image', asset($page->image));

        return view('frontend.site.gallery_detail')
            ->with('page', $page)
            ->with('images', $images);

    }




    public function searchStudentResult(Request $request)
    {

        $regNo = $request->get('reg_no');
        if ($regNo == "") {
            $request->session()->flash('reg_no', 'Student registration no is required');
            return redirect()->back()->withInput();
        }

//        $dob = $request->get('dob');
//        if ($dob == "") {
//            $request->session()->flash('doob', 'Student date of birth is required');
//            return redirect()->back()->withInput();
//        }



        $content = Page::where('name', 'student_marks')->first();
        \Meta::set('title', $content->title);
        \Meta::set('description', $content->meta_description);
        \Meta::set('image', asset($content->image));



        if ($regNo != null ){
            $student = Employee::where('reg_no', $regNo)->first();

            if ($student != null){
                $marks = CarDoor::where('student_id',$student->id)->get();
                return view('frontend.site.student-marks', compact('content','student', 'marks'));
            }else{
                $request->session()->flash('not_found', 'Student marks not found');
                return redirect()->back()->withInput();

            }

        }else{
            return view('frontend.site.student-result', compact('content'));
        }




    }

    public function search(Request $request)
    {

        $books = Book::orderBy('id', 'DESC');

        if ($request->category_id != '')
            $books->where('category_id', '=', $request->category_id);
        if ($request->group_id != '')
            $books->where('group_id', '=', $request->group_id);
        if ($request->author != '')
            $books->where('author', 'like', '%' . $request->author . '%');
        if ($request->topic != '')
            $books->where('details', 'like', '%' . $request->topic . '%');

        $books = $books->get();
        return view('frontend.site.books')->with('books', $books);

    }


    public function searchAll(Request $request)
    {
        if ($request->q) {
            $q = $request->q;
            $books = Book::where('name', 'like', '%' . $q . '%')
                ->orWhere('details', 'like', '%' . $q . '$q')
                ->orWhere('book_code', 'like', '%' . $q . '$q')
                ->orWhere('author', 'like', '%' . $q . '$q');


            return view('frontend.site.books')->with('books', $books);
        }

        $books = Book::all();

        return view('frontend.site.books')->with('books', $books);

    }

}
