<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use Validator, Hash, Auth, Session, Redirect;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('account.profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        if (!empty($request->get('password'))) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'new_confirm_password' => 'required|same:password'
            ]);

        } else {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required'
            ]);
        }

        if ($validator->fails()) {
            Session::flash('alert-danger', 'Enter correct form fields.');
            return Redirect::back()->withInput();
        }

        if (!Hash::check($request->get('current_password'), Auth::user()->password)) {
            Session::flash('alert-danger', 'Incorrect current password');
            return back();
        }

        if (!$request->has('booked_call_changed')) {
            $request->request->add([
                'booked_call_changed' => 0
            ]);
        }

        if (!$request->has('new_call_booked')) {
            $request->request->add([
                'new_call_booked' => 0
            ]);
        }

        if (!$request->has('questionnaire_completed')) {
            $request->request->add([
                'questionnaire_completed' => 0
            ]);
        }

        if ($request->has('p_image')) {
            $imageName = time() . '.' . $request->p_image->extension();

            $request->p_image->move(public_path('profile_image'), $imageName);

            $request->request->add([
                'profile_image' => $imageName
            ]);
        }

        if (empty($request->get('password'))) {
            User::where('email', $request->get('email'))->update($request->except('_token', 'slim', 'profile_image_64', 'current_password', 'p_image', 'new_confirm_password', 'password'));
        } else {
            $request['password'] = Hash::make($request->get('password'));
            User::where('email', $request->get('email'))->update($request->except('_token', 'slim', 'profile_image_64', 'current_password', 'p_image', 'new_confirm_password'));
        }
        Session::flash('alert-success', 'Account Successfully Updated.');
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
