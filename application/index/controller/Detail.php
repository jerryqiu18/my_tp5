<?php

namespace app\index\controller;

class Detail
{
    public function index(){
        return  config('site_name');
    }
}