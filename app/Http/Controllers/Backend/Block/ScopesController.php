<?php
namespace App\Http\Controllers\Backend\Block;

use App\Http\Controllers\Controller;
use App\Models\Block\Block;
use Illuminate\Http\Request;

/**
 * Class ScopesController.
 */
class ScopesController extends Controller
{

    /**
     * Show form edit scopes of use block
     * 
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $blockScopesData = Block::where('type', Block::TYPE_SCOPES)->first();
        if(!empty($blockScopesData)){
            $blockScopes = json_decode($blockScopesData->content, true);
        }
        return view('backend.block.scopes.index', compact('blockScopes'));
    }
    
    /**
     * @param Block $block
     * @param Request $request
     *
     * @return mixed
     */
    public function update(Block $block, Request $request)
    {
        if(!empty($request->content)){
            $dataScopes = json_decode($request->content, true);
            $scopes = (new Block)->createScopesData($dataScopes);
            $blockScopes = Block::where('type', Block::TYPE_SCOPES)->first();
            if(empty($blockScopes)){
                Block::create([
                    'type' => Block::TYPE_SCOPES,
                    'content' => json_encode($scopes),
                ]);
            }else{
                Block::where('type', Block::TYPE_SCOPES)->update(['content' => json_encode($scopes)]);
            }
        }
        return ['message' => 'The block scopes of use was successfully updated.'];
    }
}