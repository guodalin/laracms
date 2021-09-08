<?php
/**
 * LaraCMS - CMS based on laravel
 *
 * @category  LaraCMS
 * @package   Laravel
 * @author    Wanglelecc <wanglelecc@gmail.com>
 * @date      2018/06/06 09:08:00
 * @copyright Copyright 2018 LaraCMS
 * @license   https://opensource.org/licenses/MIT
 * @github    https://github.com/wanglelecc/laracms
 * @link      https://www.laracms.cn
 * @version   Release 1.0
 */

namespace Wanglelecc\Laracms\Http\Controllers;

use Illuminate\Http\Request;
use Wanglelecc\Laracms\Models\Article;
use Wanglelecc\Laracms\Models\Category;

/**
 * 前台公共控制器
 *
 * Class WelcomeController
 * @package Wanglelecc\Laracms\Http\Controllers
 */
class WelcomeController extends Controller
{
    /**
     * 前台首页
     *
     * @return mixed
     */
    public function index()
    {
        $block = get_block("2018_03_04_235036_index_case_news_block");
        $category_id = get_block_params($block->content, 'category_id', 0);
        $category = Category::find($category_id);
        $children = $category->children();
        return frontend_view('welcome', compact('children'));
    }

    /**
     * 关于我们
     */
    public function company(){
        return frontend_view('company');
    }

    /**
     * 站点地图
     */
    public function map(){
        return frontend_view('map');
    }
}
