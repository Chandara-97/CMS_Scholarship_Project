@extends("admin.index");

@section("content")

   <div>
       <h1>Add new article</h1>
       <form action="/create" method="POST" enctype="multipart/form-data">
           @csrf
           <div class="form-group">
               <label for="title">Title</label>
               <input type="text" class="form-control" name="title">
           </div>

           <div class="form-group">
               <label for="category">Category</label>
               <select name="category" id="category" class="form-control">
                   <option value="js">JavaScript</option>
                   <option value="bootstrap">Bootstrap</option>
                   <option value="php">PHP</option>
               </select>
           </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="published">Public</option>
                    <option value="draft">Draft</option>
                </select>
            </div>
           <div class="form-group">
               <label for="image">Image</label>
               <input type="file" class="form-control-file" name="image">
           </div>

           <div class="form-group">
               <label for="content">Content</label>
               <textarea name="content" id="editor" class="form-control"  cols="30" rows="10" ></textarea>
           </div>
           <div class="form-group ">
               <input type="submit" class="btn btn-success" value="submit">
           </div>
       </form>
   </div>

@endsection()
