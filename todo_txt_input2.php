<!doctype html>
<html lang="ja">

<head>
    <title>Amazonpay</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<div class="text-center">
    <a id="skippy" class="sr-only sr-only-focusable" href="#content">
        <div class="container">
            <span class="skiplink-text">Skip to main content</span>
        </div>
    </a>

    <form class="form-signin" ,action="todo_txt_create.php" method="POST">
        <img class="mb-4" src="img/amazon-logo.png" alt="" width="150" height="150">
        <h1 class="h3 mb-3 font-weight-normal">サインイン</h1>
        <label for="inputEmail" class="sr-only">Eメールアドレス</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Eメールアドレス" required autofocus name="todo">
        <label for="inputPassword" class="sr-only">パスワード</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="パスワード" required name="deadline">

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> サインインしたままにする
            </label>
        </div>
        <button class="btn btn-lg btn-warning btn-block" type="submit">サインイン</button>
        <a href="todo_txt_read.php">一覧画面</a>
        <p class="mt-5 mb-3 text-muted">&copy; 令和2年</p>
    </form>
</div>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="/docs/4.3/assets/js/vendor/anchor.min.js"></script>
<script src="/docs/4.3/assets/js/vendor/clipboard.min.js"></script>
<script src="/docs/4.3/assets/js/vendor/bs-custom-file-input.min.js"></script>
<script src="/docs/4.3/assets/js/src/application.js"></script>
<script src="/docs/4.3/assets/js/src/search.js"></script>
<script src="/docs/4.3/assets/js/src/ie-emulation-modes-warning.js"></script>
</body>

</html>