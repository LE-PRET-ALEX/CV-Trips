const icone_conta = document.querySelector('#account_icon');
const submenu_icone_conta = document.querySelector('#account_submenu');

function show_account_settings(){
    submenu_icone_conta.style.display = 'flex';
}

function hide_account_settings(){
    submenu_icone_conta.style.display = 'none';
}

icone_conta.addEventListener('click', () => {
    if (submenu_icone_conta.style.display === 'flex') {
        hide_account_settings();
    } else {
        show_account_settings();
    }
});