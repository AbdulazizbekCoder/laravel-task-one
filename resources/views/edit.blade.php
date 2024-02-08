<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{asset("assets/js/app.js")}}"></script>
</head>
<body>
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('update', $post['id'])}}" method="post">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Edit Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                @if(isset($post)  !== false)
                    <div class="modal-body">
                        <div class="form-group">
                            <label>title</label>
                            <input value="{{$post->title}}" name="title" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea class="form-control" name="content" required>{{$post->content}}</textarea>
                        </div>
                    </div>
                @else

                    <div class="modal-body">
                        <div class="form-group">
                            <label>title</label>
                            <input  type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                    </div>
                @endif
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" value="Save">
                </div>
            </form>
        </div>
</div>
</body>
</html>
