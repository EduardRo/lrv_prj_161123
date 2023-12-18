<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index()
    {
        return 'this is index';
    }

    public function show(
        $id,
    ) {
    }

    function getTestById($id)
    {
        // $db = new DatabaseConnection();

        $query = "SELECT * FROM test WHERE id = :id";

        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return $stmt->fetch();
    }
}
