<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
 

    public function gonki(Request $request)
    {
        return view('gonki');
    }
    public function horror(Request $request)
    {
        return view('horror');
    }
    public function index(Request $request)
    {
        return view('index');
    }
    public function korzina(Request $request)
    {
        return view('korzina');
    }
    public function mmo(Request $request)
    {
        return view('mmo');
    }
    public function novinki(Request $request)
    {
        return view('novinki');
    }
    public function shooters(Request $request)
    {
        return view('shooters');
    }
    public function skidki(Request $request)
    {
        return view('skidki');
    }
    public function sport(Request $request)
    {
        return view('sport');
    }
	public function t1(Request $request)
    {
        return view('t1');
    }
	public function t2(Request $request)
    {
        return view('t2');
    }
	public function t3(Request $request)
    {
        return view('t3');
    }
	public function t4(Request $request)
    {
        return view('t4');
    }
	public function t5(Request $request)
    {
        return view('t5');
    }
	public function t6(Request $request)
    {
        return view('t6');
    }
	public function t7(Request $request)
    {
        return view('t7');
    }
	public function t8(Request $request)
    {
        return view('t8');
    }
	public function t9(Request $request)
    {
        return view('t9');
    }
	public function t10(Request $request)
    {
        return view('t10');
    }
	public function t11(Request $request)
    {
        return view('t11');
    }
	public function t12(Request $request)
    {
        return view('t12');
    }
	public function t13(Request $request)
    {
        return view('t13');
    }
	public function t14(Request $request)
    {
        return view('t14');
    }
	public function t15(Request $request)
    {
        return view('t15');
    }
	public function t16(Request $request)
    {
        return view('t16');
    }
	public function t17(Request $request)
    {
        return view('t17');
    }
	public function t18(Request $request)
    {
        return view('t18');
    }
	public function t19(Request $request)
    {
        return view('t19');
    }
	public function t20(Request $request)
    {
        return view('t20');
    }
	public function avtorizacia(Request $request)
    {
        return view('avtorizacia');
    }
	public function registracia(Request $request)
    {
        return view('registracia');
    }
	
	public function getBaskets(Request $request)
    {
        return (new BasketController())->show();
    }

}
