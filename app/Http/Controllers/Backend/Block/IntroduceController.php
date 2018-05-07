<?php
namespace App\Http\Controllers\Backend\Block;

use App\Http\Controllers\Controller;
use App\Models\Block\Block;
use App\Http\Requests\Backend\Block\UpdateIntroduceRequest;

/**
 * Class IntroduceController.
 */
class IntroduceController extends Controller
{

    /**
     * Show form edit introduce block
     * 
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $blockIntroduce = Block::where('type', Block::TYPE_INTRODUCE)->first();
        $blockIntroduces = [];
        if(!empty($blockIntroduce)){
            $blockIntroduces = json_decode($blockIntroduce->content, true);
        }
        return view('backend.block.introduce.index', compact('blockIntroduces'));
    }
    
    /**
     * @param Block $block
     * @param UpdateIntroduceRequest $request
     *
     * @return mixed
     */
    public function update(Block $block, UpdateIntroduceRequest $request)
    {
        $blockIntroduce = Block::where('type', Block::TYPE_INTRODUCE)->first();
        $dataIntroduce = json_encode([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        if(empty($blockIntroduce)){
            Block::create([
                'type' => Block::TYPE_INTRODUCE,
                'content' => $dataIntroduce,
            ]);
        }else{
            Block::where('type', Block::TYPE_INTRODUCE)->update(['content' => $dataIntroduce]);
        }
        return redirect()->route('admin.block.introduce.get')->withFlashSuccess('The block introduce was successfully updated.');
    }
}