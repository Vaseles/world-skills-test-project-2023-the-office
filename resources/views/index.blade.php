<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $user->name }} in the Office</title>

    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    
    <input type="hidden" id='userId' value="{{ $user->id }}">

    <div class="page">
        <div class="page__left">
            <div class="page__left__profile">
                <a href="/{{ $user->id }}/logout" class="logout">Logout</a>
                <div class="page__left__info"></div>
            </div>
            <div class="page__left__rooms"></div>
            <div class="page__left__chat">
                <h4 class="chat_name"></h4> 
                <div class="messages"></div>
               <form class="create__message" method="POST">
                    @csrf
                    <input type="hidden" name='user_id' value="{{ $user->id }}" />
                    <input type="text" name="message" placeholder="Enter your message" class="chat__message__field" />
                    <button class="send_messages">></button> 
               </form>
            </div>
        </div>
        <div class="page__right" style="background-image: url('/office/office_base_clean.png')"></div>
    </div>

    <script src="/main.js"></script>
</body>
</html>