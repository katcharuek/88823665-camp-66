@extends('layouts.default')

@section('content')
<div class="register-page" style="background-color: #FAEBD7; padding: 40px; border-radius: 15px;">
  <div class="register-box" style="max-width: 600px; margin: auto;">
    <div class="register-logo">
      <a href="../index2.html" style="color: #8B4513; font-size: 28px;"><b>Admin</b>LTE</a>
    </div>
    <div class="card" style="border: none; box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.1);">
      <div class="card-body register-card-body" style="background-color: #FFF8DC; border-radius: 15px; padding: 30px;">
        <p class="register-box-msg" style="color: #8B4513; font-weight: bold; font-size: 20px;">Sign up for a new account</p>
        <form action="{{url('/register')}}" onsubmit="return allcheck(event)" method="post">
          @csrf
          <div class="input-group mb-4">
            <input type="text" name="name" id="name" class="form-control" placeholder=" first and last name" style="height: 50px; font-size: 18px;" oninput="checkname()"/>
            <div class="input-group-text"><span class="bi bi-person"></span></div>
            <div class="valid-feedback">correct</div>
            <div class="invalid-feedback">"Please enter your first and last name"</div>
          </div>
          <div class="input-group mb-4">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" style="height: 50px; font-size: 18px;" oninput="checkemail()"/>
            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
            <div class="valid-feedback">"Email is correct."</div>
            <div class="invalid-feedback">"Please enter a valid email"</div>
          </div>
          <div class="input-group mb-4">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" style="height: 50px; font-size: 18px;" oninput="checkpassword()" />
            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            <div class="valid-feedback">"Password is correct."</div>
            <div class="invalid-feedback">"Please enter the correct password"</div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">
                "Accept" <a href="#">"Terms of Service"</a>
                </label>
              </div>
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary w-100" style="height: 50px; font-size: 18px;">Sign up</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
function checkname() {
    let name = $('#name').val().trim(); 
    if (name !== "" && name.length >= 3) {
        $('#name').removeClass('is-invalid').addClass('is-valid'); 
        return true;
    } else {
        $('#name').removeClass('is-valid').addClass('is-invalid'); 
        return false;
    }
}
function checkemail() {
    let email = $('#email').val(); 
    let emailcorrect = /^[a-zA-Z0-9+-_%.]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9]{2,}$/;
    if (emailcorrect.test(email)) {
        $('#email').removeClass('is-invalid').addClass('is-valid'); 
        return true;
    } else {
        $('#email').removeClass('is-valid').addClass('is-invalid'); 
        return false;
    }
}
function checkpassword() {
    let passwordcorrect = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[\d])[a-zA-Z0-9+-_%.]{8,}$/;
    let password = $('#password').val(); 
    if (passwordcorrect.test(password)) {
        $('#password').removeClass('is-invalid').addClass('is-valid'); 
        return true;
    } else {
        $('#password').removeClass('is-valid').addClass('is-invalid'); 
        return false;
    }
}
function allcheck(event){
    event.preventDefault();
    let checkbox = document.getElementById("flexCheckDefault").checked;
    let confirm = checkname() && checkemail() && checkpassword() && checkbox;
    let title = confirm ? "Success" : "An error occurred";
    let text = !checkname() ? "Please enter your full name" :
               !checkemail() ? "Please enter a valid email address" :
               !checkpassword() ? "Please enter the correct password" :
               "Thank you for signing up.";
    let icon = confirm ? "success" : "error";
    swal.fire({ title: title, text: text, icon: icon });
    if (confirm) {
        event.target.submit();
    }
}
</script>
@endsection