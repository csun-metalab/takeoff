<?php
namespace App\Contracts;

interface AdminContract
{
    public static function sendInvite($request);
    public function deleteStudent($userId);
}
