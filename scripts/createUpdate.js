let selectedLocation; 
let sql; 

document.getElementById('selectlocation').addEventListener('change', () => {
    selectedLocation = document.getElementById('selectlocation').value
    console.log(selectedLocation)
    
})