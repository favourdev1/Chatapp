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
            return response()->json(['errors' => $validator->errors()], 400);
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
                return response()->json(['message' => 'You are already friends with this user']);
            } else {
                // Create a new friendship
                $friendship = new Friends();
                $friendship->userid_1 = $user->id;
                $friendship->userid_2 = $friend->id;
                $friendship->save();

                return response()->json(['message' => 'Friend added successfully']);
            }
        } else {
            return response()->json(['message' => 'User or friend not found'], 404);
        }
    }


    /**
     * Displys all my friends 
     */
    public function showFriends(string $id)
    {
        $friend = Friends::where(['userid_1', Auth::id()])->orWhere(['userid_2', Auth::id()]);
        if ($friend) {
            return response($friend);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}