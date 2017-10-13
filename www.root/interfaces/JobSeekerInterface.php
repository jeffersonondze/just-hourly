<?php
/*
Content: Contains interface/outline of the jobseeker class
         with all the methods that can be used in the class.
Author: Jefferson Ondze Mangha
CopyRightOf: justhourly.com
Date: 09/29/2017
V: 1.0.0
*/


/**
 * JobSeekerInterface
 */
interface JobSeekerInterface
{

  public function SignUp(dbConnection_ $adminConnection, $JobSeekerUsername, $JobSeekerPassword);// self explainatory, function for signing up new JobSeekers into our system.

  //public function SignIn($JobSeekerUsername, $JobSeekerPassword);// self explainatory, function for returning JobSeekers to sign in.

  //public function JobApply($JobSeekerIndentity, $PostedJobIdentity); // function for JobSeekers to applie for jobs

  //public function BuildIndustySpecificProfile($JobSeekerProfileInfo, $IndustryIdentity); //function for building industry specific profiles i.e. Retail, Restaurant, etc...

  //public function UpdateJobSeekerProfileInfo($JobSeekerIndentity, $NewJobSeekerInfo); //Once signed up/logged in, can update profile info to give us more details

  //public function UpdateIndustrySpecificProfile($JobSeekerIndentity, $IndustryIdentity, $NewJobSeekerProfileInfo);// basically update resume information (in this case the industrial profile)

  //public function FollowUpWithEmployer($JobSeekerIndentity, $Message, $EmployerIdentity); // function for Job Seekers to follow up with employers directly from our system (will have a phone link for phone contact)

  //public function RecommendOthers($JobSeekerIndentity, $RecommendPersonEmail); // function for Job Seekers to recommend their friends and family to our system, in order to earn points

}






 ?>
