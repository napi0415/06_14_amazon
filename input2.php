<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmazonPay</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="text-center">
        <a id="skippy" class="sr-only sr-only-focusable" href="#content">
            <div class="container">
                <span class="skiplink-text">Skip to main content</span>
            </div>
        </a>

        <form class="form-signin" action="create.php" method="POST">
            <img class="mb-1" src="img/amazon-logo.png" alt="" width="300" height="300">
            <fieldset>
                <h1 class="h3 mb-3 font-weight-normal">サインイン</h1>
                <div>
                    <label for="inputEmail" class="sr-only">Eメールアドレス</label>
                    <input type="email" name="todo" id="inputEmail" placeholder="Eメールアドレス" required autofocus>
                </div>
                <div>
                    <input type="password" name="deadline" id="inputPassword" placeholder="パスワード" required name="deadline">
                </div>
                <div class="checkbox mt-3 mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> サインインしたままにする
                    </label>
                </div>
                <div>
                    <button class="btn mb-3 btn-lg btn-warning">サインイン</button>
                </div>
            </fieldset>
        </form>





        <a href="read.php">一覧画面</a>
        <p class="mt-5 mb-3 text-muted">&copy; 令和2年</p>
        </form>
    </div>


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