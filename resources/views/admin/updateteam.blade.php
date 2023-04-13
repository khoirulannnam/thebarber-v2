<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" type="text/css" href="../adminx/dist/css/adminx.css" media="screen" />

        <!--
          # Optional Resources
          Feel free to delete these if you don't need them in your project
        -->
        <base href="/public">
      </head>


<body>
    <div class="adminx-container">
        @include('admin.navbar')

        @include('admin.sidebar')


        <div class="">

            <div class="cd-flex justify-content-center"  style="padding-top:100px; padding-left:600px">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif

                <form action="/uploadupdate/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    <div><b>Update Kapster</b></div>
                    @csrf
                    <div style="padding:15px">
                        <label for="">Name</label>
                        <input type="text" style="color:black" name="name" placeholder="Write Name" required="" value="{{$data->name}}">
                    </div>
                    <div style="padding:15px">
                        <label for="">Instagram</label>
                        <input type="text" style="color:black" name="instagram" placeholder="Write Instagram" required="" value="{{$data->instagram}}" >
                    </div>
                    <div style="padding:15px">
                        <label for="">Photo</label>

                    </div>
                    <div>
                        <label for=""><img src="teamimage/{{$data->image}}" alt="" width="75"> </label>

                    </div>
                    <div><input type="file" style="color:black" name="file" required=""></div>
                    <div style="padding: 15px">
                        <input type="submit" class="btn btn-outline-dark">
                    </div>
                </form>
            </div>

        </div>
    </div>
    @include('admin.js')
</body>

</html>
