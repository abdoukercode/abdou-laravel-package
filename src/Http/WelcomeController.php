<?php


namespace Abdou\Welcome\Http;



class WelcomeController
{
    public function welcome($name = null ) {
 /*        if(isset($name)){
            echo 'hello ' . $name . '<br>';
        }
        echo 'hello ' . $name .' from welcome controller';*/

        return view('abdouwelcome::welcome', ['name'=>$name]);
    }
}
