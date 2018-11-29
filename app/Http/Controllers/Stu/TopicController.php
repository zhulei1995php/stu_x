<?php

namespace App\Http\Controllers\Stu;

use App\Handlers\FileUploadHandler;
use App\Http\Requests\TopicRequest;
use App\Models\Classes;
use App\Models\Topic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TopicController extends Controller
{
    /**
     * @param $id
     * @param TopicRequest $request
     * @param FileUploadHandler $upload
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store($id,TopicRequest $request,FileUploadHandler $upload)
    {
        //权限保存
        $input=$request->only('title','type_id','content','can_reply','level');
        $input['user_id']=Auth::id();
        $input['class_id']=$id;
        if ($request->attachment){
            $result=$upload->save($request->attachment,'attach',Auth::id());
            if ($result){
                $input['att_name']=$result['name'];
                $input['att_url']=$result['path'];
            }
        }
        $input['content']=clean($input['content']);
        Topic::create($input);
        return redirect(route('classes.show',$id))->with('success','发布成功');

    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show($id)
    {
        $topic=Topic::with('replies','sender','type')->find($id);
        $this->authorize('view',Topic::find($id));
        return view('stu.topic.show',compact('topic'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit($id)
    {
        //权限判定
        $topic=Topic::with('type','sender')->find($id);
        $this->authorize('update',$topic);
        return view('stu.topic.edit',compact('topic'));
    }

    /**
     * @param TopicRequest $request
     * @param $id
     * @param FileUploadHandler $upload
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(TopicRequest $request,$id,FileUploadHandler $upload)
    {
        $topic=Topic::find($id);
        $this->authorize('update',$topic);
        //权限判定
        $input=$request->only('title','type_id','content','can_reply','level');
        $input['user_id']=Auth::id();
        $input['class_id']=$id;
        if ($request->attachment){
            $result=$upload->save($request->attachment,'attach',Auth::id());
            if ($result){
                $input['att_name']=$result['name'];
                $input['att_url']=$result['path'];
            }
        }
        $input['content']=clean($input['content']);
        $topic->update($input);
        return redirect(route('classes.show',$id))->with('success','修改成功');

    }

    /**
     * @param $id
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy($id)
    {
        $topic=Topic::find($id);
        $this->authorize('update',$topic);
        //权限判定

    }
}