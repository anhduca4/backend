<?php

namespace App\Models\Block;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Block.
 */
class Block extends Model
{
    const TYPE_SLIDE = 'slide';
    const TYPE_INTRODUCE = 'introduce';
    const TYPE_PRODUCT = 'product';
    const TYPE_SCOPES = 'scopes';
    const TYPE_BENNEFIT = 'bennefit';
    const TYPE_TEAM = 'team';
    const TYPE_NETWORK = 'network';
    const TYPE_CONTACT_US = 'contact_us';
    const TYPE_FOOTER = 'footer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'content',
    ];

    /**
     * Create data array scopes
     * 
     * @param array $dataScopes
     * @return array
     */
    public function createScopesData($dataScopes){
        $_dataScopes = [];
        foreach($dataScopes as $vScopes){
            $scopes = [];
            $scopes['name'] = $vScopes['name'] ?? '';
            // var_dump($vScopes['children']);
            if(isset($vScopes['children']) && !empty($vScopes['children']) && is_array($vScopes['children'])){
                $scopes['children'] = self::createScopesData($vScopes['children']);
            }
            $_dataScopes[] = $scopes;
        }
        return $_dataScopes;
    }
}
