<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class IndexController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view =isset($_GET['v'])? $_GET['v'] : 'index';
        if($view == 'activity-detail') {//活动详情页特殊处理，view为和id的组合
            $template = $view . '-' . $_GET['id'];
            return view($template, ["view"=>$view]);
        } 
        return view($view, ["view"=>$view]);
        
        
    }
}