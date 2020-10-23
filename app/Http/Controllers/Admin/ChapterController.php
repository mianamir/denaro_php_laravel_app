<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateChapterRequest;
use App\Http\Requests\Admin\UpdateChapterRequest;
use App\Models\Admin\Subject;
use App\Models\Admin\Topic;
use App\Repositories\Admin\ChapterRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Admin\Chapter;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ChapterController extends AppBaseController
{
    /** @var  ChapterRepository */
    private $chapterRepository;

    public function __construct(ChapterRepository $chapterRepo)
    {
        $this->chapterRepository = $chapterRepo;
    }

    /**
     * Display a listing of the Chapter.
     *
     * @param Request $request
     * @return Response
     */
    public function index($course_id)
    {
        $course = Subject::find($course_id);
       $chapters = Chapter::where('subject_id', $course_id)
           ->orderBy('id', 'desc')->get();

        return view('admin.chapters.index', compact('chapters', 'course'));
    }

    public  function chapter_bysubject(Request $request){
        $data=$request->all();

        $classes=Chapter::where("subject_id",$data['id'])->get();
        echo '<option value="-1"> Select Chapter</option>';
        foreach($classes as $class){
            echo '<option value="'.$class->id.'">'.$class->title.'</option>';
        }
        exit;
    }
    /**
     * Show the form for creating a new Chapter.
     *
     * @return Response
     */
    public function create($course_id)
    {
        $course = Subject::find($course_id);

        return view('admin.chapters.create', compact('course'));
    }

    /**
     * Store a newly created Chapter in storage.
     *
     * @param CreateChapterRequest $request
     *
     * @return Response
     */
    public function store($course_id, CreateChapterRequest $request)
    {
        $course = Subject::find($course_id);

        $input = $request->all();
        $input['subject_id'] = $course->id;

        $chapter = $this->chapterRepository->create($input);

        Flash::success('Chapter saved successfully.');

        return redirect(route('admin.chapters.index', $course->id));
    }

    /**
     * Display the specified Chapter.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $chapter = $this->chapterRepository->findWithoutFail($id);

        if (empty($chapter)) {
            Flash::error('Chapter not found');

            return redirect(route('admin.chapters.index'));
        }

        return view('admin.chapters.show')->with('chapter', $chapter);
    }

    /**
     * Show the form for editing the specified Chapter.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $chapter = $this->chapterRepository->findWithoutFail($id);

        $course = Subject::find($chapter->subject_id);

        if (empty($chapter)) {
            Flash::error('Chapter not found');

            return redirect(route('admin.chapters.index'));
        }

        return view('admin.chapters.edit', compact('course', 'chapter'));
    }

    /**
     * Update the specified Chapter in storage.
     *
     * @param  int              $id
     * @param UpdateChapterRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateChapterRequest $request)
    {
        $chapter = $this->chapterRepository->findWithoutFail($id);
        $course = Subject::find($chapter->subject_id);

        if (empty($chapter)) {
            Flash::error('Chapter not found');

            return redirect(route('admin.chapters.index'));
        }

        $chapter = $this->chapterRepository->update($request->all(), $id);

        Flash::success('Chapter updated successfully.');

        return redirect(route('admin.chapters.index', $course->id));
    }

    /**
     * Remove the specified Chapter from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $chapter = Chapter::find($id);
        $temp_course_id = $chapter->subject_id;

        if (empty($chapter)) {
            Flash::error('Chapter not found');

            return redirect(route('admin.chapters.index'));
        }

        $topics = Topic::where('chapter_id', $chapter->id)->get();
        foreach ($topics as $topic){
            $topic->delete();
        }

        $this->chapterRepository->delete($id);

        Flash::success('Chapter deleted successfully.');

        return redirect(route('admin.chapters.index', $temp_course_id));
    }
}
