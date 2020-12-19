<?php 

class PagesController{
    public function home()
    {
        $tasks = App::get("query")->selectAll("tasks");
        $users = App::get("query")->selectAll("users");

        view("index",[
            "users"=>$users,
            "tasks"=>$tasks
        ]);
    }
    public function about()
    {
        view("about");
    }
    public function contact()
    {
        view("contact");
    }
    public function order()
    {
        view("orders");
    }
    public function customer()
    {
        view("customer");
    }
    public function addNew()
    {
        App::get("query")->insert([
            "name"=>$_POST['name'],
            "age" =>$_POST['age']
        ],"users");
        header("location: /");
    }
    public function edit()
    {
        $users = App::get('query')->selectById("users",["id"=>$_POST['id']]);

        require("views/update.view.php");
    }
    public function update()
    {
        App::get('query')->update("users",
        [
         "name"=>$_POST['name'],
         "age"=>$_POST['age']
       ],
       [
         "id"=>$_POST['id']
          ]
       );
          header("location: /");
    }
    public function delete()
    {
        
  App::get('query')->delete("users",["id"=>$_POST['id']]);
  header("location: /");
    }
    
}
?>