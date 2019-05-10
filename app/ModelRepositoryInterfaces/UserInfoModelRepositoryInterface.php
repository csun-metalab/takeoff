<?php

 namespace App\ModelRepositoryInterfaces;

 use App\Models\User;

 interface UserInfoModelRepositoryInterface
 {
    public function getAllStudents();
    public function getStudentsByMajor($majorname);
    public function getStudentsByGradDate($graddate);
    public function getStudentsByCollege($collegename);

    public function getStudents();

    public function sortUsersbyFirstName($order);
    public function sortUsersbyLastName($order);

    public function searchUser($usersname);

 }
