<script>

function searchByCep() {
    let zip = document.getElementById('zip').value
    let streetField = document.getElementById('street')
    let complementField = document.getElementById('complement')
    let neighborhoodField = document.getElementById('neighborhood')
    let cityField = document.getElementById('city')
    let stateField = document.getElementById('state')

    fetch(`https://viacep.com.br/ws/${zip}/json`)
        .then(res => res.json())
        .then( json => {
            streetField.value = json.logradouro
            complementField.value = json.complemento
            neighborhoodField.value = json.bairro
            cityField.value = json.localidade
            stateField.value = json.uf
        })
}

</script>