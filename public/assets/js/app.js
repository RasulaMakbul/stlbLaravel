const addNewBtn = document.querySelector(".addNewBtn");
const multipleEntry = document.querySelector("#multipleEntry");
let totalPrice = 0;

addNewBtn.addEventListener("click", (e) => {
    const lastRow = multipleEntry.lastElementChild;

    let clone = lastRow.cloneNode(true);
    const input = clone.querySelector(".qty");
    input.addEventListener("change", () => {
        calculateItemTotal(input);
    });
    multipleEntry.appendChild(clone);
});

const qtyInput = multipleEntry.querySelectorAll(".qty");
qtyInput.forEach((input) => {
    input.addEventListener("change", (e) => {
        calculateItemTotal(input);
    });
});

function calculateItemTotal(input) {
    const qty = input.value;
    const tdElement = input.parentElement.parentElement;
    const upInput =
        tdElement.previousElementSibling.firstElementChild.children[1].value;
    //Div // td // previous td // div // input // value
    const calc = parseInt(qty) * parseFloat(upInput);
    tdElement.nextElementSibling.firstElementChild.children[1].value = calc;
    console.log(calc);
    totalPrice += calc;
    calculateTotalPrice();
}

function calculateTotalPrice() {
    const cartRows = document.querySelector("#price").children;

    document.getElementById("subTotal").value = totalPrice;
}
