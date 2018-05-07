<?php
namespace App\Http\Controllers\Backend\Block;

use App\Http\Controllers\Controller;
use App\Models\Block\Block;
use App\Http\Requests\Backend\Block\UpdateWelcomeRequest;

/**
 * Class WelcomeController.
 */
class WelcomeController extends Controller
{

    /**
     * Show form edit welcome block
     * 
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $blockWelcome = Block::where('type', Block::TYPE_SLIDE)->first();
        $blockWelcomes = [];
        if(!empty($blockWelcome)){
            $blockWelcomes = json_decode($blockWelcome->content, true);
        }
        // var_dump($blockWelcomes);
        return view('backend.block.welcome.index', compact('blockWelcomes'));
    }
    
    /**
     * @param User $user
     * @param UpdateWelcomeRequest $request
     *
     * @return mixed
     */
    public function update(Block $block, UpdateWelcomeRequest $request)
    {
        $blockWelcome = Block::where('type', Block::TYPE_SLIDE)->first();
        $titles = $request->title;
        $descriptions = $request->description;
        $buttonTexts = $request->button_text;
        $buttonLinks = $request->button_link;
        $dataUpdateWelcome = [];
        foreach($request->title as $kTitle => $vTitle){
            $dataUpdateWelcome[] = [
                'title' => $vTitle,
                'description' => $descriptions[$kTitle] ?? '',
                'button_text' => $buttonTexts[$kTitle] ?? '',
                'button_link' => $buttonLinks[$kTitle] ?? '',
            ];
        }
        if(empty($blockWelcome)){
            Block::create([
                'type' => Block::TYPE_SLIDE,
                'content' => json_encode($dataUpdateWelcome),
            ]);
        }else{
            Block::where('type', Block::TYPE_SLIDE)->update(['content' => json_encode($dataUpdateWelcome)]);
        }
        return redirect()->route('admin.block.welcome.get')->withFlashSuccess('The block welcome was successfully updated.');
    }
}