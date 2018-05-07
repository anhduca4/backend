<?php
namespace App\Http\Controllers\Backend\Block;

use App\Http\Controllers\Controller;
use App\Models\Block\Block;
use App\Http\Requests\Backend\Block\UpdateProductRequest;

/**
 * Class ProductController.
 */
class ProductController extends Controller
{

    /**
     * Show form edit product & service block
     * 
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $blockProduct = Block::where('type', Block::TYPE_PRODUCT)->first();
        $blockProducts = [];
        if(!empty($blockProduct)){
            $blockProducts = json_decode($blockProduct->content, true);
        }
        return view('backend.block.product.index', compact('blockProducts'));
    }
    
    /**
     * @param Block $block
     * @param UpdateProductRequest $request
     *
     * @return mixed
     */
    public function update(Block $block, UpdateProductRequest $request)
    {
        $blockProduct = Block::where('type', Block::TYPE_PRODUCT)->first();
        $titleSmalls = $request->title_small;
        $contentSmalls = $request->content_small;
        $titleLarges = $request->title_large;
        $contentLarges = $request->content_large;
        $buttonTitles = $request->button_title;
        $buttonLinks = $request->button_link;
        if(empty($titleSmalls)){
            return redirect()->route('admin.block.product.get')->withFlashError('The block product was not successfully updated.');
        }
        $dataUpdateProduct = [];
        foreach($titleSmalls as $kTitle => $vTitle){
            $dataUpdateProduct[] = [
                'title_small' => $vTitle,
                'content_small' => $contentSmalls[$kTitle] ?? '',
                'title_large' => $titleLarges[$kTitle] ?? '',
                'content_large' => $contentLarges[$kTitle] ?? '',
                'button_title' => $buttonTitles[$kTitle] ?? '',
                'button_link' => $buttonLinks[$kTitle] ?? '',
            ];
        }
        if(empty($blockProduct)){
            Block::create([
                'type' => Block::TYPE_PRODUCT,
                'content' => json_encode($dataUpdateProduct),
            ]);
        }else{
            Block::where('type', Block::TYPE_PRODUCT)->update(['content' => json_encode($dataUpdateProduct)]);
        }
        return redirect()->route('admin.block.product.get')->withFlashSuccess('The block product was successfully updated.');
    }
}