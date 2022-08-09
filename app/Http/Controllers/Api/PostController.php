<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = User::latest()->Paginate(5);

        return new PostResource(true, 'List Data Posts', $posts);
    }
}
