<!DOCTYPE html>
<html lang="en">
    <?php include('views/header.inc.php'); ?>
    <body> 
    <div class="tittle">
        <h2>Login</h2>
    </div>
    <div class="content">
        <form method="POST" action="loginProcess.php"> 
        <div class="w-50 ml-auto mr-auto mt-5">
            <div class="mb-3 ">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="id">
            </div>
            <div class="mb-3 ">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
            </div>
        
            <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
        </div>
        </form>
        <div class="signup">
        <p>まだないならこちらで<a class="signup__btn" href="#">会員登録</a>しませんか？</p>
        </div>
    <!-- modal -->
    <div class="signup__form">
    <form action="signupProcess.php" method="POST" id="signup-form">
        <div class="w-50 ml-auto mr-auto mt-5">
        <div class="mb-3 ">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="メールアドレスを記入してください">
            </div>
            <div class="mb-3 ">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="パスワードを記入してください">
            </div>
            <div class="mb-3 ">
                <label for="passwordCheck" class="form-label">Confirm password</label>
                <input type="password" class="form-control" id="password-check" placeholder="パスワードを記入してください">
            </div>
            <button type="button" id="signup-button" class="btn btn-primary mb-3">会員登録</button>
        </div>
    </form>
    </div>
    <script>
        const signup__btn = document.querySelector('.signup__btn');
        const signup__form =  document.querySelector('.signup__form');

        signup__btn.addEventListener('click', () => {
            signup__form.classList.toggle('active');
            console.log("yey!");
        });

        const signupForm = document.querySelector("#signup-form");
        const signupButton = document.querySelector("#signup-button");
        const password = document.querySelector("#password");
        const passwordCheck = document.querySelector("#password-check");
        signupButton.addEventListener("click", function(e) {
            if(password.value&& password.value === passwordCheck.value){
                
            signupForm.submit();
            }else{
                alert("パスワードが一致しません。もう一度やり直してください。");
            }
        });
    </script>
    </div>
        <?php include('views/footer.inc.php'); ?>
    </body>
</html>

