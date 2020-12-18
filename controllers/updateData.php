<?php

  // $query->update("users",
  //    [
  //     "name"=>$_POST['name'],
  //     "age"=>$_POST['age']
  //   ],
  //   [
  //     "id"=>$_POST['id']
  //      ]
  //   );

  App::get('query')->update("users",
  [
   "name"=>$_POST['name'],
   "age"=>$_POST['age']
 ],
 [
   "id"=>$_POST['id']
    ]
 );
    header("location: /")
?>