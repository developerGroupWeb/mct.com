<?php


class PagesController extends Controller
{

    function index(){

        $this->render('index');
    }

    function read(){


        //$this->loadModel('Post');

        $post =  new Post();
        $posts = $post->findAll();


        $this->render('read',[
            'posts' => $posts,

        ]);
    }

    function show($slug = null){

        if($slug === null){

           redirect('/pages/read/');

        }else{

            $post = new Post();
            $postId = $post->find(['slug', '=', $slug]);

            if(!isset($postId)){
                $this->e404('Product not found');
            }

            $this->render('show',[
                'post' => $postId,
            ]);
        }
    }

    function create(){
        print_r($_POST);
        $this->render('create');
    }


}