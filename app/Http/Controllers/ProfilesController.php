<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image;
use App\Profile;
class ProfilesController extends Controller
{
    public function index(User $user)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        
        return view('profiles.index', compact('user', 'follows'));
    }
    public function edit(\App\User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profiles/edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $this->authorize('update', $user->profile);
        $profile = Profile::where('user_id', '=', $user->id)->get()[0];


        $profile->title = $request->title;
        $profile->description = $request->description;
        $profile->url = $request->url;
        $profile->save();
        return redirect("/profile/{$user->id}");
    }
}
