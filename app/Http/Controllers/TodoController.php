<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function getAllTasks() {

    }
  
    public function createTask(Request $request) {
        $task = new Task();
        $task->taskName = $request->taskName;
        $task->isComplete = $request->isComplete;
        $task->save();

        return response()->json([
            'message' => 'task record created'
        ], 201);
    }
  
    public function getTask($id) {

    }
  
    public function updateTask(Request $request, $id) {

    }

    public function deleteTask($id) {

    }
}
