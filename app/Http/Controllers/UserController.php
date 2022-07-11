<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
 
class UserController extends Controller
{
    /**
     * Show the form to create a new blog post.
     *
     * @return \Illuminate\View\View
     */
 
    /**
     * Store a new blog post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function finish(Request $request)
    {
        // Validate and finish user profile
         $user = Auth::user();
        if ($user->current_profile_step == 1) {
        	#Must be new account!
        	$validated = $request->validate([
		        'fname' => 'required|max:150|alpha_num',
		        'lname' => 'required|max:150|alpha_num',
		        'mname' => 'nullable|max:150|alpha_num',
		        'gender' => 'required|max:1|numeric',
		        'country_code' => 'required|max:6|alpha_num',
		        'telephone' => 'required|max:15|alpha_num',
		        'postal_address' => 'required|max:250',
		        'account_type' => 'required|numeric',
		    ]);
        }

        //Update user profile and proceed
        $user = User::find(Auth::id());
        $new_profile_step = $user->current_profile_step + 1;
        $user->fname = $request->fname;
        $user->mname = $request->mname;
        $user->lname = $request->lname;
        $user->gender = $request->gender;
        $user->country_code = $request->country_code;
        $user->telephone = $request->telephone;
        $user->postal_address = $request->postal_address;
        $user->role = $request->account_type;
        $user->current_profile_step = $new_profile_step;
        $user->profile_complete = 1;
        $user->save();

        //Finished updating... ./Return redirect
        return redirect(route('welcome'));

    }
}