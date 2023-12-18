<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;


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
        $testModel = new Test();

        $query = "SELECT * FROM test WHERE id = :id";

        $stmt = $testModel->prepare($query);
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return $stmt->fetch();
    }
}
