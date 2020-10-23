<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateTopicRequest;
use App\Http\Requests\Admin\UpdateTopicRequest;
use App\Models\Admin\Chapter;
use App\Models\Admin\StudentClass;
use App\Models\Admin\Topic;
use App\Models\Admin\TopicVideo;
use App\Repositories\Admin\TopicRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TopicController extends AppBaseController
{
    /** @var  TopicRepository */
    private $topicRepository;

    public function __construct(TopicRepository $topicRepo)
    {
        $this->topicRepository = $topicRepo;
    }

    /**
     * Display a listing of the Topic.
     *
     * @param Request $request
     * @return Response
     */
    public function index($chapter_id)
    {
        $chapter = Chapter::find($chapter_id);
        $topics = Topic::where('chapter_id', $chapter_id)
            ->orderBy('id', 'desc')->get();

        return view('admin.topics.index', compact('topics', 'chapter'));
    }

    /**
     * Show the form for creating a new Topic.
     *
     * @return Response
     */
    public function create($chapter_id)
    {
        $chapter = Chapter::find($chapter_id);

        return view('admin.topics.create', compact('chapter'));
    }

    /**
     * Store a newly created Topic in storage.
     *
     * @param CreateTopicRequest $request
     *
     * @return Response
     */

    public function store($chapter_id, CreateTopicRequest $request)
    {
        $chapter = Chapter::find($chapter_id);
        $input = $request->all();
        $input['chapter_id'] = $chapter->id;
        $input['subject_id'] = $chapter->subject->id;
        $input['class_id'] = $chapter->subject->class_id;

        $subject = $this->topicRepository->create($input);

        Flash::success('Topic saved successfully.');
        return redirect(route('admin.topics.index', $chapter->id));


    }
//    public function store(Request $request)
//    {
//        $chapter_id = $request->get('chapter_id');
//        if ($chapter_id == -1) {
//            $request->session()->flash('chapter_id', 'Error: chapter is required');
//            return redirect()->back()->withInput();
//        }
//        $title = $request->get('title');
//        if ($title == "") {
//            $request->session()->flash('title', 'Error: title is required');
//            return redirect()->back()->withInput();
//        }
//        $details = $request->get('details');
//        $status = $request->get('status');
//
//        $video_urls = $request->file('video_urls');
//        if (count($video_urls) == 0) {
//            $request->session()->flash('video_urls', 'Error: video is required');
//            return redirect()->back()->withInput();
//        }
//
//
//        if($chapter_id != -1 && $title != null && count($video_urls) > 0){
////            Topic Object data
//
//            $topic = new Topic();
//            $topic->title = $title;
//            if($details == ""){
//                $topic->details = "Not Available";
//            }else{
//                $topic->details = $details;
//            }
//            $topic->chapter_id = $chapter_id;
//            $topic->status = $status;
//            $topic->save();
//
//            if(count($video_urls) > 1){
//                foreach ($video_urls as $file) {
//                    if ($file != null) {
//                        $topic_video = new TopicVideo();
//                        $fileName = str_random() . time() . '.' . $file->getClientOriginalExtension();
//                        $file->move('topic_videos', $fileName);
//                        $topic_video->video_url = $fileName;
////                        $fileMimeType = $file->getMimeType();
//                        $topic_video->file_mime_type = "mp4";
//                        $topic_video->topic_id = $topic->id;
//                        $topic_video->status = "active";
//                        $topic_video->save();
//                    }
//                } // end foreach
//
//            }
//            else{
//                    $topic_video = new TopicVideo();
//                    $fileName = str_random() . time() . '.' . $video_urls[0]->getClientOriginalExtension();
//                    $video_urls[0]->move('topic_videos', $fileName);
//                    $topic_video->video_url = $fileName;
//                    $topic_video->topic_id = $topic->id;
////                    $fileMimeType = $video_urls[0]->getMimeType();
//                    $topic_video->file_mime_type = "mp4";
//                    $topic_video->status = "active";
//                    $topic_video->save();
//            }
//
//            Flash::success('Topic saved successfully.');
//            return redirect(route('admin.topics.index'));
//
//        }
//
//        Flash::success('Unable to save topic');
//        return redirect(route('admin.topics.index'));
//
//    }

    /**
     * Display the specified Topic.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $topic = Topic::find($id);
        $chapter = Chapter::find($topic->chapter_id);

        if (!isset($topic)) {
            Flash::error('Topic not found');

            return redirect(route('admin.topics.index', $chapter->id));
        }

        return view('admin.topics.show', compact('topic', 'chapter'));
    }

    /**
     * Show the form for editing the specified Topic.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $topic = $this->topicRepository->findWithoutFail($id);

        $chapter = Chapter::find($topic->chapter_id);

        if (empty($topic)) {
            Flash::error('Topic not found');

            return redirect(route('admin.topics.index'));
        }

        return view('admin.topics.edit', compact('topic', 'chapter'));
    }

    /**
     * Update the specified Topic in storage.
     *
     * @param  int              $id
     * @param UpdateTopicRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $topic = Topic::find($id);
        $chapter = Chapter::find($topic->chapter_id);

        if (!isset($topic)) {
            Flash::error('Topic not found');
            return redirect(route('admin.topics.index'));
        }

        $topic_update = $this->topicRepository->update($request->all(), $id);

        Flash::success('Topic updated successfully.');
        return redirect(route('admin.topics.index', $chapter->id));



    }

//    public function update($id, Request $request)
//    {
//        $topic = Topic::find($id);
//
//        if (empty($topic)) {
//            Flash::error('Topic not found');
//
//            return redirect(route('admin.topics.index'));
//        }
//
//        $chapter_id = $request->get('chapter_id');
//        if ($chapter_id == -1) {
//            $request->session()->flash('chapter_id', 'Error: chapter is required');
//            return redirect()->back()->withInput();
//        }
//        $title = $request->get('title');
//        if ($title == "") {
//            $request->session()->flash('title', 'Error: title is required');
//            return redirect()->back()->withInput();
//        }
//        $details = $request->get('details');
//        $status = $request->get('status');

//    public function update($id, Request $request)
//    {
//        $topic = Topic::find($id);
//
//        if (empty($topic)) {
//            Flash::error('Topic not found');
//
//            return redirect(route('admin.topics.index'));
//        }
//
//        $chapter_id = $request->get('chapter_id');
//        if ($chapter_id == -1) {
//            $request->session()->flash('chapter_id', 'Error: chapter is required');
//            return redirect()->back()->withInput();
//        }
//        $title = $request->get('title');
//        if ($title == "") {
//            $request->session()->flash('title', 'Error: title is required');
//            return redirect()->back()->withInput();
//        }
//        $details = $request->get('details');
//        $status = $request->get('status');
//        $video_urls = $request->file('video_urls');
//        if (count($video_urls) == 0) {
//            $request->session()->flash('video_urls', 'Error: video is required');
//            return redirect()->back()->withInput();
//        }


//        if($chapter_id != -1 && $title != null && count($video_urls) > 0){
//            $topic->title = $title;
//            if($details == ""){
//                $topic->details = "Not Available";
//            }else{
//                $topic->details = $details;
//            }
//            $topic->chapter_id = $chapter_id;
//            $topic->status = $status;
//            $topic->save();

//            if(count($video_urls) > 1){
//                foreach ($video_urls as $file) {
//                    if ($file != null) {
//                        $topic_video = new TopicVideo();
//                        $fileName = str_random() . time() . '.' . $file->getClientOriginalExtension();
//                        $file->move('topic_videos', $fileName);
//                        $topic_video->video_url = $fileName;
////                        $fileMimeType = $file->getMimeType();
//                        $topic_video->file_mime_type = "mp4";
//                        $topic_video->topic_id = $topic->id;
//                        $topic_video->status = "active";
//                        $topic_video->save();
//                    }
//                } // end foreach
//
//            }
//            else{
//                $topic_video = new TopicVideo();
//                $fileName = str_random() . time() . '.' . $video_urls[0]->getClientOriginalExtension();
//                $video_urls[0]->move('topic_videos', $fileName);
//                $topic_video->video_url = $fileName;
////                $fileMimeType = $video_urls[0]->getMimeType();
//                $topic_video->file_mime_type = "mp4";
//                $topic_video->topic_id = $topic->id;
//                $topic_video->status = "active";
//                $topic_video->save();
//            }

//            Flash::success('Topic updated successfully.');
//            return redirect(route('admin.topics.index'));
//
//        }

//        Flash::success('Unable to update topic');
//        return redirect(route('admin.topics.index'));
//    }

    /**
     * Remove the specified Topic from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $topic = $this->topicRepository->findWithoutFail($id);

        if (empty($topic)) {
            Flash::error('Topic not found');

            return redirect(route('admin.topics.index'));
        }

        $temp_chapter_id = $topic->chapter_id;

        $this->topicRepository->delete($id);

        Flash::success('Topic deleted successfully.');

        return redirect(route('admin.topics.index', $temp_chapter_id));
    }


}
