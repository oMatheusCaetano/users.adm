<script>

function searchByCep() {
    let zip = document.getElementById('zip').value
    if (zip.length < 8) alert('CEP Inválido')
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

function newPhoneField() {
    let phoneInput = document.createElement("input")
    phoneInput.classList = 'form-control mb-1 phone' 
    phoneInput.name = 'phones[]'
    document.getElementById("phones_box").appendChild(phoneInput)
}

</script>