<?php
namespace App\Contracts;

interface UserInfoContract{

    public function createStudentUserInfo($validatedData);
    public function getAllStudents();
    public function getStudentsByMajor($majorname);
    public function getStudentsByGradDate($graddate);
    public function getStudentsByCollege($collegename);
    public function searchUser($usersname);

}
