<div class="box box-danger box-solid">
    <div class="box-header">
        <h3 class="box-title">Main Image</h3>
    </div>
    <div class="box-body" id="image" style="border: 1px solid whitesmoke;text-align: center;position: relative">
        @if ($blog->img == null)
            <img class="card-img-top" width="50%" height="50%" src="{{asset("storage/images/no_image.jpg")}}" id="preview_image"/>
        @else
            <img class="card-img-top" src="{{asset("storage/uploads/single/$blog->img")}}" id="preview_image"/>
        @endif
        <i id="loading" class="fa fa-spinner fa-spin fa-3x fa-fw"
           style="position: absolute;left: 40%;top: 40%;display: none"></i>
    </div>
    <p style="text-align: center">
        <a href="javascript:changeProfile()" style="text-decoration: none;" data-name="single">
            <i class="glyphicon glyphicon-edit"></i> Upload
        </a>
        @if ($blog->img == null)
            <a href="javascript:removeFile()" style="color: red;text-decoration: none;" class="nothing">
                <i class="glyphicon glyphicon-trash"></i> Delete
            </a>
        @else
            <a href="javascript:removeFileImg()" style="color: red;text-decoration: none;" class="myimg" data-name="{{$blog->img}}">
                <i class="glyphicon glyphicon-trash"></i> Delete
            </a>
        @endif
    </p>
    <input type="file" id="file" style="display: none"/>
    <input type="hidden" id="file_name"/>
    <p style="text-align: center">
        <small>Recommended size: 900x300</small>
    </p>
</div>
