document.querySelector('form#delete-form').addEventListener('submit', function(event){
    event.preventDefault();
    if((window.confirm('Are you sure you want to free this Pokémon?') === true)){
        this.submit();
    }
})
