document.querySelector('form#edit-form').addEventListener('submit', function(event){
    event.preventDefault();
    if((window.confirm('Edit this Pokémon?') === true)){
        this.submit();
    }
})
