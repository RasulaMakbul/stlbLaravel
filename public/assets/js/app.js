const addNewBtn = document.querySelector(".addNewBtn");
const multipleEntry = document.querySelector("#multipleEntry");

addNewBtn.addEventListener("click", (e) => {
    const lastRow = multipleEntry.lastElementChild;

    // const id = parseInt(lastRow.getAttribute('id'))
    let clone = lastRow.cloneNode(true);
    // clone.setAttribute('id', (id + 1));
    multipleEntry.appendChild(clone);
});

// <?php
//     // This is where you would do any database call
//     if (!empty($_POST)) {
//         // Send back a jSON array via echo
//         echo json_encode(array("phone" => '123-12313', "email" => 'test@test.com', 'city' => 'Medicine Hat', 'address' => '556 19th Street NE'));
//         // Exit probably not required if you
//         // separate out your code into two pages
//         exit;
//     }
//     ?>

//     <form id="tester">
//         <select name="client" id="client">
//             <option value="">-- Select Client Name -- </option>
//             <option value="1">John</option>
//             <option value="2">Smith</option>
//         </select>
//         <input name="phone" type="text" value="">
//         <input name="email" type="text" value="">
//         <input name="city" type="text" value="">
//         <textarea name="address"></textarea>
//     </form>

//     <!-- jQuery Library required, make sure the jQuery is latest -->

// <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>;

// $(document).ready(function () {
//     // On change of the dropdown do the ajax
//     $("#buyer").change(function () {
//         $.ajax({
//             // Change the link to the file you are using
//             url: "{{route('sales.create')}}",
//             type: "post",
//             // This just sends the value of the dropdown
//             data: {
//                 buyer: $(this).val(),
//             },
//             success: function (response) {
//                 // Parse the jSON that is returned
//                 // Using conditions here would probably apply
//                 // incase nothing is returned
//                 var Vals = JSON.parse(response);
//                 // These are the inputs that will populate
//                 $("input[name='phone']").val(Vals.phone);
//                 $("input[name='email']").val(Vals.email);
//                 $("input[name='city']").val(Vals.city);
//                 $("textarea[name='address']").val(Vals.address);
//             },
//         });
//     });
// });
