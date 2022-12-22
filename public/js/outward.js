function showStock(params) {
    fetch("/report/details/" + params.value, {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-Token": $('input[name="_token"]').val()
        },
        method: "get",
        credentials: "same-origin",
    })
        .then(response => {
            return response.json();
        })
        .then(text => {
            console.log(text);

            document.getElementById('opening_stock').value = text.availableStock
        })
        .catch(error => console.error(error));

}

document.getElementById("issued").addEventListener("focusout", (e) => {
    let opening_stock = document.getElementById('opening_stock').value;

    let issued = e.target.value; console.log(issued > opening_stock);

    if (issued > opening_stock) {
        document.getElementById('OpeningStockalert').style.display = "block";
        document.getElementById('outwardsubmit').style.display = "none";
    } else {
        document.getElementById('OpeningStockalert').style.display = "none";
        document.getElementById('outwardsubmit').style.display = "block";
    }
});



