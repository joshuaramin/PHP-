<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    protected $posts = [
        [
            "id" => 1,
            "title" => "How to be a poster",
            "description" => "A guide to effective posting strategies. Discover the essentials of creating engaging content that resonates with your audience. Understand the importance of timing and frequency in your posts. Learn how to analyze audience feedback to improve your approach. This post serves as a foundational piece for aspiring posters.",
            "timestamp" => "2024-01-01 10:00:00"
        ],
        [
            "id" => 2,
            "title" => "The Art of Posting",
            "description" => "Exploring creative ways to engage your audience. This article delves into various techniques for capturing attention in a crowded feed. From storytelling to humor, discover methods that can make your posts stand out. The power of creativity in digital communication cannot be underestimated. Uncover best practices for blending art with strategy.",
            "timestamp" => "2024-01-02 11:00:00"
        ],
        [
            "id" => 3,
            "title" => "Engaging Your Audience",
            "description" => "Tips for captivating your readers. This post covers ways to foster interaction and build a loyal community. Find out how to ask the right questions and encourage discussion. Learn the importance of responding to comments and messages promptly. Discover tools that can help you measure engagement effectively.",
            "timestamp" => "2024-01-03 12:00:00"
        ],
        [
            "id" => 4,
            "title" => "Visuals that Attract",
            "description" => "The importance of strong visuals in your posts. This article explores how images and videos can enhance your messaging. Learn about the psychology of color and composition to draw in viewers. Discover tips for sourcing or creating high-quality visuals that align with your brand. Engage your audience on a deeper level with compelling visual storytelling.",
            "timestamp" => "2024-01-04 13:00:00"
        ],
        [
            "id" => 5,
            "title" => "Using Hashtags Effectively",
            "description" => "Strategies for maximizing your reach through hashtags. This post discusses the anatomy of a successful hashtag strategy. Learn how to research trending tags relevant to your content. Understand the balance between popular and niche hashtags for optimal exposure. Explore tools that can assist in tracking hashtag performance over time.",
            "timestamp" => "2024-01-05 14:00:00"
        ],
    ];


    public function index()
    {

        return view("user-account");
    }

    public function blog()
    {
        return view("user-blog", ['posts' => $this->posts]);
    }

    public function create()
    {
        return view("blog-create");;
    }

    public function edit($id)
    {

        $posts = Post::find($id);

        if (!$posts) {
            dd("No record");
        }

        return view("blog-edit", compact("posts"));
    }

    public function show($id)
    {
        $posts = collect($this->posts)->firstWhere('id', $id);

        if (!$posts) {
            abort(404, "Post is not found");
        }

        return view("blog-show", ['posts' => $posts]);
    }
}
