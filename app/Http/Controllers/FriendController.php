<?php

namespace App\Http\Controllers;

use App\Models\Friends;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Validator;

class FriendController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        // Get all users
        $users = User::all();

        // Get the IDs of users who are friends with the authenticated user
        $friendsIds = Friends::where('userid_1', Auth::id())
            ->orWhere('userid_2', Auth::id())
            ->pluck('userid_1', 'userid_2')
            ->toArray();

        // Pass the users and their friend status to the view


        return view('chat.layouts.friends', compact('users', 'friendsIds'));
    }



    public function addFriend(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'friend_id' => 'required|exists:users,id',
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        $user = User::find($request->input('user_id'));
        $friend = User::find($request->input('friend_id'));
    
        if ($user && $friend) {
            // Check if a friendship already exists between the two users
            $existingFriendship = Friends::where([
                ['userid_1', $user->id],
                ['userid_2', $friend->id]
            ])->orWhere([
                ['userid_1', $friend->id],
                ['userid_2', $user->id]
            ])->first();
    
            if ($existingFriendship) {
                // A friendship already exists
                return back()->with('error', 'You are already friends with this user');
            } else {
                // Create a new friendship
                $friendship = new Friends();
                $friendship->userid_1 = $user->id;
                $friendship->userid_2 = $friend->id;
                $friendship->save();
    
                return back()->with('message', 'Added to friend list successfully');
            }
        } else {
            // User or friend not found
            return back()->with('error', 'User or friend not found');
        }
    }
    
    


    /**
     * Unfriends a particulr person
     */

    public function Unfriend(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'friend_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            $response = ['errors' => $validator->errors()];
            return back()->with($response);
        }



        $user = User::find($request->input('user_id'));
        $friend = User::find($request->input('friend_id'));

        if ($user && $friend) {
            // Find the existing friendship and delete it
            $existingFriendship = Friends::where(function ($query) use ($user, $friend) {
                $query->where('userid_1', $user->id)
                    ->where('userid_2', $friend->id);
            })->orWhere(function ($query) use ($user, $friend) {
                $query->where('userid_1', $friend->id)
                    ->where('userid_2', $user->id);
            })->first();
    
            if ($existingFriendship) {
                $existingFriendship->delete();
              
                return back()->with('message', 'Friend removed successfully');
            } else {
                
                return back()->with(['error', 'Friendship not found']);
            }
        } else {
            return back()->with('error', 'User or friend not found');
        }
    
      
    }
}