<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\Admin\Users;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use DB;

/**
 * Class ProfileController
 * @package App\Http\Controllers\Admin\Users
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     * ProfileController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * how the application dashboard.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $user = Users::find(Auth::id());
        return view('adminlte::users/view',  ["user" => $user]);
    }

    /**
     * Update the specified resource in storage.
     * @param $id
     * @param Requests\Admin\UserFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, Requests\Admin\UserFormRequest $request){
        $user = Users::find($id);
        $user->name = $request->input('name');
        $user->save();
        if($user->save()){
            $message = 'Update success!';
        };

        return redirect()->route('myprofile')->with(['msg' => $message]);
    }

    /**
     * Change User Password
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePassword(Request $request){
        if(Auth::Check()){
            $request_data = $request->All();
            $validator = $this->admin_credential_rules($request_data);
            if($validator->fails()){
                return redirect()->route('myprofile')->with(['errors' => $validator->getMessageBag()]);
            }else{
                $current_password = Auth::User()->password;
                if(\Hash::check($request_data['current-password'], $current_password)){
                    $user_id = Auth::User()->id;
                    $obj_user = Users::find($user_id);
                    $obj_user->password = \Hash::make($request_data['password']);;
                    $obj_user->save();
                    return redirect()->route('myprofile')->with(['msg' => 'Password updated with success!']);
                }else{
                    return redirect()->route('myprofile')->with(['errors' => $validator->getMessageBag()->add('errors', 'Please enter correct current password')]);
                }
            }
        }else{
            return redirect()->to('/');
        }
    }

    /**
     * Validate password fields
     * @param array $data
     * @return mixed
     */
    public function admin_credential_rules(array $data)
    {
        $messages = [
            'current-password.required' => 'Please enter current password',
            'password.required' => 'Please enter password',
        ];

        $validator = Validator::make($data, [
            'current-password' => 'required',
            'password' => 'required|same:password',
            'password_confirmation' => 'required|same:password',
        ], $messages);

        return $validator;
    }

    /**
     * Upload admin user profile image
     * @return \Illuminate\Http\RedirectResponse
     */
    public function upload(){
        $file = array('image' => Input::file('avatar'));
        // setting up rules
        $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
        // doing the validation, passing post data, rules and the messages
        $validator = Validator::make($file, $rules);
        if ($validator->fails()) {
            return redirect()->route('myprofile')->with(['errors' => $validator->errors()]);
        }else{
            // checking file is valid.
            if (Input::file('avatar')->isValid()) {
                $path = 'public/uploads/users/'.Auth::User()->id.'/avatar/';
                Storage::makeDirectory($path, $mode = 0777, true);
                Storage::disk('local')->put($path,  Input::file('avatar'));
                $user = Users::find(Auth::User()->id);
                $createdFileName = Storage::files($path);
                $pathFile = str_replace('public/','',$createdFileName[0]);
                $user->avatar = '/storage/'.$pathFile;
                if ($user->save()){
                    return redirect()->route('myprofile')->with(['msg' => 'Image was uploaded with success']);
                }
            }else{
               exit('error');
            }
        }
    }
}