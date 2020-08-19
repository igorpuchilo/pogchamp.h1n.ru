<?php

namespace App\Http\Controllers\Shop\Admin;

use App\Http\Controllers\Shop\Admin\AdminBaseController;
use App\Models\Admin\Blog;
use App\Http\Requests\AdminBlogCreateRequest;
use MetaTag;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Storage;

class BlogController extends AdminBaseController
{
    private $blogRepository;

    public function __construct()
    {
        parent::__construct();
        $this->blogRepository = app(\App\Repositories\Admin\BlogRepository::class);
    }

    public function index()
    {
        $blog = $this->blogRepository->getAllRecords(7);
        return view('shop.admin.blog.index', compact('blog'));
    }

    public function create(Request $request)
    {
        MetaTag::setTags(['title' => 'Create New Blog Record']);
        return view('shop.admin.blog.add');

    }

    public function store(AdminBlogCreateRequest $request)
    {
        $data = $request->input();
        $blog = (new Blog())->create($data);
        $id = $blog->id;
        $blog->title = $request->title;
        $blog->img = $request->img;
        $blog->description = $request->description;
        $blog->blog_content = $request->blog_content;
        $this->blogRepository->getImg($blog);
        $save = $blog->save();
        if ($save) {
            return redirect()->route('shop.admin.blog.index', $id)->with(['success' => 'Saved']);
        } else {
            return back()
                ->withErrors(['msg' => 'Error on save!'])
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing blog
     */
    public function edit($id)
    {
        MetaTag::setTags(['title' => 'Edit Exist Record']);
        $blog = $this->blogRepository->getRecord($id);
        return view('shop.admin.blog.edit', compact('blog', 'id'));
    }

    /**
     * Update the specified blog
     */
    public function update(AdminBlogCreateRequest $request, $id)
    {
        switch ($request->input('action')) {
            case 'save':
                $blog = $this->blogRepository->getRecord($id);
                if (empty($blog)) {
                    return back()
                        ->withErrors(['msg' => 'Record not found!'])
                        ->withInput();
                }

                $data = $request->all();
                $result = $blog->update($data);
                $this->blogRepository->getImg($blog);
                $save = $blog->save();
                if ($save && $result) {
                    return redirect()
                        ->route('shop.admin.blog.edit', [$id])
                        ->with(['success' => 'Saved']);
                } else {
                    return back()
                        ->withErrors(['msg' => 'Error on save!'])
                        ->withInput();
                }
                break;
            case 'create':
                $data = $request->all();
                $blog = (new Blog())->create($data);
                $id = $blog->id;
                $blog->title = $request->title;
                $blog->blog_content = $request->blog_content;
                $blog->description = $request->description;
                $this->blogRepository->getImg($blog);
                $save = $blog->save();
                if ($save) {
                    return redirect()->route('shop.admin.blog.edit', $id)->with(['success' => 'Saved']);
                } else {
                    return back()
                        ->withErrors(['msg' => 'Error on save!'])
                        ->withInput();
                }
                break;
        }
        return back()->withErrors(['msg' => 'Error on save!']);
    }

    public function deleteBlog($id)
    {
        if ($id) {
            $this->blogRepository->deleteImgGalleryFromPath($id);
            $db = $this->blogRepository->deleteFromDB($id);
            if ($db) {
                return redirect()
                    ->back()
                    ->withInput()
                    ->with(['success' => "Blog Record [$id] was deleted from DataBase"]);
            } else {
                return back()->withErrors(['msg' => 'Error on save'])->withInput();
            }
        }
    }

    public function ajaxImage(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('shop.admin.blog.include.image_single_edit');
        } else {
            $valid = \Validator::make($request->all(),
                [
                    'file' => 'image|max:3000',
                ]);
            if ($valid->fails()) {
                return array('fail' => true, 'errors' => $valid->errors());
            }
        }
        $extens = $request->file('file')->getClientOriginalExtension();
        $dir = 'uploads/single/';
        $filename = uniqid() . '.' . $extens;
        $uploadfile = $dir . $filename;
        $image = Image::make($request->file('file'))->resize(900, 300, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('jpg',100);
        Storage::put($uploadfile, $image->encode(null,100));
        \Session::put('single', $filename);
        return $filename;
    }

    //delete image from storage
    public function deleteImage($filename)
    {
        $this->blogRepository->delImgIfExist($filename);
        Storage::disk('public')->delete('uploads/single/' . $filename);
    }
}
