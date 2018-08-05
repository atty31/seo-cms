<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DB;
use Monolog\Logger;
use App\Http\Logs\Admin\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\Comments;
use Exception;
use App\Http\Requests;

/**
 * Class CommentsController
 * @package App\Http\Controllers\Admin
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class CommentsController extends Controller
{
    /**
     * @var string
     */
    private $logFileName = 'comment';
    /**
     * @var
     */
    private $log;
    /**
     * Comments constructor.
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->log = new Log($this->logFileName);
        $this->middleware('auth');
    }

    /**
     * List view for comments
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $comments = DB::table('comments')->select('comments.id as cid',
            'comments.name as author', 'comments.description as description', 'comments.status as status',
            'comments.created_at as created_at', 'pages.title as ptitle', 'pages.id as pid')
            ->leftJoin('pages','comments.page_id', '=', 'pages.id')
            ->paginate(10);

        return view('adminlte::comments.list',  [
            'comments_title'   => 'List Comments',
            'comments' => $comments,
        ]);
    }
    /**
     * Remove a comment
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try{
            Comments::destroy($id);
            $message = ['msg' => 'A comment was deleted'];
            $this->log->logMessage(Logger::INFO, 'Comment with the id '.$id.' was deleted by the user with the id '.Auth::id());
        }catch (Exception $error){
            $message = ['msg_error' => $error->getMessage()];
            $this->log->logMessage(Logger::ERROR, $error->getMessage());
        }
        return redirect()->route('admin.comments')->with($message);
    }

    /**
     * Show comment details
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function view($id)
    {
        $comment = DB::table('comments')->select('comments.id as cid',
            'comments.name as author', 'comments.description as description', 'comments.status as status',
            'comments.created_at as created_at', 'pages.title as ptitle', 'pages.id as pid', 'comments.updated_at as updated_at')
            ->leftJoin('pages','comments.page_id', '=', 'pages.id')
            ->where('comments.id', $id)->first();
        return view('adminlte::comments/view', [
            'comment' => $comment,
        ]);
    }
    /**
     * Update comment information
     * @param int $id
     * @param Requests\Admin\CommentFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, Requests\Admin\CommentFormRequest $request)
    {
        $comment = Comments::find($id);
        $comment->name           = $request->input('name');
        $comment->status         = $request->input('status');
        $comment->description    = $request->input('description');
        try {
            $comment->save();
            $message = ['msg' => ' The comment was updated with success by!'];
            $this->log->logMessage(Logger::INFO, 'Comment with the id: '.$id.' was updated with success by the user with the id '.Auth::id());

        }catch(Exception $error){
            $message = ['msg_error' => $error->getMessage()];
            $this->log->logMessage(Logger::ERROR, $error->getMessage());
        }

        return redirect()->route('admin.comments')->with($message);
    }
}