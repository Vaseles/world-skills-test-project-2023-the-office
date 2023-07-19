document.addEventListener('DOMContentLoaded', () => {
    // User Id 
    const userId = document.querySelector('#userId').value
    let place_now  

    // get profile data function
    const get_profile_data = () => {
        fetch(`/api/users/${userId}`)
            .then(response => response.json())
            .then(data => {
                place_now = data.place_id
                renderProfileData(data)
            })
            .catch(err => console.error(err))
    }

    get_profile_data()

    // get rooms data function
    const get_rooms_data = () => {
        fetch(`/api/places`)
            .then(response => response.json())
            .then(data => {
                // console.log(data)

                let page__left__rooms = document.querySelector('.page__left__rooms')
                page__left__rooms.innerHTML = ''
    
                
                data.places.forEach(room => {
                    const div = document.createElement('div')
                    div.classList.add('room')
                    div.innerHTML = `
                        <div class='room_main'>
                            <h3>${room.name}</h3> <span>(${room.count_now}/${room.people_count})</span>
                        </div>
                    `
                    if (room.count_now > 0 ) {
                        room.users.forEach(user => {
                            div.innerHTML += `
                                <div class='room__user'>
                                    <img src='/avatars/${user.avatar}' >
                                    <h3>${user.name}</h3>
                                </div>
                            `
                        })
                    }

                    page__left__rooms.appendChild(div)
                });
            })
            .catch(err => console.error(err))
    }
    get_rooms_data()

     // get profile data function
     const get_messages_data = () => {
        fetch(`/api/messages/${place_now}`)
            .then(response => response.json())
            .then(data => {
                console.log(data)
                if (data.length > 0) {

                }
            })
            .catch(err => console.error(err))
    }

    // setInterval(get_messages_data, 1000)

    get_messages_data()


    let create__message = document.querySelector('#create__message')
    let message = document.querySelector('#message')

    create__message.onclick = () => {
        fetch(`/api/messages`, {
            method: 'POST',
            body: {
                'message': message.value,
                'user_id': userId,
                'place_id': place_now
            }
        })
        .then(response => response.json())
        .then(data => {
            console.log(data)   
        })
        .catch(err => console.error(err))
    }
})

// TODO: RENDER PROFILE DATA
function renderProfileData  (data) {
    document.querySelector('.page__left__info').innerHTML = `
        <img src="/avatars/${data.avatar}" alt="">
        <div class="">
            <h3>${data.name}</h3>
            <span>${data.created_at}</span>
        </div>
    `
}