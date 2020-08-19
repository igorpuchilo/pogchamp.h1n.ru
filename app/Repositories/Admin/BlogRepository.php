<?php


namespace App\Repositories\Admin;


use App\Models\Admin\Blog;
use App\Repositories\CoreRepository;
use DB;
use Storage;

class BlogRepository extends CoreRepository
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function getModelClass()
    {
        return Blog::class;
    }

    public function getAllRecords($paginate)
    {
        return $this->startConditions()
            ->select('blog.*')
            ->limit($paginate)
            ->paginate($paginate);
    }
    public function getRecord($id)
    {
        return $this->startConditions()
            ->find($id);
    }
    public function getBlogByAlias($alias){
        return $this->startConditions()
            ->where('alias', '=', $alias)
            ->first();
    }


    public function deleteFromDB($id)
    {
        if (isset($id)) {
            return DB::delete('DELETE FROM blog WHERE id = ?', [$id]);
        }
        return false;
    }
    public function getImg(Blog $blog)
    {
        clearstatcache();
        if (!empty(\Session::get('single'))) {
            $name = \Session::get('single');
            $blog->img = $name;
            \Session::forget('single');
            return;
        }
        if (empty(\Session::get('single')) && !is_file(WWW . '/storage/uploads/single/' . $blog->img)) {
            $blog->img = null;
        }
        return;
    }
    public function deleteImgGalleryFromPath($id)
    {
        if (isset($id)) {
            $singleImg = DB::table('blog')
                ->select('img')
                ->where('id', '=', $id)
                ->pluck('img')
                ->all();
            if (!empty($singleImg)) {
                if(DB::table('blog')->where('img',$singleImg)->count()<2)
                    Storage::disk('public')->delete('uploads/single/' . $singleImg[0]);
            }

        }
    }

    public function delImgIfExist($filename)
    {
        $this->startConditions()
            ->where('img', $filename)
            ->update(['img' => '']);
    }
}
