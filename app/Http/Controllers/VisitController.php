<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    // 訪問先一覧
    public function index(){
        return view('visits.index');
    }

    // 訪問先詳細
    public function show(){
        return view('visits.show');
    }

    // 旅登録画面
    public function create(){
        return view('visits.create');
    }

    // 旅登録処理
    public function store(){

    }

}
