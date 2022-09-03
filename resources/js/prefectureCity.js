// $(function () {
//     $("[name=prefecture]").on("change", function () {
//         // idが一桁の時はゼロうめする
//         const prefecture_id = ("00" + $(this).val()).slice(-2);

//         $.ajax({
//             headers: {
//                 "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
//             },
//             type: "POST",
//             url: "/ajax/city",
//             data: { prefecture_id: prefecture_id },
//             dataType: "json",
//         }).done(function (data) {
//             $("#city option").remove();
//             $.each(data["data"], function (id) {
//                 $("#city").append($("<option>").text(data["data"][id]["name"]).attr("value", data["data"][id]["name"]));
//             });
//         }).fail(function () {
//             console.log("失敗");
//         });
//     });
// });

// document.addEventListener("DOMContentLoaded", function () {
//     document.getElementsByName("prefecture").addEventListener("change", function () {
//         console.log("change");
//     });
// });
// document.getElementsByName("prefecture").addEventListener("change", function () {
//     console.log("change2");
// });
// const prefecture = document.getElementsByName("prefecture")
// prefecture.addEventListener("change", function () {
//     console.log("change2");
// });

