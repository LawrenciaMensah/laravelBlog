<?php
namespace App\Http\Controllers;

class pagesController extends Controller{
public function getIndex(){

return view('welcome');
}

public function getabout(){
 
 $first= 'lawrie';
 $last='Mensah';
 $full='$first. " ".$last;'
return view('pages.about')->with("fullname",$full) ;



}


public function getcontacts(){

return view('contacts');


}



}