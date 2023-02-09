@extends("component.master")
@section('content')
    <div>
        <div>Register</div>
        <form action="/register" method="POST" enctype="multipart/form-data" class="item-form">
            @csrf 
        <div>
            <div>
                <div>First Name</div>
                <input type="text" name="first_name" id="name">
            </div>
            <div>
                <div>Last Name</div>
                <input type="text" name="last_name" id="email">
            </div>
            <div>
                <div>Gender</div>
                <label for="marb">Male</label>
                <input type="radio" name="gender" id="marb" value="male" >
                <label for="ferb">Female</label>
                <input type="radio" name="gender" id="ferb" value="female">
            </div>
            <div>
                <div>Password</div>
                <input type="password" name="password" id="password">
            </div>
        </div>
        <div>
            <div>
                <div>Email</div>
                <input type="email" name="email" id="text">
            </div>
            <div>
                <div>Role</div>
                <input type="text" name="role" id="role">
            </div>
            <div>
                <div>Display Picture</div>
                <input type="file" name="picture" id="picture">
            </div>
            <div>
                <div>Confirm Password</div>
                <input type="password" name="password_confirmation" id="password">
            </div>
        </div>
        <button type="submit">Submit</button>
        <a href="/login">Already have an account? click here to login</a>
    </form>
    </div>
@endsection