<!-- HTML COMPONENTS -->


<div class="d-flex justify-content-center">
    <form action="http://localhost/user_management/Shared/Login/LoginCode.php" method="POST">
        <div class="mt-5">
            <h3>User Login</h3>
            <hr>
        </div>
        <p class="fs-6 fw-bold " style="color: red;" id="error-message"></p>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Enter your email">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class=" col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="text" name="password" class="form-control" id="inputPassword3" placeholder="Enter your password">
            </div>
        </div>

        <button type="submit" id="submit" class="btn btn-primary">Sign in</button>
    </form>
</div>


<script>
    // document.getElementById('submit').addEventListener(("click"), (event) => {
    //     event.preventDefault()
    //     const passwordValidate = document.getElementById('inputPassword3').value;

    //     if (passwordValidate.length < 3) {
    //         document.getElementById('error-message').innerHTML = "Password length Must be 3 characters long...";
    //         return
    //     } else if (passwordValidate.search(/[a-z]/i) < 0) {
    //         document.getElementById('error-message').innerHTML = "At least containing one lowercase alphabet...";
    //         return
    //     } else {
    //         document.getElementById('error-message').innerHTML = "";
    //         // window.location.href = "http://localhost/user_management/Shared/Login/LoginCode.php";
    //     }
    // })
</script>