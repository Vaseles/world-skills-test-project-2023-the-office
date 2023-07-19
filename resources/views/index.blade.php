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

    <div class="page">
        <input type="hidden" value="{{ $user->id }}" id='userId'>
        <div class="page__left">
            {{-- profile --}}
            <div class="page__left__profile">
                <a href="/logout/{{ $user->id }}" id="signout" class="btn">logout</a>
                <div class="page__left__info"></div>  
            </div>

            {{-- page rooms --}}
            <div class="page__left__rooms">
                info
            </div>

            {{-- chat --}}
            <div class="page__left__chat">
                <div class="messages"></div>
                <div action="page__left__chat__form" >
                    <input type="text" id='message' placeholder="enter your message...">
                    <button class="btn" id='create__message'>></button>
                </div>
            </div>
        </div>
        <div class="page__right" style="background-image: url('/office/office_base_clean.png')">

        </div>
    </div>

    <script src="/app.js"></script>
</body>
</html>