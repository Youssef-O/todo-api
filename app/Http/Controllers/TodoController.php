<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TodoController extends Controller
{
    public function getAllTasks() {
        $tasks = Task::get()->toJson(JSON_PRETTY_PRINT);
        return response($tasks, 200);
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
        if (Task::where('id', $id)->exists()) {
            $task = Task::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($task, 200);
        } else {
            return response()->json([
                "message" => "Task not found"
            ], 404);
        }
    }
  
    public function updateTask(Request $request, $id) {

    }

    public function deleteTask($id) {

    }
}
