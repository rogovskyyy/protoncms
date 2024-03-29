@include('admin_template.header')
<div class='login-box'>
    <div class='login-container'>
        <form action='/dashboard/action:menus:update' method='post'>
        @csrf
        <h2>Editing menu</h2><br />
            <div class="form-group">
                <label for="exampleInputEmail1">Menu name (e.g. Post, Blog)</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="name" value='{{ $name }}'>
            </div><br />
            <div class="form-group">
                <label for="exampleInputEmail1">Path (e.g. /post, /blog) </label>
                <input type="text" readonly  class="form-control" aria-describedby="emailHelp"  name="pathway" value='{{ $pathway }}'>
            </div><br />
            <div class="form-group">
                <label for="exampleInputEmail1">Type</label>
                <input type="text" readonly  class="form-control" aria-describedby="emailHelp" name="type" value='{{ $type }}'>
            </div><br />
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" class="form-control" name="description" value='{{ $description }}'>
            </div><br /><br />
            
            <div class="row">
                <div class="col-sm">
                    <button type="submit" class="btn btn-primary button-login-style" style='width: 100%'>Update</button>
                </div>
                <div class="col-sm">
                    <a href='/dashboard#menus'><div class="btn btn-primary button-login-style" style='width: 100%'>Cancel</div></a>
                </div>
            </div>
            </div>
        </form>
    </div>
</div><br />
<p style='text-align:center; font-size: 14px; color: white;'>Powered by ProtonCMS</p>