<?php

namespace App\Observers;

use App\Models\Admin\Blog;
use Illuminate\Support\Carbon;

class AdminBlogObserver
{
    public function creating(Blog $blog){
        $this->setAlias($blog);
    }
    /**
     * Handle the product "created" event.
     *
     * @param  \App\Models\Admin\Blog  $blog
     * @return void
     */
    public function created(Blog $blog)
    {
        //
    }

    /**
     * Handle the product "updated" event.
     *
     * @param  \App\Models\Admin\Blog  $blog
     * @return void
     */
    public function updated(Blog $blog)
    {
        //
    }

    /**
     * Handle the product "deleted" event.
     *
     * @param  \App\Models\Admin\Blog  $blog
     * @return void
     */
    public function deleted(Blog $blog)
    {
        //
    }

    /**
     * Handle the product "restored" event.
     *
     * @param  \App\Models\Admin\Blog  $blog
     * @return void
     */
    public function restored(Blog $blog)
    {
        //
    }

    /**
     * Handle the product "force deleted" event.
     *
     * @param  \App\Models\Admin\Blog  $blog
     * @return void
     */
    public function forceDeleted(Blog $blog)
    {
        //
    }
    public function setAlias(Blog $blog){
        if (empty($blog->alias)) {
            $blog->alias = \Str::slug($blog->title);
            $check = Blog::where('alias', '=', $blog->alias)->exists();
            if ($check){
                $blog->alias = \Str::slug($blog->title) . uniqid();
            }
        }
    }
    public function saving(Blog $blog){
        $this->setPublishedAt($blog);
    }
    public function setPublishedAt(Blog $blog){
        $needSetPublished = empty($blog->date) || !empty($blog->date);
        if($needSetPublished){
            $blog->date = Carbon::now();
        }
    }
}
