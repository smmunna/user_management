<!-- HTML COMPONENTS -->


<div class="d-flex justify-content-center">
    <form action="http://localhost/user_management/Shared/Login/LoginCode.php" method="POST">
        <div class="mt-5">
            <h3>Verify your Login</h3>
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
        <div class="d-flex gap-3 mb-3">
            <div>
                <input type="radio" id="html" name="userroles" value="user">
                <label for="html">user</label>
            </div>
            <div>
                <input type="radio" id="html" name="userroles" value="admin">
                <label for="html">admin</label>
            </div>
        </div>
        <div>
        <button type="submit" id="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
</div>