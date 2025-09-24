<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{

    public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

            'name' => 'John Doe',

            'title' => 'Full Stack Web Developer',

            'email' => 'john.doe@example.com',

            'phone' => '+639074562134',

            'location' => 'PH, Manila',

            'bio' => 'Passionate web developer with 5+ years of experience...',

            'profile_image' => 'https://thegadgetflow.com/wp-content/uploads/2022/06/The-best-gaming-laptops-to-buy-this-summer-blog-featured.jpeg',

            'skills' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'],

            'projects' => [], // Project data

            'experience' => [], // Experience data

            'education' => [], // Education data

            'social_links' => [] // Social media links

        ];

        return view('portfolio.index', compact('portfolio'));

    }

}