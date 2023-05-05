<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index(Request $request)
    {
        $statuses = Status::all();
        $title = 'Daftar Status';
        return view('admin.status.index', compact('statuses', 'title'));
    }

    public function create(Request $request)
    {
        return view('admin.status.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $statuses = Status::create([
            'status' => $data['status'],
        ]);

        return redirect()->route('admin.status.index');
    }

    public function edit($id)
    {
        $status = Status::find($id);
        return view('admin.status.update', compact('status'));
    }

    public function update(Request $request, $id)
    {

    $statuses = Status::find($id);
    $statuses->status = $request->status;
    $statuses->save();

    return redirect()->route('admin.status.index');
    }

    public function destroy($id)
    {
        $statuses = Status::find($id);
        $statuses->delete();

        return redirect()->route('admin.status.index');
    }
}
