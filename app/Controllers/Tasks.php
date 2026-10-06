<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    protected $taskModel;

    public function __construct()
    {
        $this->taskModel = new TaskModel();
    }

    public function index()
    {
        $data['tasks'] = $this->taskModel
            ->where('is_archived',0)
            ->findAll();

        return view('tasks/index',$data);
    }

    public function new()
    {
        return view('tasks/new');
    }

    public function create()
    {
        $this->taskModel->save([
            'title'=>$this->request->getPost('title'),
            'description'=>$this->request->getPost('description'),
            'task_date'=>$this->request->getPost('task_date')
        ]);

        return redirect()->to('/tasks');
    }

    public function edit($id)
    {
        $data['task']=$this->taskModel->find($id);
        return view('tasks/edit',$data);
    }

    public function update($id)
    {
        $this->taskModel->update($id,[
            'title'=>$this->request->getPost('title'),
            'description'=>$this->request->getPost('description'),
            'task_date'=>$this->request->getPost('task_date')
        ]);

        return redirect()->to('/tasks');
    }

    public function delete($id)
    {
        $this->taskModel->update($id,[
            'is_archived'=>1
        ]);

        return redirect()->to('/tasks');
    }
}