document.addEventListener('DOMContentLoaded', () => {
    const userId = document.getElementById('userId').value
    const page__right = document.querySelector('.page__right')

    /*  Profile */
    const profile = document.querySelector('.page__left__info')
    const chat_name = document.querySelector('.chat_name')
    let placeId

    const getProfileData = () => {
        fetch(`/api/users/${userId}`)
            .then(response => response.json())
            .then(data => {
                profile.innerHTML = `
                    <img src="/avatars/${data.ava}" alt="">
                    <div class="">
                        <h3>${data.name}</h3>
                        <span>${data.created_at}</span>
                    </div>
                `
                chat_name.innerHTML = data.place.name
                placeId = data.place.id

            })
            .catch(err => console.error(err));
    }

    getProfileData()

    const page__left__rooms = document.querySelector('.page__left__rooms');

    const getPlacesData = () => {
        fetch(`/api/places`)
            .then(response => response.json())
            .then(data => {
                // console.log(data)
                page__left__rooms.innerHTML = ''

                data.forEach(place => {
                    const div  = document.createElement('div');
                    div.classList.add('place')

                    div.innerHTML =    `
                        <div class='place__title'>
                            <h3>${place.name}</h3>
                            <span>${place.users_count}/${place.max_count}</span>
                        </div>
                    `

                    if (place.users_count > 0) {
                        place.users.forEach(user => {
                            div.innerHTML += `
                                <h4>${user.name}</h4>
                            `
                            RenderPeoplePlace(user)
                        })
                    }
                    

                    page__left__rooms.appendChild(div)
                });
            })
            .catch(err => console.error(err));
    }


    const messages = document.querySelector('.messages')
    const chat__message__field = document.querySelector('.chat__message__field')

    const getAllMessages = () => {
        // console.log(placeId)
        fetch(`/api/messages/${placeId}`)
            .then(response => response.json())
            .then(data => {
            //    console.log(data)
               messages.innerHTML = ''

               data.forEach(message => {
                messages.innerHTML += `<div class='message'><b>${message.user.name}:</b> ${message.message}</div>`
               })
            })
            .catch(err => console.error(err));
    } 


    setTimeout(getAllMessages, 500)

    setInterval(getAllMessages, 2000)

    const create__message__form = document.querySelector('.create__message')

    create__message__form.addEventListener('submit', (e) => {
        e.preventDefault()

        let formData = new FormData(create__message__form);

        fetch(`/api/messages/${placeId}`, {
            method: 'POST',
            body: formData
        })
            .then(response=>{
                getAllMessages()
               chat__message__field.value = ''
            })
    })

    getPlacesData()

    page__right.addEventListener('click', (e) => {
        console.log(e.layerX, e.layerY)
    })

    function RenderPeoplePlace (user) {
        if (placeId == 1) {
            // page__right.innerHTML += `<img src="/avatars/${user.ava}" class="person" id="${user.id}"> `
            
        }
    }

    setTimeout(RenderPeoplePlace, 200)
})
