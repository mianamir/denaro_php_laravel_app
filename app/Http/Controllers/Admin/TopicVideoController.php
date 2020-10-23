<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateTopicRequest;
use App\Http\Requests\Admin\UpdateTopicRequest;
use App\Models\Admin\Topic;
use App\Models\Admin\TopicVideo;
use App\Repositories\Admin\TopicRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TopicVideoController extends AppBaseController
{
//    /** @var  TopicRepository */
//    private $topicRepository;
//
//    public function __construct(TopicRepository $topicRepo)
//    {
//        $this->topicRepository = $topicRepo;
//    }

    /**
     * Display a listing of the Topic.
     *
     * @param Request $request
     * @return Response
     */
    public function index()
    {
        $topic_videos = TopicVideo::all();

        return view('admin.topic_videos.index')
            ->with('topic_videos', $topic_videos);
    }

    /**
     * Show the form for creating a new Topic.
     *
     * @return Response
     */
//    public function create()
//    {
//        return view('admin.topics.create');
//    }
//
//    /**
//     * Store a newly created Topic in storage.
//     *
//     * @param CreateTopicRequest $request
//     *
//     * @return Response
//     */
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
        $topic = $this->topicRepository->findWithoutFail($id);

        if (empty($topic)) {
            Flash::error('Topic not found');

            return redirect(route('admin.topics.index'));
        }

        return view('admin.topics.show')->with('topic', $topic);
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
        $topic_video = TopicVideo::find($id);

        if (empty($topic_video)) {
            Flash::error('Topic video not found');

            return redirect(route('admin.topic_videos.index'));
        }

        return view('admin.topic_videos.edit')->with('topic_video', $topic_video);
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
        $topic_video = TopicVideo::find($id);

        if (empty($topic_video)) {
            Flash::error('Topic video not found');

            return redirect(route('admin.topics.index'));
        }

        $video_url = $request->file('video_url');

        if ($request->file('video_url') == false) {
            $request->session()->flash('video_url', 'Error: video is required');
            return redirect()->back()->withInput();
        }
        $image = $request->file('featured_image');

        if ($request->hasFile('featured_image') == false) {
            $request->session()->flash('featured_image', 'Error: image is required');
            return redirect()->back()->withInput();
        }

        $status = $request->get('status');
        if ($status == null) {
            $request->session()->flash('status', 'Error: status is required');
            return redirect()->back()->withInput();
        }



        if($request->file('video_url') == true &&
            $request->hasFile('featured_image') == true &&
            $status != null
        ){
            //dd($request->get('status'));

            $topic_video->status = $status;

            $fileName_image = str_random() . time() . '.' . $image->getClientOriginalExtension();
            $image->move('topic_videos', $fileName_image);
            $topic_video->featured_image = $fileName_image;

            $fileName = str_random() . time() . '.' . $video_url->getClientOriginalExtension();
            $video_url->move('topic_videos', $fileName);
            $topic_video->video_url = $fileName;
            $topic_video->save();

            Flash::success('Topic video updated successfully.');
            return redirect(route('admin.topics.show', [$topic_video->topic_id]));

        }

        Flash::success('Unable to update topic video');
        return redirect(route('admin.topics.show', [$topic_video->topic_id]));

    }

    /**
     * Remove the specified Topic from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $topic_video = TopicVideo::find($id);



        if (empty($topic_video)) {
            Flash::error('Topic video not found');

            return redirect(route('admin.topics.index'));
        }

        $temp_topic_id = $topic_video->topic_id;

        $topic_video->delete();

        Flash::success('Topic deleted successfully.');

//        return redirect(route('admin.topics.index'));
        return redirect(route('admin.topics.show', [$temp_topic_id]));

    }

}
