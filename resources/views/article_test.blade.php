<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="{{ asset('js/app.js') }}"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('add-article') }}" method="POST">
                @csrf
                <div id="contact-form" class="form-container" data-form-container style="color: rgb(46, 125, 50); background: rgb(200, 230, 201);">
                    <div class="row">
                        <div class="form-title">
                            <span> Create Post </span>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="row">
					        <span class="req-input valid" >
						        <span class="input-status" data-toggle="tooltip" data-placement="top" title="Input your post title."> </span>
						        <input name="postName" type="text" data-min-length="8" placeholder="Post Title" value="testing post">
					        </span>
                        </div>
                        <div class="row">
					        <span class="req-input message-box valid">
						        <span class="input-status" data-toggle="tooltip" data-placement="top" title="Post Contents."> </span>
						        <textarea name="postContent" type="textarea" data-min-length="10" placeholder="Post Contents">
                                </textarea>
                            </span>
                        </div>
                        <div class="row submit-row">
                            <button type="submit" class="btn btn-block submit-form valid">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
