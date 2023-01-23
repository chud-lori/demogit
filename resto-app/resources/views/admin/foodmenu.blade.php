<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>

   @include('admin.admincss')

  </head>
  <body>
    <div class="container-scroller">

    @include('admin.navbar')

    <div style="position: relative; top: 60px; right: -150px">
        <form action="{{url('/uploadfood')}}" method="get" enctype="multipart/form-data" class="dropzone">


            @csrf

            <div>
                <label for="">Title</label>
                <input style="color: blue"  type="text" name="title" placeholder="write a title" required>
            </div>

            <div>
                <label for="">Price</label>
                <input style="color: blue" type="text" name="price" placeholder="write a price" required>
            </div>

            <div>
                <label for="">Image</label>
                <input style="color: blue" type="file" name="image"  required>
            </div>

            <div>
                <label for="">Description</label>
                <input style="color: blue" type="text" name="description" placeholder="write a description" required>
            </div>
            <div>
                <input style="color: black; background: white; padding: 10px" type="submit" value="Save">
            </div>

        </form>
    </div>

    </div>

    @include('admin.adminscript')
  </body>
</html>