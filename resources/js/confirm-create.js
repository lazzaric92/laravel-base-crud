document.querySelector('form#create-form').addEventListener('submit', function(event){
    event.preventDefault();
    if((window.confirm('Create this Pokémon?') === true)){
        this.submit();
    }
})
