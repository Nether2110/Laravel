<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();
        foreach ($workers as $worker) {
            dump($worker->name);
        }
    }

    public function show()
    {
        $worker = Worker::find(4);
        dd($worker->toArray());
    }

    public function create()
    {
        $worker = [
            'name' => 'Mark',
            'surname' => 'Markov',
            'email' => 'Markov@mail.ru',
            'age' => 20,
            'description' => 'Im Mark',
            'is_married' => false,
        ];

        Worker::create($worker);
        return 'Mark was created';
    }

    public function update()
    {
        $worker = Worker::find(4);

        $worker->update([
            'name' => 'Karl',
            'surname' => 'Petrov',
        ]);

        return 'Worker was updated';

    }

    public function delete()
    {
        $worker = Worker::find(3);
        $worker->delete();
        return 'Worker was deleted';
    }
}








