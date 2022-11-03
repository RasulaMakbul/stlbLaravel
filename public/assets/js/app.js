const addNewBtn = document.querySelector(".addNewBtn");
const multipleEntry = document.querySelector("#multipleEntry");

addNewBtn.addEventListener("click", (e) => {
    const lastRow = multipleEntry.lastElementChild;

    let clone = lastRow.cloneNode(true);
    multipleEntry.appendChild(clone);
});

const qtyInput = document.querySelectorAll(".form-control");
qtyInput.forEach((input) => {
    input.addEventListener("change", (e) => {
        const qty = input.value;
        const upInput =
            input.parentElement.parentElement.previousElementSibling.value;

        console.log(qty);
        console.log(upInput);
    });
});

function calculateItemTotal(input) {
    const qty = input.value;
    console.log(qty);
    console.log(input.parentElement.previousElementSibling.value);
    // const unitPrice = parseFloat(
    //     input.parentElement.previousElementSibling.innerText
    // );
    // console.log(unitPrice);
    // input.parentElement.nextElementSibling.innerText = itemTotalPrice;
}
// const qtyInput = document.querySelectorAll('#quantity');
// qtyInput.forEach(input => {
//     input.addEventListener('change', () => {

//         calculateItemTotal(input);
//     });
// });
// console.dir(qtyInput);

// function calculateItemTotal(input) {
//     console.log(input.value);
//     console.log(input.parentElement.previousElementSibling.innerFloat)
// }
