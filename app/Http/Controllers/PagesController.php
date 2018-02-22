<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    /*public  function home()
    {
      $messages =
      [
        [
          'id'=> 1,
          'content' =>'Mensaje 1',
          //'content' => simplexml_load_file('http://www.lipsum.com/feed/xml?amount=10&what=words&start=0')->lipsum,
          'image'=> 'img/3382.jpeg',
        ],
        [
          'id'=> 2,
          'content' =>'Mensaje 2',
          'image'=> 'img/3383.jpeg',
        ],
        [
          'id'=> 3,
          'content' =>'Mensaje 3',
          'image'=> 'img/3384.jpeg',
        ],
        [
          'id'=> 4,
          'content' =>'Mensaje 4',
          'image'=> 'img/338.jpeg',
        ]
      ];
      /*$links =[
        'http://www.google.com.ar' =>'Buscador',
        'http://www.educar.ar' =>'Educar',
      ];
      //dd($messages);
        return view('welcome2',[
          //'messages' => []
          'messages' => $messages
          //'links'=>$links,
          //'teacher'=>'Claudio Sosa'
        ]);
    }*/

    public function pages($page=null)
    {
      if ($page) {
        return view($page);
      }else{
        return view('inicio');
      }
      //dd($page);


    }
}
