<?php
class UserController
{
    public function index()
    {
        view("index",
        [
            "users"=>App::get('query')->selectAll("users"),
            "tasks"=>App::get('query')->selectAll("tasks"),
        ]);
    }
}
?>