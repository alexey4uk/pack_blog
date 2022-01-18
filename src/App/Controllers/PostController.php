<?php

namespace App\Controllers;

use App\View;
use App\Models\Posts;
use App\Db;
use App\Request;
use Laminas\Diactoros\Response\HtmlResponse;
use Laminas\Diactoros\Response\JsonResponse;

class PostController
{
    private $view;
    private $posts;

    public function __construct()
    {
        $db = new Db();
        $this->view = new View(basename(dirname(__DIR__) . '/../../views'));
        $this->posts = new Posts($db);
    }

    public function index($request)
    {
        $posts = $this->posts->getPosts();
        $response = new HtmlResponse(
            $this->view->render('/posts/index.html', [
                'list' => $posts,
                'title' => 'My blog!'
            ]),
            200
        );
        return $response;
        print_r($request->getAttributes());
    }

    public function create()
    {
        if(Request::post('title', FILTER_SANITIZE_STRING) && Request::post('description', FILTER_SANITIZE_STRING) && Request::post('content', FILTER_SANITIZE_STRING) && Request::post('user', FILTER_SANITIZE_STRING)){
            $addpost = [];
            $addpost['id'] = Request::get('id', FILTER_SANITIZE_NUMBER_INT);
            $addpost['title'] = Request::post('title', FILTER_SANITIZE_STRING);
            $addpost['description'] = Request::post('description', FILTER_SANITIZE_STRING);
            $addpost['content'] = Request::post('content', FILTER_SANITIZE_STRING);
            $addpost['user'] = Request::post('user', FILTER_SANITIZE_STRING);
            $this->posts->create($addpost);
            header("Location: http://{$_SERVER['HTTP_HOST']}/posts");
        }
        $response = new HtmlResponse(
            $this->view->render('/posts/create.html', ['title' => 'Добавление новости']),
            200
        );
        return $response;
    }

    public function update($request)
    {
        $id = $request->getAttribute('id');
        $post = $this->posts->getPost($id);
        if(Request::post('title', FILTER_SANITIZE_STRING) && Request::post('description', FILTER_SANITIZE_STRING) && Request::post('content', FILTER_SANITIZE_STRING) && Request::post('user', FILTER_SANITIZE_STRING)){
            $addpost = [];
            $addpost['id'] = Request::get('id', FILTER_SANITIZE_NUMBER_INT);
            $addpost['title'] = Request::post('title', FILTER_SANITIZE_STRING);
            $addpost['description'] = Request::post('description', FILTER_SANITIZE_STRING);
            $addpost['content'] = Request::post('content', FILTER_SANITIZE_STRING);
            $addpost['user'] = Request::post('user', FILTER_SANITIZE_STRING);
            $this->posts->update($addpost);
            header("Location: http://{$_SERVER['HTTP_HOST']}/post?id={$id}");
        }
        $response = new HtmlResponse(
            $this->view->render('/posts/edit.html', [
                'addpost' => $post,
                'title' => $post['title']
            ]),
            200
        );
        return $response;
        //$this->view->renderHtml('posts/edit.php', ['addpost' => $post]);
    }

    public function read($request)
    {
        $id = $request->getAttribute('id');
        $post = $this->posts->getPost($id);
        $response = new HtmlResponse(
            $this->view->render('/posts/new.html', [
                'post' => $post,
                'title' => $post['title']
            ]),
            200
        );
        return $response;
    }

    public function delete()
    {
        $id = Request::get('id', FILTER_SANITIZE_NUMBER_INT);
        $this->posts->delete($id);
        header("Location: http://{$_SERVER['HTTP_HOST']}/posts");
    }
}