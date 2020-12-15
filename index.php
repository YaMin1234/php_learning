<?php
 class Post{
    public $title;
    public $ispublish;
    public function __construct($title,$ispublish)
    {
       $this->title = $title;
       $this->ispublish = $ispublish;
    }
 }

 $posts = [
    new Post("First Post",true),
    new Post("Second Post",true),
    new Post("Third Post",true),
    new Post("Fourth Post",false),
 ];

 $unpublishPosts = array_filter($posts,function($post)//$post=>each Post object within $post array
 {
        return !$post->ispublish;       //$post->ispublish == false
 });//array_filter(arr,function)=>loop array

 echo "<pre>";
 var_dump($unpublishPosts);

 $unpublishPosts = array_filter($posts,function($post)//$post=>each Post object within $post array
  {
        return $post->ispublish;    //default true; or $post->ispublish == true
  });

echo "<pre>";
var_dump($unpublishPosts);


$titles = array_map(function($post)
{
  return $post->title;
},$posts);//array-map(fun(),arr)

echo "<pre>";
var_dump($titles);

//array_filter,array_map => loop array,each obj within array put as parameter in function and then array return