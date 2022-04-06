<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class audiController extends Controller
{
    public function index()
    {
        $carouselImages = [
            'https://wallpaperaccess.com/full/540880.jpg',
            'https://cdn.wallpapersafari.com/4/30/BrdA3q.jpg',
            'https://image.winudf.com/v2/image1/Y29tLmtvZ2kub2ZmaWNpYWxhcHBfc2NyZWVuXzBfMTU3MzQ4NTgxN18wNTM/screen-0.jpg?fakeurl=1&type=.jpg',
            'https://wallpaperaccess.com/full/540880.jpg',
            'https://cdn.wallpapersafari.com/4/30/BrdA3q.jpg',
            'https://image.winudf.com/v2/image1/Y29tLmtvZ2kub2ZmaWNpYWxhcHBfc2NyZWVuXzBfMTU3MzQ4NTgxN18wNTM/screen-0.jpg?fakeurl=1&type=.jpg'
        ];
        $imagesText = [
            'https://www.audi.pt/media/Theme_Menu_Model_Dropdown_Item_Image_Component/root-pt-model-modelMenu-editableItems-72736-dropdown-476668-image/dh-487-a0e9a6/770b761f/1635486188/audi-a3-limousine-tfsi.jpg',
            'https://www.audi.pt/media/Theme_Menu_Model_Dropdown_Item_Image_Component/root-pt-model-modelMenu-editableItems-72736-dropdown-476668-image/dh-487-a0e9a6/770b761f/1635486188/audi-a3-limousine-tfsi.jpg'
        ];
        return view('audi.index', [
            'carouselImages' => $carouselImages,
            'imagesText'=> $imagesText
        ]);
    }
}
