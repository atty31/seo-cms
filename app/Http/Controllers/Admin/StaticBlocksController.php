<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Logs\Admin\Log;
use App\Http\Requests;
use App\Models\Admin\Blocks;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Monolog\Logger;

/**
 * Class StaticBlocksController
 * @package App\Http\Controllers\Admin
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class StaticBlocksController extends Controller
{
    /**
     * Log file name
     * @var string
     */
    private $logFileName = 'blocks';

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
        $this->middleware('auth');
    }

    public function index()
    {
        $blocks = DB::table('blocks')->select('blocks.title as title', 'blocks.id as id', 'blocks.identifier as identifier',
            'blocks.status as status', 'blocks.default as default', 'blocks.type as type', 'blocks.updated_at as updated_at')
            ->paginate(30);

        return view('adminlte::blocks/list',  [
            'blocks' => $blocks
        ]);
    }

    /**
     * @param string $type
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function defaultType(string $type)
    {
        $blocks = DB::table('blocks')->select('blocks.title as title', 'blocks.id as id', 'blocks.identifier as identifier',
            'blocks.status as status', 'blocks.default as default', 'blocks.type as type', 'blocks.updated_at as updated_at')
            ->where('blocks.type', $type)
            ->paginate(30);

        return view('adminlte::blocks/list',  [
            'blocks' => $blocks
        ]);
    }

    public function newBlock()
    {
        return view('adminlte::blocks/new');
    }

    public function store(Requests\Admin\BlockFormRequest $request)
    {
        $block = new Blocks();
        $block->title      = trim($request->input('title'));
        $block->type       = $request->input('type');
        $block->identifier = $request->input('identifier');
        $block->content    = trim($request->input('content'));
        $block->status     = $request->input('status');
        $block->default    = 0;

        try{
            $block->save();
            $message = ['msg' => 'A new block was created!'];
            $this->log->logMessage(Logger::INFO, 'A new block: '. $block->title.' - was created by the user with the id '.Auth::id());
        }catch(Exception $error){
            $message = ['msg_error' => $error->getMessage()];
            $this->log->logMessage(Logger::ERROR, $error->getMessage());
        }

        return redirect()->route('admin.blocks')->with($message);
    }

    /**
     * Update static block
     * @param int $id
     * @param Requests\Admin\BlockFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(int $id, Requests\Admin\BlockFormRequest $request)
    {
        $block = Blocks::find($id);
        $block->title    = $request->input('title');
        $block->status   = $request->input('status');
        $block->content  = trim($request->input('content'));
        if ((int) $request->input('default') !== 1){ // don't update type & identifier for default static blocks
            $block->type = $request->input('type');
            $block->identifier = $request->input('identifier');
        }
        try{
            $block->save();
            $message = 'Block updated with success !';
            $this->log->logMessage(Logger::INFO, 'The block: '. $block->title.' - was updated by the user with the id '.Auth::id());
        }catch (Exception $error){
            $message = ['msg_error' => $error->getMessage()];
            $this->log->logMessage(Logger::ERROR, $error->getMessage());
        }
        return redirect()->route('admin.blocks')->with(['msg' => $message]);
    }

    /**
     * Renders view page for static block
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view(int $id)
    {
        $block = Blocks::find($id);

        return view('adminlte::blocks/view',  [
            'block' => $block
        ]);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id)
    {
        $message = 'Something went wrong, please try again!';
        if (Blocks::destroy($id)){
            $this->log->logMessage(Logger::INFO, 'The block with the id: '. $id.' - was deleted by the user with the id '.Auth::id());
            $message = 'A block was deleted';
        }
        return redirect()->route('admin.blocks')->with(['delete_msg' => $message]);
    }
}
