<?php
/**
 * Created by PhpStorm.
 * User: information
 * Date: 2017/12/14
 * Time: 上午10:22
 */
namespace App\Admin\Controllers;

use App\Notice;

class NoticeController extends Controller{
    public function index()
    {
        $notices = Notice::all();
        return view('admin.notice.index',compact('notices'));
    }

    public function create()
    {
        return view('admin.notice.create');
    }

    public function store()
    {
        $this->validate(request(),[
            'title' => 'required|string',
            'content' => 'required|string'
        ]);
        $notice = Notice::create(request(['title','content']));
        dispatch(new \App\Jobs\SendMessage($notice));

        return redirect('/admin/notices');
    }
}