<?php
/************************************************
*************************************************
** Content: Contains connection class          **
**          to make conections to the mongoDB. **
** Author:  Jefferson Ondze Mangha             **
** CopyRightOf: justhourly.com                 **
** Date: 09/28/2017                            **
** LastUpdated: 09/31/2017                     **
** V: 1.0.0                                    **
*************************************************
************************************************/
//md5("JustHourlyPassKey")
/**
 * Connection Class: containes connection methods and types
 */
class dbConnection_
{
  var $username;
  var $password;

  function __construct()
  {
    # code...
  }

  public function dbConnect($username, $password){

      $authsource = 'justhourly_qa_db';

    return $db_conection = new MongoDB\Client('mongodb://'.$username.':'.$password.'@132.148.64.36/'.$authsource);

  }

  public function adminConnect(){
      $authsource = 'justhourly_qa_db';

    return $Admindb_conection = new MongoDB\Client('mongodb://JustHourlyUserAdmin:37ea04e0fe6a72726a203a84febb5e23@132.148.64.36/'.$authsource);

  }

/*
db.justhourly_qa_db.insert(
   { _id: 10001, item: "box", qty: 20, name: "jobseeker1" }
)*/





}






 ?>
