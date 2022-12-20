<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Cart;
use App\Models\Post;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Categorypost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use App\Notifications\CustomerForgotPassword;

class FrontendPagesController extends Controller
{
    // Show Home Page
    public function ShowHomePage()
    {
        $posts = Post::paginate(10);
        return view('frontend.pages.home', [
            'form_type'         => 'create',
            'posts'                  => $posts
        ]);

    }


    // Show Blog Page
    public function ShowBlogPage()
    {
       return view('frontend.pages.blog');
    }

    public function showSinglepostPage($slug)
    {
        $latest = Post::where('status', true)->latest()->get()->take(5);

        $post = Post::where('slug', $slug)->first();
        $category = Categorypost::where('status', true) -> latest() ->get();
        $tag = Tag::where('status', true)->get();
        return view('frontend.pages.blog', [
            'single_post' => $post,
            'category' => $category,
            'taglist' => $tag,
            'latest' => $latest,
        ]);
    }

    public function ShowUserLoginPage()
    {
        return view('frontend.pages.login');
    }
   
    public function UserLogout()
    {
        Auth::guard('Customer') -> logout();
        Alert::success('Thanks for Staying with us.', 'See you again.');
        return redirect() -> route('home.page');
    }
    
    public function UserAccount()
    {
    
        if( isset( Auth::guard('Customer') -> user() ->id )){

            $id = Auth::guard('Customer')->user()->id;
            $order = Order::where('user_id', $id) ->get();
            return view('frontend.pages.myaccount', compact('order'));

        }else{
            Alert::warning('Please Log in!', 'And buy the product');
            return redirect() ->route('user.login.page');
        }

    }

    public function AddCart(Request $request, $id)
    {
        // return $request->all();
        // Validate
        $this->validate($request,[
            'quantity'  =>'required'
        ]);

        if( isset( Auth::guard('Customer') -> user() ->id )){
            $user = Auth::guard('Customer') -> user();
            $product = Post::find($id);
            $cart = new Cart;

            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->mobile;
            $cart->city=$user->city;
            $cart->address=$user->address;
            $cart->country=$user->country;
            $cart->user_id=$user->id;

            $cart->product_title=$product->title;            
            $cart->sprice=$product->sprice * $request->quantity;
            $cart->photo=$product->featured;
            $cart->product_id=$product->id;

            $cart->quantity=$request->quantity;
            $cart->save();

            Alert::success('Product added successfully', 'We have added product to the Cart.');
            return redirect() -> back();


        }else{
            return redirect() ->route('user.login.page');
        }
    }

    public function ShowCart()
    {
        if( isset( Auth::guard('Customer') -> user() ->id )){
        $id = Auth::guard('Customer') -> user() ->id;
        $carts = Cart::where('user_id', $id) ->get();
        $latest = Post::where('status', true)->latest()->get()->take(5);
        return view('frontend.pages.showcart',compact('carts', 'latest'));
        }else{
            Alert::warning('Please Log in!', 'And buy the product');
            return redirect() ->route('user.login.page');
        }
    }

    public function RemoveCart($id)
    {
        $cart = Cart::findOrFail($id);
        $cart ->delete();
        Alert::success('Product Removed', 'You have Remove a Product From the Cart');
        return redirect() ->route('show.cart') ->with('success', 'Your Added Product Remove Successfully.');
    }

    public function ShowCheckOutPage()
    {

        if( isset( Auth::guard('Customer') -> user() ->id )){
            $id = Auth::guard('Customer') -> user() ->id;
            $carts = Cart::where('user_id', $id) ->get();
            return view('frontend.pages.checkout',compact('carts'));
        }else{
            Alert::warning('Please Log in!', 'And buy the product');
            return redirect() ->route('user.login.page');
        }
       
    }

    public function UserAccountProfile(Request $request)
    {
         // Patient Profile Validate

         $this -> validate($request, [
            'fullname'              =>'required',
            'email'                     =>'required',
            'phone'                    =>'required',
            'city'                          =>'required',
            'address'                   =>'required',
            'zip_code'                  =>'required',
            'country'                   =>'required',
        ]);

     
        $user = Customer::findOrFail( Auth::guard('Customer') ->user() ->id );
        $user->update([
            'fullname'                  =>$request->fullname,
            'email'                         =>$request->email,
            'phone'                        =>$request->phone,
            'city'                              =>$request->city,
            'address'                       =>$request->address,
            'zip_code'                      =>$request->zip_code,
            'country'                           =>$request->country,
        ]);
        Alert::success('Your Profile Data Updated Successfully', 'Done');
        return back() -> with('success', 'Your Profile Data Update Successfully');

    }

    public function UserCashOrder(Request $request)
    {

        // validate
        $this->validate($request,[
            'email'                      =>'required',
            'phone'                      =>'required',
            'city'                          =>'required',
            'address'                  =>'required',
            'country'                   =>'required',
            'zip_code'                 =>'required',
            'delivery_charge'                 =>'required',
            'delivery_status'                 =>'required',
            'delivery_status'                 =>'required',
        ]);

        

        if( isset( Auth::guard('Customer') -> user() ->id )){
            $user = Auth::guard('Customer') ->user();
            $userid = $user->id;

            $data = Cart::where('user_id', $userid)->get();
            
            foreach( $data as $data ){
                $order = new Order;

                $order->name=$request->fullname;
                $order->email=$data->email;
                $order->phone=$request->phone;
                $order->city=$request->city;
                $order->address=$request->address;
                $order->country=$request->country;
                $order->zip_code=$request->zip_code;
                $order->product_title=$data->product_title;
                $order->sprice=$data->sprice;
                $order->quantity=$data->quantity;
                $order->photo=$data->photo;
                $order->product_id=$data->product_id;
                $order->user_id=$data->user_id;
                $order->ordernote=$request->ordernote;
                $order->delivery_charge=$request->delivery_charge;
                $order->payment_status='Cash On Delivery';
                $order->delivery_status='processing';
                $order->save();

                $cart_id =$data->id;
                $cart=Cart::find($cart_id);
                $cart->delete();

            }

            Alert::success('Your Order Completed!', 'We will notify you. Very soon.');
            return redirect() -> route('home.page');


        }else{
            Alert::warning('Please Log in!', 'And buy the product');
            return redirect() ->route('user.login.page');
        }
    }

    public function ShowOrderProduct($id)
    {
        $order =Order::findOrFail($id);
        return view('frontend.pages.user-product', compact('order'));
    }

    public function CartCount()
    {
        $cartcount = Cart::where('user_id', Auth::guard('Customer') ->user()->id)->count();
        return response() ->json(['count' => $cartcount]);
    }

        public function QuickView($id)
    {
        $product = Post::findOrFail($id);
        return view('frontend.pages.home', [
            'form_type'         => 'edit',
            'product'              => $product
        ]);       

    }

    public function ShopPageView()
    {
        $posts = Post::paginate(10);
        $category = Categorypost::paginate(10);
        $tags = Tag::paginate(10);
        return view('frontend.pages.shop-page',compact('posts', 'category', 'tags'));
    }

    /**
     * Blog Post By Category
     */
    public function ShowBlogPostByCategory($slug)
    {
        $category =  Categorypost::where('slug',  $slug) -> first();
        $posts = $category -> posts;
        return view('frontend.pages.shop-page',[
            'posts'          => $posts,
        ]);
    }

    /**
     * Blog Post By Tag
     */
    public function ShowBlogPostByTag($slug)
    {
        $tag =  Tag::where('slug',  $slug) -> first();
        $posts = $tag -> posts;
        return view('frontend.pages.shop-page',[
            'posts'          => $posts,
        ]);
    }

    // Customer Forgot Password
    public function ShowCustomerForgotPassword()
    {
        return view('frontend.forgot.forgot');
    }

    public function CustomerForgotPassword(Request $request)
    {
        $this -> validate($request, [
            'email'     =>'required|email'
        ]);

        $manage_data = Customer::where('email', $request -> email) -> first();

        if( $manage_data ){
            $token = md5( time(). rand() );
            $manage_data ->update([
                'access_token'  => $token
            ]);
            $manage_data ->notify(new CustomerForgotPassword($manage_data));
            Alert::success('Success', 'Please check your email & Click the Link');
            return redirect() -> route('user.login.page'); 
        }else{
            Alert::error('We can not find your email', 'Please enter your valid email');
            return back();
        }
    }


          /**
         * Customer Password Link
         */
         public function CustomerResetPasswordLink($token =null, $email =null)
         {
             if( !$token && !$email ){
                Alert::error('Error', 'Acces token or Email not found');
                 return redirect() -> route('user.login.page');
             }
             
             if( $token && $email ){
                 $manage_data = Customer::where('access_token', $token) -> first();
                 $manag_data_email = Customer::where('email', $email) -> first();
     
                 if( $manage_data && $manag_data_email  ){
                     return view('frontend.forgot.reset', compact('email'));
     
                 }else{
                    Alert::error('Error', 'Acces token or Email not match');
                     return redirect() -> route('user.login.page');
                 }
     
             }
     
         }


         public function CustomerResetPassword(Request $request)
         {
             $this -> validate($request, [
                 'password'    =>'required|confirmed'
             ]);
     
             $manage_data = Customer::where('email', $request -> email) -> first();
     
             if( $manage_data ){
                 $manage_data ->update([
                     'access_token'  => null,
                     'password'      => Hash::make( $request -> password )
                 ]);
                 Alert::success('success', 'Your Forgot Password Successfully Change');
                 return redirect() -> route('user.login.page'); 
             }
     
              
     
     
         }



    

    
}
