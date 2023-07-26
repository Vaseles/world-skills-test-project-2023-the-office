<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    
    <div class="pre__login__form">
        <form action="" method="POST">
            @csrf
            <h2>Sign In</h2>
            <input type="text" name="name" placeholder="Enter your name..." required />
            <div class="avatars">
                <div class="avatar">
                    <input type="checkbox" name="ava" value="avatar-01.svg" />
                    <img src="/avatars/avatar-01.svg" alt="avatar-01.svg">
                </div>
                <div class="avatar">
                    <input type="checkbox" name="ava" value="avatar-02.svg" />
                    <img src="/avatars/avatar-02.svg" alt="avatar-02.svg">
                </div>
                <div class="avatar">
                    <input type="checkbox" name="ava" value="avatar-03.svg" />
                    <img src="/avatars/avatar-03.svg" alt="avatar-01.svg">
                </div>
                <div class="avatar">
                    <input type="checkbox" name="ava" value="avatar-04.svg" />
                    <img src="/avatars/avatar-04.svg" alt="avatar-01.svg">
                </div>
                <div class="avatar">
                    <input type="checkbox" name="ava" value="avatar-05.svg" />
                    <img src="/avatars/avatar-05.svg" alt="avatar-01.svg">
                </div>
                <div class="avatar">
                    <input type="checkbox" name="ava" value="avatar-06.svg" />
                    <img src="/avatars/avatar-06.svg" alt="avatar-01.svg">
                </div>
                <div class="avatar">
                    <input type="checkbox" name="ava" value="avatar-07.svg" />
                    <img src="/avatars/avatar-07.svg" alt="avatar-01.svg">
                </div>
                <div class="avatar">
                    <input type="checkbox" name="ava" value="avatar-08.svg" />
                    <img src="/avatars/avatar-08.svg" alt="avatar-01.svg">
                </div>
                <div class="avatar">
                    <input type="checkbox" name="ava" value="avatar-09.svg" />
                    <img src="/avatars/avatar-09.svg" alt="avatar-01.svg">
                </div>
                <div class="avatar">
                    <input type="checkbox" name="ava" value="avatar-10.svg" />
                    <img src="/avatars/avatar-10.svg" alt="avatar-01.svg">
                </div>
                <div class="avatar">
                    <input type="checkbox" name="ava" value="avatar-11.svg" />
                    <img src="/avatars/avatar-11.svg" alt="avatar-01.svg">
                </div>
                <div class="avatar">
                    <input type="checkbox" name="ava" value="avatar-12.svg" />
                    <img src="/avatars/avatar-12.svg" alt="avatar-01.svg">
                </div>
                <div class="avatar">
                    <input type="checkbox" name="ava" value="avatar-13.svg" />
                    <img src="/avatars/avatar-13.svg" alt="avatar-01.svg">
                </div>
                <div class="avatar">
                    <input type="checkbox" name="ava" value="avatar-14.svg" />
                    <img src="/avatars/avatar-14.svg" alt="avatar-01.svg">
                </div>
                <div class="avatar">
                    <input type="checkbox" name="ava" value="avatar-15.svg" />
                    <img src="/avatars/avatar-15.svg" alt="avatar-01.svg">
                </div>
                <div class="avatar">
                    <input type="checkbox" name="ava" value="avatar-16.svg" />
                    <img src="/avatars/avatar-16.svg" alt="avatar-01.svg">
                </div>
                <div class="avatar">
                    <input type="checkbox" name="ava" value="avatar-17.svg" />
                    <img src="/avatars/avatar-17.svg" alt="avatar-01.svg">
                </div>
                <div class="avatar">
                    <input type="checkbox" name="ava" value="avatar-18.svg" />
                    <img src="/avatars/avatar-18.svg" alt="avatar-01.svg">
                </div>
                <div class="avatar">
                    <input type="checkbox" name="ava" value="avatar-19.svg" />
                    <img src="/avatars/avatar-19.svg" alt="avatar-01.svg">
                </div>
            </div>
            @if ($message)
            <div class="message">{{ $message }}</div>
            @endif
            <button class="btn">Continue</button>
        </form>
    </div>

</body>
</html>