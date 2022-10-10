<?php

namespace App\Http\Controllers\Company\Auth;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Providers\RouteServiceProvider;
use App\Models\Industry;
use App\Models\Prefecture;
use App\Models\City;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $industries = Industry::all();
        $prefectures = Prefecture::all();
        $cities = City::all();

        // $url = "https://www.land.mlit.go.jp/webland/api/CitySearch?area=" . $request->prefecture_id;
        // $json = file_get_contents($url);
        // $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        // $arr = json_decode($json, true);
        // return $arr;

        return view(
            'company.auth.register',
            [
                'industries' => $industries,
                'prefectures' => $prefectures,
                'cities' => $cities,
            ]
        );
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:companies'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'president_family_name' => ['required', 'string', 'max:100'],
            'president_last_name' => ['required', 'string', 'max:100'],
            'president_family_name_read' => ['required', 'string', 'regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u', 'max:100'],
            'president_last_name_read' => ['required', 'string', 'regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u', 'max:100'],
            'industry_id' => ['required'],
            'phone' => ['required', 'numeric', 'digits_between:10,11'],
            'employee' => ['required', 'integer'],
        ]);

        $user = Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'president_family_name' => $request->president_family_name,
            'president_last_name' => $request->president_last_name,
            'president_family_name_read' => $request->president_family_name_read,
            'president_last_name_read' => $request->president_last_name_read,
            'industry_id' => $request->industry_id,
            'phone' => $request->phone,
            'employee' => $request->employee,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::COMPANY_HOME);
    }
}
