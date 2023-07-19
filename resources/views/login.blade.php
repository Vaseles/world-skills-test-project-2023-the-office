<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    
    <div class="pre__login__form">
        <form action="" class="login__form" method="POST">
            @csrf
            <h2>Sign In</h2>
            <p>Welcome to virtual office!</p>
            <input 
                type="text"
                placeholder="Enter your name..."
                name="name"
                required
            />

            <div class="avatars">
                <div class="avatar">
                    <img src="/avatars/avatar-01.svg" alt="avatar-01">
                    <input type="checkbox" name='avatar' value="avatar-01.svg">
                </div>
                <div class="avatar">
                    <img src="/avatars/avatar-02.svg" alt="avatar-02">
                    <input type="checkbox" name='avatar' value="avatar-02.svg">
                </div>
                <div class="avatar">
                    <img src="/avatars/avatar-03.svg" alt="avatar-03">
                    <input type="checkbox" name='avatar' value="avatar-01.svg">
                </div>
                <div class="avatar">
                    <img src="/avatars/avatar-04.svg" alt="avatar-04">
                    <input type="checkbox" name='avatar' value="avatar-04.svg">
                </div>
                <div class="avatar">
                    <img src="/avatars/avatar-05.svg" alt="avatar-05">
                    <input type="checkbox" name='avatar' value="avatar-05.svg">
                </div>
                <div class="avatar">
                    <img src="/avatars/avatar-06.svg" alt="avatar-06">
                    <input type="checkbox" name='avatar' value="avatar-06.svg">
                </div>
                <div class="avatar">
                    <img src="/avatars/avatar-07.svg" alt="avatar-07">
                    <input type="checkbox" name='avatar' value="avatar-07.svg">
                </div>
                <div class="avatar">
                    <img src="/avatars/avatar-08.svg" alt="avatar-08">
                    <input type="checkbox" name='avatar' value="avatar-08.svg">
                </div>
                <div class="avatar">
                    <img src="/avatars/avatar-09.svg" alt="avatar-09">
                    <input type="checkbox" name='avatar' value="avatar-09.svg">
                </div>
                <div class="avatar">
                    <img src="/avatars/avatar-10.svg" alt="avatar-10">
                    <input type="checkbox" name='avatar' value="avatar-10.svg">
                </div>
                <div class="avatar">
                    <img src="/avatars/avatar-11.svg" alt="avatar-11">
                    <input type="checkbox" name='avatar' value="avatar-11.svg">
                </div>
                <div class="avatar">
                    <img src="/avatars/avatar-12.svg" alt="avatar-12">
                    <input type="checkbox" name='avatar' value="avatar-12.svg">
                </div>
                <div class="avatar">
                    <img src="/avatars/avatar-13.svg" alt="avatar-13">
                    <input type="checkbox" name='avatar' value="avatar-13.svg">
                </div>
                <div class="avatar">
                    <img src="/avatars/avatar-14.svg" alt="avatar-14">
                    <input type="checkbox" name='avatar' value="avatar-14.svg">
                </div>
                <div class="avatar">
                    <img src="/avatars/avatar-15.svg" alt="avatar-15">
                    <input type="checkbox" name='avatar' value="avatar-15.svg">
                </div>
                <div class="avatar">
                    <img src="/avatars/avatar-16.svg" alt="avatar-16">
                    <input type="checkbox" name='avatar' value="avatar-16.svg">
                </div>
                <div class="avatar">
                    <img src="/avatars/avatar-17.svg" alt="avatar-17">
                    <input type="checkbox" name='avatar' value="avatar-17.svg">
                </div>
                <div class="avatar">
                    <img src="/avatars/avatar-18.svg" alt="avatar-18">
                    <input type="checkbox" name='avatar' value="avatar-18.svg">
                </div>
                <div class="avatar">
                    <img src="/avatars/avatar-19.svg" alt="avatar-19">
                    <input type="checkbox" name='avatar' value="avatar-19.svg">
                </div>
            </div>

            @if ($message) 
            <div class="error">{{ $message }}</div>
            @endif

            <button class="btn">Continue</button>
        </form>
    </div>
</body>
</html>