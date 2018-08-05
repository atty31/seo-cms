<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Comments;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Admin\Pages;
use App\Http\Logs\Admin\Log;
use Monolog\Logger;
use Exception;
use Illuminate\Support\Facades\Redirect;
/**
 * Class CommentsController
 * @package App\Http\Controllers\Frontend
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class CommentsController extends Controller
{
    /**
     * Log file name
     * @var string
     */
    private $logFileName = 'comments';
    /**
     * @var
     */
    private $log;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->log = new Log($this->logFileName);
    }

    /**
     * @param int $id
     * @param Requests\Frontend\CommentsFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(int $id, Requests\Frontend\CommentsFormRequest $request)
    {
        if (!Pages::getPageById($id)) {  // check if page exists
            $this->log->logMessage(Logger::ERROR, 'No page was found with the id='.$id);
            return abort(404);
        }

        $comment = new Comments();
        $comment->page_id = $id;
        $comment->name = $request['name'];
        $comment->description = $request['description'];
        $comment->status = Comments::HIDDEN;

        try{
            $comment->save();

        }catch (Exception $error){
            $this->log->logMessage(Logger::ERROR, $error->getMessage());
        }
        return Redirect::to(Pages::getPageFullUrlById($id).'?c=1');
    }

}
