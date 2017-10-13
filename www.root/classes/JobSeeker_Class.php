<?php
/*
Content: Contains the Job Seeker class, including all functions,
         and variables, that can be accessed by other pages,
         in order to carry out Job Seeker related events.
Author(s): Jefferson Ondze Mangha, David Alton Myers
CopyRightOf: justhourly.com
Date: 09/31/2017
V: 1.0.0
*/

//Include JobSeekerInterface
require './interfaces/JobSeekerInterface.php';
/**
 * JobSeekerClass
 */
class JobSeeker_ extends functions_ implements JobSeekerInterface
{
  function __construct()
  {
  }

  public function SignUp(dbConnection_ $dbConnection_, $newjobseekeremail, $newjobseekerpassword, $newjobseekerzipcode){
    $adminConnect = $dbConnection_->adminConnect();
    $db = $adminConnect->justhourly_qa_db;
    $col = $db->JobSeekersProfileInfo_Col;

    $createUserCommand = array(
      "createUser"=> $this->emailStripper($newjobseekeremail),
      "pwd" => $this->dataEncryption($newjobseekerpassword),
      'customData' =>
      [
        "UserIdentity" => "", //$identity,
        "Email" => $newjobseekeremail
      ],
      "roles" =>
      [
          ["role" => 'JustHourlyJobSeeker', "db" => 'justhourly_qa_db']
      ]
    );


    $userProfileDocument = array(
      "PersonalInfo" => array(
        "Name" => array(
          "FirstName" => "",
          "LastName" => ""
        ),
        "ContactInfo" => array(
          "PhoneNumber" => "",
          "Email" => $newjobseekeremail,
          "Address" => array(
            "Street" => "",
            "City" => "",
            "State" => "",
            "ZipCode" => $newjobseekerzipcode
          ),
          "DOB" => array(
            "d" => "",
            "m" => "",
            "y" => ""
          )
        ),
      ),
      "AccountInfo" => array(

      ),

    )

    echo("<br><br>");


    $doc = $col->findOne(["_id"=>1001]);

    echo json_encode($doc);
  }

}





 ?>
