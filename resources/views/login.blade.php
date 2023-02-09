@extends("component.master")
@section('content')
    <div>
        <div>Register</div>
        <form action="POST">
            @csrf 
        <div>
            <div>
                <div>First Name</div>
                <input type="text" id="name">
            </div>
            <div>
                <div>Email</div>
                <input type="email" id="email">
            </div>
            <div>
                <div>Gender</div>
                <label for="marb">Male</label>
                <input type="radio" name="gender" id="marb" value="male" >
                <label for="ferb">Female</label>
                <input type="radio" name="gender" id="ferb"value="female">
            </div>
            <div>
                <div>Password</div>
                <input type="password" id="password">
            </div>
        </div>
        <button type="submit">Submit</button>
        <a href="/register">Does not have account? click here to Register</a>
    </form>
    </div>
@endsection