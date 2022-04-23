addEventListener('DOMContentLoaded', () => {
    const menu_button = document.querySelector('.menu_button')
    if (menu_button) {

        menu_button.addEventListener('click', () => {
            const menu_items = document.querySelector('.menu_items')
            menu_items.classList.toggle('show')
        })
    }
})
