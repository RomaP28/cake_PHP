<?php

namespace App\Controller;

use App\Controller\AppController;

class PostsController extends AppController
{

    private $posts;

    public function initialize(): void
    {
        $this->loadComponent('Blog');
        $this->posts = $this->Blog->getPosts();

    }

    public function index()
    {
//        die('This is the posts/index');
//        die( $this->Blog->sayHello());
//        $this->set('posts', $this->posts);
//        $this->set('person', 'John Doe'); // Passing variables to the View
//            $this->set('people', ['Mike', 'Paul', 'Jeff', 'Michelle', 'Joe']);  // Passing array to the View


        $this->set('posts', $this->posts);

    }
    public function create()
    {
//        die('Creating post');
        $this->set('posts', $this->posts);
    }

    public function view($id)
    {
        $post = [
            'id' => $id,
            'title' => $id . ' post',
            'body' => 'This is my ' . $id . ' post',
            'image' => 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg'
        ];

        $languages = [
            'Languages' => [
                'English' => [
                    'American',
                    'Canadian',
                    'British'
                ],
                'Spanish',
                'German'
            ]
        ];

        $this->set('posts', $this->posts);
        $this->set('post', $post);
        $this->set('languages', $languages);
    }

    public function edit($id)
    {
        die('Editing post ' . $id);
    }

//    public function hello()
//    {
//        die('Hello ' . $this->request->query['name']);
//        print_r($this->request->query);
//        print_r($this->request->params);
//        if($this->request->is('post')) {
//            die('This is a POST');
//        } elseif ($this->request->is('get')) {
//            die('This is a GET');
//        }

//        print_r($this->request->header('User-Agent'));
//        die();
//    }
}
