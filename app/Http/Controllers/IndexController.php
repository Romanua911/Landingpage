<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Service;
use App\Portfolio;
use App\People;
use App\Client1;
use Symfony\Component\HttpKernel\Client;

class IndexController extends Controller
{
    //

    public function execute(Request $request){

        $pages = Page::all();
        $portfolios = Portfolio::all();
        $services = Service::all();
        $peoples = People::all();
        $clients = Client1::all();

        $menu = array();
        foreach ($pages as $page){
            $item = array('title'=>$page->name,'alias'=>$page->alias);
            array_push($menu,$item);
        }
        $item = array('title'=>'Services','alias'=>'service');
        array_push($menu,$item);

        $item = array('title'=>'Clients','alias'=>'clients');
        array_push($menu,$item);

        $item = array('title'=>'Portfolio','alias'=>'Portfolio');
        array_push($menu,$item);

        $item = array('title'=>'Team','alias'=>'team');
        array_push($menu,$item);

        $item = array('title'=>'Contact','alias'=>'contact');
        array_push($menu,$item);

        return view('site.index',array(
            'menu'=>$menu,
            'pages'=>$pages,
            'services'=>$services,
            'portfolios'=>$portfolios,
            'peoples'=>$peoples,
            'clients'=>$clients,
        ));

    }
}
